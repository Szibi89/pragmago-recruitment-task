<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Trait;

trait EnumValuesTrait
{
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}