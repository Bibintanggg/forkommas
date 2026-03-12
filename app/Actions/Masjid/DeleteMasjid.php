<?php

namespace App\Actions\Masjid;

use App\Models\Masjid;
use Illuminate\Support\Facades\Storage;

class DeleteMasjid
{
    public function handle(Masjid $masjid): bool
    {
        if($masjid->logo) {
            Storage::disk('public')->delete($masjid->logo);
        }

        return $masjid->delete();
    }
}