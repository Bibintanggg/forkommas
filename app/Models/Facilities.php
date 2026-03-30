<?php

namespace App\Models;

use App\Enum\StatusFacilities;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $table = 'facility';

    protected $fillable = [
        'masjid_id',
        'name',
        'status'
    ];

    protected $casts = [
        'status' => StatusFacilities::class
    ];

    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }
}
