<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proposal;
use App\User;
use App\prop;

class PropController extends Controller
{
    public function index()
    {
        $prop = prop::with('proposals')->get();
        return view('prop.index', compact('prop'));
    }


}
