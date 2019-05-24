<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table ='registers';
    protected $fillable =['section_id','member_id','reservation_no','status','reminding_time','reminding_no'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
