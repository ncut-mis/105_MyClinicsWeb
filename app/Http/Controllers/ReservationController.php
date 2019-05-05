<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Doctor;
use App\Reservation;
use App\Section;
use App\Staff;
use Auth;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index($id){
        $sections = Section::where('clinic_id',$id)->orderBy('date')->get();
        $doctors = Doctor::all();
        $staffs = Staff::all();
        $data	=	['sections'=> $sections,'staffs'=>$staffs,'doctors'=>$doctors];
        return view('reservation2',$data);
    }
    public function index2($id){
        $sections = Section::where('doctor_id',$id)->orderBy('date')->get();
        $doctors = Doctor::all();
        $staffs = Staff::all();
        $data	=	['sections'=> $sections,'staffs'=>$staffs,'doctors'=>$doctors];
        return view('reservation2',$data);
    }

    /**
     * @param $id
     */
    public function store($id){
        $sections = Section::find($id);
        $reservation = Reservation::where('section_id',$id)->count();
        Reservation::create([
            'section_id' => $id,
            'member_id' => auth()->user()->id,
            'number' => $reservation+1,
            'date' => $sections->date,
        ]);
        return view('welcome');
    }

    public function myreservation(){
        //判斷有無登入
        if(Auth::user()==null){
            return view('auth.login');
        }
        $user = Auth::user()->id;
        $reservations = Reservation::where('member_id',$user)->orderby('date')->get();
        $sections = Section::get();
        $clinics = Clinic::get();
        $data=['sections'=>$sections,'reservations'=>$reservations,'clinics'=>$clinics];
        return view('member.reservation', $data);
    }


}
