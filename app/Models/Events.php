<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'event';
    protected $fillable = [
        'title',
        'theme',
        'event_date',
        'location',
        'guests',
        'banner',
        'position'
    ];
}
