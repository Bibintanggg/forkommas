<?php

namespace App\Actions\Events;

use App\Models\Events;
use Illuminate\Support\Facades\Storage;

class UpdateEvents
{
    public function handle(array $data, Events $events): bool
    {
        if(isset($data['banner'])) {
            $data['banner'] = Storage::disk('public')->put('events-banner', $data['banner']);
        }

        return $events->update([
            'title' => $data['title'],
            'theme' => $data['theme'],
            'event_date' => $data['event_date'],
            'guests' => $data['guests'],
            'banner' => $data['banner'] ?? null,
            'position' => $data['position'],
            'location   ' => $data['location'],
        ]);
    }
}