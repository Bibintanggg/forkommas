<?php

namespace App\Enum;

enum StatusFacilities: string
{
    case READY = "ready";
    case IN_PROGRESS = "in_progress";
    case MAINTENANCE = "maintenance";

    public function label(): string
    {
        return match ($this) {
            self::READY => "SIAP DIPAKAI",
            self::IN_PROGRESS => "SEDANG DI PROSES",
            self::MAINTENANCE => "SEDANG DI PERBAIKI",
        };
    }

    public function options(): array
    {
        return [
            self::READY->value => self::READY->label(),
            self::IN_PROGRESS->value => self::IN_PROGRESS->label(),
            self::MAINTENANCE->value => self::MAINTENANCE->label(),
        ];
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
