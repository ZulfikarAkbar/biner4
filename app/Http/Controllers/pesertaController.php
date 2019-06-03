<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent;
use App\User;
use App\pendaftar;
use Illuminate\Support\Facades\DB;
use App\Support\Authorization\AuthorizationUserTrait;
use Illuminate\Http\Request;

class pesertaController extends Controller
{
    public function index_seminar(){
        $seminars = User::orderBy('id', 'DESC')->where('role','=','Seminar')->get();
        return view('pendaftar.index_seminar', compact('seminars'));
    }
    public function destroy_seminar($id){
        $seminars = User::find($id);
        $seminars->delete();
        return redirect('/peserta-seminar');
    }

    public function index_bisnis(){
        $bisnis = User::orderBy('id', 'DESC')->where('role','=','BussinessCaseCompetition')->get();
        return view('pendaftar.index_bisnis', compact('bisnis'));
    }
    public function destroy_bisnis($id){
        $bisnis = User::find($id);
        $bisnis->delete();
        return redirect('/peserta-bisnis');
    }

    public function index_workshop_batch1(){
        $workshop1s = User::orderBy('id', 'DESC')->where('role','=','WorkshopBatch_1')->get();
        return view('pendaftar.index_workshop1', compact('workshop1s'));
    }
    public function destroy_wb1($id){
        $workshop1s = User::find($id);
        $workshop1s->delete();
        return redirect('/peserta-workshop-batch1');
    }

    public function index_workshop_batch2(){
        $workshop2s = User::orderBy('id', 'DESC')->where('role','=','WorkshopBatch_2')->get();
        return view('pendaftar.index_workshop2', compact('workshop2s'));
    }
    public function destroy_wb2($id){
        $workshop2s = User::find($id);
        $workshop2s->delete();
        return redirect('/peserta-workshop-batch2');
    }

}
