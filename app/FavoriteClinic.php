<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteClinic extends Model
{
    protected $fillable=[
        'user_id', 'clinics_id',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
