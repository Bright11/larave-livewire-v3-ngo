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
}