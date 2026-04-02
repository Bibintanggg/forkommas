<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    protected $fillable = [
        'masjid_id',
        'title',
        'description'
    ];

    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }
}
