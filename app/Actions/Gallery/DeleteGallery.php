<?php

namespace App\Actions\Gallery;

use Illuminate\Support\Facades\Storage;

class DeleteGallery
{
    public function handle($gallery): bool
    {
        if($gallery->image) {
            Storage::disk('public')->delete('gallery-image');
        }
        
        return $gallery->delete();
    }
}