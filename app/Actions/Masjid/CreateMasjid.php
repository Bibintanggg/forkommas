<?php

namespace App\Actions\Masjid;

use App\Models\Masjid;
use Illuminate\Support\Facades\Storage;

class CreateMasjid
{
    public function handle(array $data): Masjid
    {
        if(isset($data['logo'])) {
            $data['logo'] = Storage::disk('public')->put('masjid-logos', $data['logo']);
        }
        
        return Masjid::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'description' => $data['description'],
            'logo' => $data['logo'] ?? null,
            'active_jamaah' => $data['active_jamaah'] ?? 0
        ]);
    }
}