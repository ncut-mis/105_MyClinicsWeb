<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Reservation;
use App\Section;
use App\Staff;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index($id){
        $sections = Section::where('clinic_id',$id)->orderBy('date')->get();
        $doctors = Doctor::all();
        $staff = Staff::all();
        $data	=	['sections'=> $sections,'staff'=>$staff,'doctors'=>$doctors];
        return view('reservation2',$data);
    }
    public function index2($id){
        $sections = Section::where('doctor_id',$id)->orderBy('date')->get();
        $doctors = Doctor::all();
        $staff = Staff::all();
        $data	=	['sections'=> $sections,'staff'=>$staff,'doctors'=>$doctors];
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


}
