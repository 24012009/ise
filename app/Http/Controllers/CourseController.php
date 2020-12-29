<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function coursetopics()
    {
        return view('coursetopics');
    }
    public function practice(){
        return view('practice');
    }
    public function exam(){
        return view('exam');
    }
    public function certified(){
        return view('quickbooks-certified');
    }
    public function whycertified(){
        return view('whycertified');
    }
    public function resources(){
        return view('resources');
    }
    public function onlinecertified(){
        return view('onlinecertified');
    }
}
