# logo-objects-php

Logo Objects REST Service (**Tiger / GO / Wings**) için tipli, bağımlılıksız bir **PHP istemci kütüphanesi**.
Logo'nun REST servisindeki **156 nesnenin tamamı** için endpoint başına ayrı, tip güvenli bir client ile
**CRUD** ve nesneye özel tüm işlemleri sağlar.

- Sadece `ext-curl` ve `ext-json` gerektirir; başka bağımlılık yoktur.
- **PHP 7.4 – 8.3** uyumludur.
- OAuth2 (password grant) token alımı ve `401`'de otomatik yenileme dahildir.
- Her endpoint için ayrı **`...Client`** sınıfı: `$logo->salesOrders->getAll()`, `$logo->ArpSlips->create()`.
- Her nesnenin alanları **tipli PHP sınıfları** olarak modellenmiştir; yanıtlar otomatik olarak bu sınıflara
  doldurulur (hydrate edilir).

## Kurulum

```bash
composer require ankapix/logo-objects-php
```

GitLab deposundan kurmak için projenizin `composer.json` dosyasına:

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://gitlab.com/Ankapix/logo-object-php" }
    ],
    "require": {
        "ankapix/logo-objects-php": "dev-main"
    }
}
```

Composer kullanmıyorsanız depo kökündeki `autoload.php` dosyasını dahil edebilirsiniz.

## Hızlı Başlangıç

```php
require 'vendor/autoload.php'; // ya da: require __DIR__ . '/autoload.php';

use LogoObjects\LogoClient;

$logo = new LogoClient([
    'baseUrl'   => 'http://SUNUCU_IP:32001/api/v1',
    'username'  => 'KULLANICI',
    'password'  => 'PAROLA',
    'firmno'    => '1',
    'basicAuth' => 'BASE64_CLIENT_BILGISI', // base64("clientId:clientSecret")
]);

// LISTELEME — ApiResponse döner; items[] tipli nesnelerdir
$resp = $logo->salesOrders->getAll(['limit' => 10, 'sort' => ['DATE', 'desc']]);
foreach ($resp->items as $order) {
    echo $order->DOCODE, ' - ', $order->NETTOTAL, PHP_EOL;
}

// TEK KAYIT
$order = $logo->salesOrders->getById(123);

// EKLEME / DÜZENLEME / SİLME
$logo->salesOrders->create([ /* ... */ ]);
$logo->salesOrders->update(123, [ /* ... */ ]);          // PUT
$logo->salesOrders->patch(123, ['DOCODE' => 'X']);       // PATCH
$logo->salesOrders->delete(123);

// SAYIM ve ARAMA
$count   = $logo->salesOrders->getCount();
$results = $logo->salesOrders->search(['code' => 'AB', 'date' => ['gte' => '01.01.2026']]);
```

`.env` kullanıyorsanız `LogoClient::fromEnv()` ile de oluşturabilirsiniz (bkz. `.env.example`).

## Mimari

```
src/
├── LogoClient.php              tüm endpoint client'larını taşıyan ana sınıf
├── Endpoints.php               endpoint adı -> URL kaydı
├── Http/BaseApiClient.php      cURL, OAuth2 token, buildQueryString
├── Support/Entity.php          hydrate edilebilir taban DTO (fromArray/toArray)
├── Types/                      ortak tipler (BaseEntity, ApiResponse, Meta, ...)
├── Utils/QueryBuilder.php      OData sorgu üretimi
└── Clients/<Endpoint>/
        <Endpoint>Client.php    o endpoint'in CRUD + özel metotları
        Types.php               o endpoint'in nesne/satır tipleri (PHP sınıfları)
```

Her endpoint client'ı `BaseApiClient`'tan türer ve aynı ortak CRUD metotlarını paylaşır:

| İşlem | Metot | HTTP |
|------|-------|------|
| Listeleme | `->getAll($options)` | `GET /endpoint` |
| Tek kayıt | `->getById($id, $options)` | `GET /endpoint/{id}` |
| Arama (kriter) | `->search($criteria)` | `GET /endpoint?q=...` |
| Sayım | `->getCount()` | `GET /endpoint?count=true` |
| Ekleme | `->create($data)` | `POST /endpoint` |
| Güncelleme (tam) | `->update($id, $data)` | `PUT /endpoint/{id}` |
| Güncelleme (kısmi) | `->patch($id, $data)` | `PATCH /endpoint/{id}` |
| Silme | `->delete($id)` | `DELETE /endpoint/{id}` |

Bunlara ek olarak her endpoint, Logo servisinin sunduğu nesneye özel işlemleri
(XML içe/dışa aktarım, kampanya/koşul uygulama, satır işlemleri, seri/lot vb.)
ayrı metotlar olarak içerir.

### Sorgu seçenekleri

`getAll` ve `getById` Logo'nun desteklediği parametreleri alır:
`limit`, `offset`, `fields` (dizi), `sort`, `q`, `expand`, `expandLevel`, `withCount`, `count`.

```php
$logo->items->getAll([
    'limit'  => 50,
    'fields' => ['CODE', 'NAME'],
    'sort'   => [['CODE', 'NAME'], 'desc'], // -> "CODE desc,NAME desc"
]);
```

### Tipli yanıtlar (hydrate)

`getById/create/update/patch/delete` ilgili nesne sınıfını, `getAll/search` ise
`items` alanı nesne sınıflarıyla dolu bir `ApiResponse` döndürür. Diziye ihtiyaç
duyarsanız `->toArray()` kullanın:

```php
$order = $logo->salesOrders->getById(123);
$order->TRANSACTIONS->items[0]->ITEMCODE; // iç içe satırlar da tiplidir
$array = $order->toArray();
```

## Kimlik Doğrulama

İstemci ilk istekte otomatik olarak `POST {baseUrl}/token` çağırır:

- Header: `Authorization: Basic base64("clientId:clientSecret")`
- Gövde: `grant_type=password&username=...&Firmno=...&password=...`
- Dönen `access_token` sonraki tüm isteklerde `Authorization: Bearer ...` olarak kullanılır.
- `401` alınırsa token bir kez yenilenir ve istek tekrar denenir.

Hazır bir access token ile çalışmak için yapılandırmaya `'apiKey' => '...'` verebilirsiniz.

## Örnekler

`examples/` klasörü çalıştırılabilir örnekler içerir (Composer olmadan da çalışır).

## Gereksinimler

- PHP 7.4 – 8.3
- `ext-curl`, `ext-json`
- Erişilebilir bir Logo Objects REST Service (genelde `:32001/api/v1`)

## Lisans

MIT. Ayrıntılar için `LICENSE` dosyasına bakın. © 2026 Yasin Köse / Ankapix.
