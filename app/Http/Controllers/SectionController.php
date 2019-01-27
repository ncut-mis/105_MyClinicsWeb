<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    public function information(){
        $sections=Section::All();
        $data=['section'=>$sections];
        return view('reservation', $data);
    }
}
