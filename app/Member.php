<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table ='members';

    protected $fillable=[
        'name', 'birthday', 'number','phone','adderss'
    ];

    public function favoriteclinic()
    {
        return $this->hasMany(FavoriteClinic::class);
    }

    public function favoritedoctor()
    {
        return $this->hasMany(FavoriteDoctor::class);
    }
}
