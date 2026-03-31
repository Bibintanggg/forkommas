<?php

namespace App\Actions\Program;

class UpdateProgram
{
    public function handle(array $data, $program): bool
    {
        return $program->update([
            'masjid_id' => $data['masjid_id'],
            'title' => $data['title'],
            'description' => $data['description'],            
        ]);
    }
}