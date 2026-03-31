<?php

namespace App\Actions\Gallery;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class CreateGallery
{
    public function handle(array $data): Gallery
    {
        if(isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('image-banner', $data['image']);
        }

        return Gallery::create([
            'title' => $data['title'],
            'category' => $data['category'],
            'event_date' => $data['event_date'],
            'location' => $data['location'],
            'image' => $data['image']
        ]);
    }
}