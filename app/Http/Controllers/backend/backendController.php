<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{
    //

    public function dashboard(){

        return view("backend.dashboard");
    }

    public function addevent(){
        return view("backend.addevent");
    }
}
