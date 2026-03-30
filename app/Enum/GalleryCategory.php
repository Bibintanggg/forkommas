<?php

namespace App\Enum;

enum GalleryCategory: string
{
    case KAJIAN_AKBAR = "kajian_akbar",
    case KEGIATAN_SOSIAL = "kegiatan_sosial",
    case REMAJA_MASJID = "remaja_masjid",
    case RAPAT_PENGURUS = "rapat_pengurus",

    public function label(): string
    {
        return match ($this) {
            self::KAJIAN_AKBAR => "Kajian Akbar",
            self::KEGIATAN_SOSIAL => "Kegiatan Sosial",
            self::REMAJA_MASJID => "Remaja Masjid",
            self::RAPAT_PENGURUS => "Rapat Pengurus",
        };
    }

    public function options(): array
    {
        return [
            self::KAJIAN_AKBAR->value => self::KAJIAN_AKBAR->label(),
            self::KEGIATAN_SOSIAL->value => self::KEGIATAN_SOSIAL->label(),
            self::REMAJA_MASJID->value => self::REMAJA_MASJID->label(),
            self::RAPAT_PENGURUS->value => self::RAPAT_PENGURUS->label(),
        ]; 
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}