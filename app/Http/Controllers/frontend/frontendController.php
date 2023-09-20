<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    public function index(){
        return view('frontend.index');
    }

    public function aboutus(){
        return view("frontend.aboutus");
    }


    public function gallery(){
        return view("frontend.gallery");
    }

    public function whomweare(){
        return view("frontend.whomweare");
    }


    public function involved(){
        return view("frontend.getinvolved");
    }

    public function contact(){
        return view("frontend.contact");
    }
}
