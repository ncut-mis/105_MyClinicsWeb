<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Doctor;
use App\Post;
use App\Reservation;
use App\Section;
use App\Staff;
use Auth;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function home(){
        $posts = Post::all();
        $data = ['posts'=>$posts];
        return view ('home',$data);
    }
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
    public function check($id){
        $sections = Section::find($id);
        $clinics = Clinic::all();
        $doctors = Doctor::all();
        $staffs = Staff::all();
        $data = ['sections'=>$sections,'clinics'=>$clinics,'staffs'=>$staffs,'doctors'=>$doctors];
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
        $data = ['posts'=>$posts];
        return view('welcome',$data);
    }
    public function myreservationlist(){
        if(Auth::user()==null){
            return view('auth.login');
        }
        $user = Auth::user()->id;
        $reservations = Reservation::where('member_id',$user)->orderby('id')->get();
        $sections = Section::get();
        $clinics = Clinic::get();
        $data=['sections'=>$sections,'reservations'=>$reservations,'clinics'=>$clinics,];
        return view('member.reservationlist', $data);
    }
    public function myreservation($id){
        //判斷有無登入
        if(Auth::user()==null){
            return view('auth.login');
        }
        $reservations = Reservation::where('section_id',$id)->orderby('id')->get();
        $sections = Section::get();
        $clinics = Clinic::get();
        $doctors = Doctor::all();
        $staffs = Staff::all();
        $data=['sections'=>$sections,'reservations'=>$reservations,'clinics'=>$clinics,'staffs'=>$staffs,'doctors'=>$doctors];
        return view('member.reservation', $data);
    }

    public function addreminding($id){
        $reservations = Reservation::find($id);
        $data = ['reservations'=>$reservations];
        return view('reminding',$data);
    }
    public function storereminding(Request $request,$id){
        $reminding_time=$request->input('reminding_time');
        $reminding_no=$request->input('reminding_no');
        //$reservations = Reservation::all()->update(['reminding_time' =>$reminding_time]);
        //$reservations = Reservation::all()->update(['reminding_no' =>$reminding_no]);
        $reservations = Reservation::find($id);
        $reservations->reminding_time=$reminding_time;
        $reservations->reminding_no=$reminding_no;
        $reservations->save();
        return view('welcome');
    }

    public function delete($id){
        $reservations = Reservation::find($id)->delete();
    return view('welcome');
}
    public function fire()
    {
        date_default_timezone_set("Asia/Taipei");
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $number2=Section::where('date',$date)->where('date',$date)->where('start','<',$time)->where('end','>',$time)->get()->first();
        $registers=$number2->registers()->where('member_id',auth()->user()->id)->get()->first();
        $a=$registers->number-$registers->reminding_no;

        $data=['number2'=>$number2,'registers'=>$registers,'a'=>$a];
        return view('fire',$data);
    }
    public function fire2()
    {
        return view('fire2');
    }

    public function fire3()
    {
        return view('fire3');
    }
}
