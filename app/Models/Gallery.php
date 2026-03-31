<?php

namespace App\Models;

use App\Enum\GalleryCategory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'title',
        'category',
        'event_date',
        'location',
        'image'
    ];

    protected $casts = [
        'category' => GalleryCategory::class
    ];
}
