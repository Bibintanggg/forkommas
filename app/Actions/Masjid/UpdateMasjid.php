<?php

namespace App\Actions\Masjid;

use App\Models\Masjid;
use Illuminate\Support\Facades\Storage;

class UpdateMasjid
{
    public function handle(Masjid $masjid, array $data): bool
    {
        if(isset($data['logo'])) {
            if($masjid->logo) {
                 Storage::disk('public')->delete($masjid->logo);
            }
            $data['logo'] = Storage::disk('public')->put('masjid-logos', $data['logo']);
        }
        
        return $masjid->update([
            'name' => $data['nama'],
            'address' => $data['address'],
            'description' => $data['description'],
            'logo' => $data['logo'] ?? $masjid->logo,
            'active_jamaah' => $data['active_jamaah'] ?? $masjid->active_jamaah
        ]);
    }
}
