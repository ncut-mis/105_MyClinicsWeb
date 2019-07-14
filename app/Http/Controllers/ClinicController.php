<?php

namespace App\Http\Controllers;

use App\Area;
use App\Category;
use App\Doctor;
use App\FavoriteClinic;
use App\Staff;
use Illuminate\Http\Request;
use App\Clinic;
use Illuminate\Support\Facades\Auth;

class ClinicController extends Controller
{
    public function index(){
        $clinics=Clinic::orderBy('created_at','DESC')->get();
        $categories = Category::all();
        $data=['clinics'=>$clinics,'categories'=>$categories];
        return view('clinic.clinic',$data);
    }

    public function show($id){
        $clinics=Clinic::find($id);
        $doctors = Doctor::where('clinic_id',$id)->get();
        $staff = Staff::where('clinic_id',$id)->where('position_id','4')->get();

        $user = Auth::user()->id;
        $check = FavoriteClinic::where('user_id',$user)->where('clinics_id',$id)->get();

        $data=['clinic'=>$clinics,'doctors'=>$doctors,'staff'=>$staff,'check'=>$check];
        return view('clinic.information', $data);
    }



    public function search(Request $request)
    {

        $keyword =$request->input('keyword');
        $clinics = Clinic::where('name','LIKE',"%$keyword%")->get();
        $categories = Category::all();
        $data	=	['clinics'	=> $clinics,'categories'=>$categories];
        return View('clinic.clinic',$data);

    }
    public function advance_search_create()
    {
        $category = Category::orderBy('id')->get();
        $area = Area::orderBy('id')->get();
        $date = ['category'=>$category,'area'=>$area];
        return View('clinic.advance_search',$date);
    }

    public function advance_search(Request $request)
    {
        $category=$request->input('category');
        $area=$request->input('area');
        //$category_id = Category::find($category);
        //$area_id = Area::find($area);
        $clinics	=Clinic::where('category_id',$category)->where('area_id',$area)->get();
        $categories = Category::all();
        $data	=	['clinics'	=> $clinics,'categories'=>$categories];
        return View('clinic.clinic',$data);
    }

}
