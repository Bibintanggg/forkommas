<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    protected $fillable = [
        'name',
        'address',
        'description',
        'logo',
        'active_jamaah'
    ];
}
