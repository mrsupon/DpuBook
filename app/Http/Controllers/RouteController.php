<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function showPage1(){
        return view('page1');
    }
    public function showPage2(){
        return view('page2');
    }
    public function showPage3(){
        return view('page3');
    }

}
