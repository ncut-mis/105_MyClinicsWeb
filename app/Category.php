<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table ='categories';

    protected $fillable=[
        'categeoy'
    ];

    public function clinic()
    {
        return $this->hasMany(Clinic::class);
    }
}
