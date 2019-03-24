<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $sections	=Section::orderBy('date')->get();
        $data	=	['sections'=> $sections];
        return view('reservation2',$data);
    }
}
