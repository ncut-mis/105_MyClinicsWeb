<?php

namespace App\Http\Controllers;

use App\Category;
use App\Clinic;
use Illuminate\Http\Request;

class CategoryClinicController extends Controller
{
    public function index(Category $category){
        $clinics	=Clinic::where('category_id',$category->id)->get();
        $categories = Category::all();
        $data	=	['clinics'	=> $clinics,'categories'=>$categories];
        return View('clinic.clinic',$data);
    }
}
