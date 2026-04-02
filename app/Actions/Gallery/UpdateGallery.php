<?php

namespace App\Actions\Gallery;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class UpdateGallery
{
    public function handle($gallery, array $data): bool
    {
        if(isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('image-banner', $data['image']);
        }

        return $gallery->update([
            'title' => $data['title'],
            'category' => $data['category'],
            'event_date' => $data['event_date'],
            'location' => $data['location'],
            'image' => $data['image']
        ]);
    }
}