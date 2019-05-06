<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\FavoriteClinic;
use App\Clinic;

class FavoriteClinicController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create($id){

        $clinics=Clinic::find($id);
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
        $date = ['favorite_clinics'=>$favorite_clinics,'clinics'=>$clinics];
        return view('favorite_clinic',$date);
    }

    public function destroy($id)
    {
        $favoriteclinics = FavoriteClinic::find($id);
        $favoriteclinics->delete();
        return redirect()->back();
    }



}
