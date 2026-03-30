<?php

namespace App\Actions\Member;

use App\Models\Member;

class CreateMember
{
    public function handle(array $data): Member
    {
        return Member::create([
            'masjid_id' => $data['masjid_id'],
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'position' => $data['position'],
            'email' => $data['email']
        ]);
    }
}