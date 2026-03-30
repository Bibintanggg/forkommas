<?php

namespace App\Actions\Events;

use App\Models\Events;
use Illuminate\Support\Facades\Storage;

class DeleteEvents 
{
    public function handle(Events $events): bool
    {
        if($events->banner) {
            Storage::disk('public')->delete('events-banner');
        }

        return $events->delete();
    }
}