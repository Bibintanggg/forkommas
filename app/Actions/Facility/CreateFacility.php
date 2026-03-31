<?php

namespace App\Actions\Facility;

use App\Models\Facilities;

class CreateFacility
{
    public function handle(array $data)
    {
        return Facilities::create([
            'masjid_id' => $data['masjid_id'],
            'name' => $data['name'],
            'status' => $data['status']
        ]);
    }
}