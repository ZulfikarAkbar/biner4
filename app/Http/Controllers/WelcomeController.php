<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\User;
use App\welcome;

class WelcomeController extends Controller
{
    public function index()
    {
        $welcome = welcome::with('beritas')->get();
        return view('welcome', compact('welcome'));
    }


}
