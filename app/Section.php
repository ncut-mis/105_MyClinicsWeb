<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table='sections';
    protected $fillable=[
        'week', 'section', 'date','current_on'
    ];
}
