<?php

namespace App\Http\Controllers;
use App\User;
use App\pendaftar;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    public function index()
  {
    $pendaftars = User::orderBy('id', 'DESC')->get();
    return view('pendaftar.index', compact('pendaftars'));
  }
  public function destroy($id){
    $pendaftars = pendaftar::find($id);
    $pendaftars->delete();
    return redirect('/pendaftar');
}
}
