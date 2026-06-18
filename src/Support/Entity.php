<?php

declare(strict_types=1);

namespace LogoObjects\Support;

/**
 * Hydrate edilebilir taban DTO. Tum tip siniflari bundan turer.
 *
 * fromArray()  : API yanit dizisini tipli nesneye doldurur (ic ice dahil).
 * toArray()    : nesneyi diziye cevirir (null alanlar atlanir).
 * jsonSerialize: json_encode destegi.
 */
abstract class Entity implements \JsonSerializable
{
    /**
     * @param mixed $data
     * @return static
     */
    public static function fromArray($data): self
    {
        $obj = new static();
        if (!is_array($data)) {
            return $obj;
        }
        $casts = static::casts();
        foreach ($data as $k => $v) {
            if ($v !== null && isset($casts[$k])) {
                $cast = $casts[$k];
                if (is_array($cast)) {
                    $cls = $cast[0];
                    $items = (is_array($v) && array_key_exists('items', $v) && is_array($v['items']))
                        ? $v['items'] : $v;
                    $list = [];
                    if (is_array($items)) {
                        foreach ($items as $it) {
                            $list[] = is_array($it) ? $cls::fromArray($it) : $it;
                        }
                    }
                    $obj->{$k} = $list;
                    continue;
                }
                $obj->{$k} = is_array($v) ? $cast::fromArray($v) : $v;
                continue;
            }
            $obj->{$k} = $v;
        }
        return $obj;
    }

    /** @return array<string,mixed> */
    public function toArray(): array
    {
        $out = [];
        foreach (get_object_vars($this) as $k => $v) {
            if ($v === null) {
                continue;
            }
            $out[$k] = self::normalize($v);
        }
        return $out;
    }

    /**
     * @param mixed $v
     * @return mixed
     */
    private static function normalize($v)
    {
        if ($v instanceof self) {
            return $v->toArray();
        }
        if (is_array($v)) {
            $r = [];
            foreach ($v as $kk => $vv) {
                $r[$kk] = self::normalize($vv);
            }
            return $r;
        }
        return $v;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Alan -> sinif eslemesi (hydrate icin). Tekil: Class::class, dizi: [Class::class].
     *
     * @return array<string,string|array{0:string}>
     */
    protected static function casts(): array
    {
        return [];
    }
}