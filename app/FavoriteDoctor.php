<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteDoctor extends Model
{
    protected $table ='favorite_doctor';
    protected $fillable=[
        'user_id', 'doctor_id',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
