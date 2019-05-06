<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table ='reservations';
    protected $fillable =['section_id','member_id','number','date'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
