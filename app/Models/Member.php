<?php

namespace App\Models;

use App\Enum\BoardPosition;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'board_member';

    protected $fillable = [
        'masjid_id',
        'name',
        'phone_number',
        'position',
        'email'
    ];

    protected $casts = [
        'position' => BoardPosition::class
    ];

    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }

 }
