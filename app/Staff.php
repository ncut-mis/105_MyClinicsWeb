<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table ='staff';

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }
}
