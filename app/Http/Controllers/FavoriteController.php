<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\FavoriteDoctor;
use App\Staff;
use Illuminate\Http\Request;
use Auth;
use App\FavoriteClinic;
use App\Clinic;

class FavoriteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index(){
        //$favoriteclinic=FavoriteClinic::orderBy('user_id','=',Auth::user()->id)->get();
        if(Auth::user()==null){
            return view('auth.login');
        }
        $favorite_clinics=FavoriteClinic::where('user_id','=',Auth::user()->id)->get();
        $clinics = Clinic::orderBy('id')->get();

        $favorite_doctors =FavoriteDoctor::where('user_id',Auth::user()->id)->get();
        $staffs = Staff::all();
        $doctors = Doctor::all();
        $data = ['favorite_clinics'=>$favorite_clinics,'clinics'=>$clinics,'favorite_doctors'=>$favorite_doctors,'staffs'=>$staffs,'doctors'=>$doctors];
        return view('favorite',$data);
    }

    public function create_clinic($id){
        if(Auth::user()==null){
            return view('auth.login');
        }
        FavoriteClinic::create([
            'user_id' =>Auth::user()->id,
            'clinics_id' => $id,
        ]);
        return back();
    }


    public function delete_clinic($id)
    {
        //$user = Auth::user()->id;
        $favoriteclinics = FavoriteClinic::where('user_id', Auth::user()->id)->where('clinics_id',$id);
        $favoriteclinics->delete();
        return redirect()->back();

    }

    public function create_doctor($id){
        if(Auth::user()==null){
            return view('auth.login');
        }
        FavoriteDoctor::create([
            'user_id' =>Auth::user()->id,
            'doctor_id' => $id,
        ]);

        return redirect()->back();
    }

    public function delete_doctor($id)
    {
        $user = Auth::user()->id;
        $favoritedoctor = FavoriteDoctor::where('user_id',$user)->where('doctor_id',$id);
        $favoritedoctor->delete();
        return redirect()->back();

    }



}
