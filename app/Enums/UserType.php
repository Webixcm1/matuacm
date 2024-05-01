<?php

declare(strict_types=1);

namespace App\Enums;

enum UserType : string
{
    case PASSAGER = 'passager';
    case CONDUCTEUR = 'conducteur';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item) => $item->value, self::cases());
    }
}
