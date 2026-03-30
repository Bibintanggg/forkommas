<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    protected $table = 'masjid';
    protected $fillable = [
        'name',
        'address',
        'description',
        'logo',
        'active_jamaah'
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'masjid_id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'masjid_id');
    }  
    
    public function facilities()
    {
        return $this->hasMany(Facilities::class, 'masjid_id');
    }
}
