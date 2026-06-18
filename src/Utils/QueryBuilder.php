<?php

declare(strict_types=1);

namespace LogoObjects\Utils;

/**
 * ORM benzeri OData sorgu olusturucu (node queryBuilder.ts PHP karsiligi).
 */
class QueryBuilder
{
    /**
     * Kriter dizisinden OData sorgu metni uretir.
     *
     * @param array<string,mixed>       $criteria
     * @param array<string,string>|null $fieldMapping camelCase -> UPPER_CASE
     */
    public static function buildSearchQuery(array $criteria, ?array $fieldMapping = null): ?string
    {
        $conditions = [];
        foreach ($criteria as $field => $value) {
            if ($value === null) {
                continue;
            }
            $f = $fieldMapping[$field] ?? strtoupper($field);

            if (is_array($value) && self::isList($value)) {
                $or = [];
                foreach ($value as $v) {
                    $or[] = is_string($v) ? "$f eq '$v'" : "$f eq $v";
                }
                $conditions[] = '(' . implode(' or ', $or) . ')';
            } elseif (is_array($value)) {
                foreach (['eq', 'neq', 'gt', 'gte', 'lt', 'lte'] as $op) {
                    if (array_key_exists($op, $value) && $value[$op] !== null) {
                        $v = $value[$op];
                        $conditions[] = is_string($v) ? "$f $op '$v'" : "$f $op $v";
                    }
                }
                if (isset($value['like'])) {
                    $conditions[] = "$f like '{$value['like']}'";
                }
                if (isset($value['in']) && is_array($value['in'])) {
                    $or = [];
                    foreach ($value['in'] as $v) {
                        $or[] = is_string($v) ? "$f eq '$v'" : "$f eq $v";
                    }
                    $conditions[] = '(' . implode(' or ', $or) . ')';
                }
            } elseif (is_string($value)) {
                $conditions[] = "$f like '$value*'";
            } elseif (is_bool($value)) {
                $conditions[] = "$f eq " . ($value ? 'true' : 'false');
            } else {
                $conditions[] = "$f eq $value";
            }
        }
        return $conditions ? implode(' and ', $conditions) : null;
    }

    /**
     * @param array<string,mixed> $a
     */
    private static function isList(array $a): bool
    {
        if ($a === []) {
            return false;
        }
        return array_keys($a) === range(0, count($a) - 1);
    }

    /**
     * @param string[] $propertyNames
     * @return array<string,string>
     */
    public static function createFieldMapping(array $propertyNames): array
    {
        $map = [];
        foreach ($propertyNames as $prop) {
            $camel = preg_replace_callback('/_([a-z])/', function ($m) {
                return strtoupper($m[1]);
            }, strtolower($prop));
            $map[$camel] = $prop;
        }
        return $map;
    }
}