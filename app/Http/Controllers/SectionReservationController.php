<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Doctor;
use App\Post;
use App\Reservation;
use App\Section;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionReservationController extends Controller
{
    public function generate($id){
        if(Auth::user()==null){
            return view('auth.login');
        }
        $users = Auth::user()->id;
        $sections = Section::find($id);
        $clinics = Clinic::all();
        $doctors = Doctor::all();
        $staffs = Staff::all();
        $data = ['user'=>$users,'sections'=>$sections,'clinics'=>$clinics,'staffs'=>$staffs,'doctors'=>$doctors];
        return view('checkreservation',$data);
    }
    public function store(Request $request,$id){
        $sections = Section::find($id);
        $reservation = $sections->next_register_no;
        $reminding_time=$request->input('reminding_time');
        $reminding_no=$request->input('reminding_no');
        Reservation::create([
            'section_id' => $id,
            'member_id' => auth()->user()->id,
            'reservation_no' => $reservation,
            'reminding_time' =>$reminding_time,
            'reminding_no' =>$reminding_no,
            'status' => '-1',
            'created_at' => date("Y-m-d",strtotime('8hours')),
        ]);
        $sections->next_register_no = $reservation+1;
        $sections->save();
        //Reservation::all()->update(['next_register_no' =>$reservation+1]);
        $posts = Post::all();
        $msg = '預約成功';
        $data = ['posts'=>$posts,'msg'=>$msg];
        return view('home_msg',$data);
    }
}
