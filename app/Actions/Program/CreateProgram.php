<?php

namespace App\Actions\Program;

use App\Models\Program;

class CreateProgram
{
    public function handle(array $data): Program
    {
        return Program::create([
            'masjid_id' => $data['masjid_id'],
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
    }
}