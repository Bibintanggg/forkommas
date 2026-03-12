<?php

namespace App\Actions\Events;

use App\Models\Events;

class CreateEvents
{
    public function handle(array $data): Events
    {
        return Events::create([
            
        ]);
    }
}