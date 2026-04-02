<?php

namespace App\Actions\Member;

class UpdateMember
{
    public function handle($event, array $data): bool
    {
        return $event->update([
            'masjid_id' => $data['masjid_id'],
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'position' => $data['position'],
            'email' => $data['email']
        ]);
    }
}