<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table ='doctors';

    protected $fillable=[
        'specialties', 'experiences', 'degrees','clinic_date'
    ];

    public function section()
    {
        return $this->hasMany(Section::class);
    }
    public function diagnosis()
    {
        return $this->hasMany(diagnosis::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function staff()
    {
        return $this->belongsTo(staff::class);
    }

    public function per_week_section()
    {
        return $this->hasMany(Per_week_section::class);
    }


}
