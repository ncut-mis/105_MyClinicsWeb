<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\FavoriteDoctor;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function show($id){
        $doctors = Doctor::find($id);
        $staffs = Staff::where('id',$doctors->staff_id)->get();
        $user = Auth::user()->id;
        $check = FavoriteDoctor::where('user_id',$user)->where('doctor_id',$id)->get();

        $data = ['doctors'=>$doctors,'staffs'=>$staffs,'check'=>$check];
        return view('clinic.doctor',$data);
    }


}
