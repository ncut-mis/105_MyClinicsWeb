<?php

namespace App\Http\Controllers;

use App\Area;
use App\Category;
use App\Doctor;
use App\Staff;
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
        $doctors = Doctor::where('clinic_id',$id)->get();
        $staff = Staff::where('clinic_id',$id)->where('position_id','1')->get();
        $data=['clinic'=>$clinics,'doctors'=>$doctors,'staff'=>$staff];
        return view('clinic.information', $data);
    }

    public function doctorinformation($id){
        $doctors = Doctor::find($id);
        $staffs = Staff::all();
        $data = ['doctors'=>$doctors,'staffs'=>$staffs];
        return view('clinic.doctorinformation',$data);
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
        $data	=	['clinics'	=> $clinics];
        return View('clinic.clinic',$data);
    }

}
