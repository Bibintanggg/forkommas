<?php

namespace App\Enum;

enum BoardPosition: string
{
    case KETUA = 'ketua';
    case SEKRETARIS = 'sekretaris';
    case BENDAHARA = 'bendahara';

    public function label(): string
    {
        return match ($this) {
            self::KETUA => "KETUA",
            self::SEKRETARIS => "SEKRETARIS",
            self::BENDAHARA => "BENDAHARA",
        };
    }

    public function options(): array
    {
        return [
            self::KETUA->value => self::KETUA->label(),
            self::SEKRETARIS->value => self::SEKRETARIS->label(),
            self::BENDAHARA->value => self::BENDAHARA->label(),
        ];
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}