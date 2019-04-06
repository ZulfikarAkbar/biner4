<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComeController extends Controller
{
    public function come()
    {
        return view('countdown');
    }
}
