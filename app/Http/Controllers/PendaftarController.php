<?php

namespace App\Http\Controllers;
use App\User;
use App\pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
  {
    $pendaftars = User::all();
    return view('pendaftar.index', compact('pendaftars'));
  }
}
