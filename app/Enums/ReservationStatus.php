<?php

declare(strict_types=1);

namespace App\Enums;

enum ReservationStatus: string
{
    case CONFIRMER = 'confirmer';
    case EN_ATTENTE = 'en attente';
    case ANNULER = 'annuler';

    static function allCaseInStr(): array
    {
        return array_map(fn ($item) => $item->value, self::cases());
    }
}
