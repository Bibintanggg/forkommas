<?php

namespace App\Actions\Events;

class UpdateMasijd 
{
    public function handle($event, array $data): bool
    {
        return $event->update([
            'title' => $data['title'],
            'theme' => $data['theme'],
            'event_date' => $data['event_date'],
            'location' => $data['location'],
            'guests' => $data['guests'],
            'position' => $data['position']
        ]);
    }
}