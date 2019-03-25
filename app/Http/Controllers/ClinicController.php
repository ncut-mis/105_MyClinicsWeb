<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic;

class ClinicController extends Controller
{
    public function index(){
        $clinics=Clinic::orderBy('created_at','DESC')->get();
        $data=['clinics'=>$clinics];
        return view('clinic.clinic',$data);
    }

    public function information($id){
        $clinics=Clinic::find($id);
        $data=['clinic'=>$clinics];
        return view('clinic.information', $data);
    }
    public function search(Request $request)
    {

        $keyword =$request->input('keyword');
        $clinics = Clinic::where('name','LIKE',"%$keyword%")->get();
        $data	=	['clinics'	=> $clinics];
        return View('clinic.clinic',$data);

    }
    public function advance_search_create()
    {
        return View('clinic.advance_search');
    }

    public function advance_search(Request $request)
    {
        $category=$request->input('category');
        $area=$request->input('area');
        $category_id = Category::find($category);
        $area_id = Area::find($area);
        $clinics	=Clinic::where('category_id',$category_id)->where('area_id',$area_id)->get();
        $data	=	['clinics'	=> $clinics];
        return View('clinic.clinic',$data);
    }

}
