<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function seminar(){return view('seminar1');}
    public function workshop(){return view('workshop2');}
    public function kompetisi(){return view('kompetisi3');}
}
