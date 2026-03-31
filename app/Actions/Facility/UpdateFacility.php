<?php

namespace App\Actions\Facility;

class UpdateFacility
{
    public function handle(array $data, $facility): bool
    {
        return $facility->update([
            'masjid_id' => $data['masjid_id'],
            'name' => $data['name'],
            'status' => $data['status']            
        ]);
    }
}