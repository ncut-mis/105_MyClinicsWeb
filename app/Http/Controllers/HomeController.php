<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        $data = ['posts'=>$posts];
        return view ('home',$data);
    }
}
