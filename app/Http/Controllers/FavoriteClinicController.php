<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\FavoriteDoctor;
use App\Staff;
use Illuminate\Http\Request;
use Auth;
use App\FavoriteClinic;
use App\Clinic;

class FavoriteClinicController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(Clinic $clinics){

        FavoriteClinic::create([
            'user_id' =>Auth::user()->id,
            'clinics_id' => $clinics->id,
        ]);
        return back();
    }

    public function index(){
        //$favoriteclinic=FavoriteClinic::orderBy('user_id','=',Auth::user()->id)->get();
        $favorite_clinics=FavoriteClinic::where('user_id','=',Auth::user()->id)->get();
        $clinics = Clinic::orderBy('id')->get();

        $favorite_doctors =FavoriteDoctor::where('user_id',Auth::user()->id)->get();
        $staffs = Staff::all();
        $doctors = Doctor::all();
        $date = ['favorite_clinics'=>$favorite_clinics,'clinics'=>$clinics,'favorite_doctors'=>$favorite_doctors,'staffs'=>$staffs,'doctors'=>$doctors];
        return view('favorite_clinic',$date);
    }

    public function destroy(FavoriteClinic $favorite_clinics)
    {
        $favorite_clinics->delete();
        return redirect()->route('favorite_clinic');
    }



}
