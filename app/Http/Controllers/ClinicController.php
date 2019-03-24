<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;

class ClinicController extends Controller
{
    public function index(){
        $clinics=Clinic::orderBy('created_at','DESC')->get();
        $data=['clinics'=>$clinics];
        return view('clinic',$data);
    }

    public function information($id){
        $clinics=Clinic::find($id);
        $data=['clinic'=>$clinics];
        return view('information', $data);
    }
    public function search(Request $request)

    {

        $keyword =$request->input('keyword');
        $clinics = Clinic::where('name','LIKE',"%$keyword%")->get();
        $data	=	['clinics'	=> $clinics];
        return View('clinic',$data);

    }

}
