<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent;
use App\User;
use App\tiket;
use Illuminate\Support\Facades\DB;
use App\Support\Authorization\AuthorizationUserTrait;
use Illuminate\Http\Request;
use Auth;

class TiketController extends Controller
{
    public function index(){
        $tiket = tiket::All();
        return view('tiket.index',compact('tiket'));
    }
    public function create(){
        return view('tiket.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=>['required'],
            'kluster'=>['required'],
            'tiket'=>['required','mimes:jpeg,jpg,'],
            // 'deskripsi'=>['required'],
        ]);
        $slug = str_slug($request->tiket, '-');

        if(tiket::where('slug',$slug)->first() !=null) {
            $slug = $slug . '-' .time();
        }
        $tiket = $request->file('tiket');
        $file_tiket = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $tiket->getClientOriginalName();
        $request->file('tiket')->storeAs('public/upload_tiket', $file_tiket);

        tiket::create([
            'nama' => $request['nama'],
            'kluster' => $request['kluster'],
            'tiket' => $file_tiket,
            'slug'   => $slug,
        ]);
        return redirect('/tiket');
    }
    public function edit($slug){
        $tiket = tiket::where('slug', $slug)->first();
        return view('tiket.edit',compact('tiket'));
    }
    public function update(Request $request, $slug){
        $tiket = tiket::where('slug', $slug)->first();
        $this->validate($request,[
            'nama'=>['required'],
            'kluster'=>['required'],
            'tiket'=>['required','mimes:jpeg,jpg,'],
            // 'deskripsi'=>['required'],
        ]);
        $slug = str_slug($request->tiket, '-');

        if(tiket::where('slug',$slug)->first() !=null) {
            $slug = $slug . '-' .time();
        }
        $tiket = $request->file('tiket');
        $file_tiket = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $tiket->getClientOriginalName();
        $request->file('tiket')->storeAs('public/upload_tiket', $file_tiket);

        // $berita = berita::find($id);

        $tiket ->update([
            'nama' => $request['nama'],
            'kluster' => $request['kluster'],
            'tiket' => $file_tiket,
            'slug'   => $slug,
        ]);
        return redirect('/tiket');
    }

    public function destroy($id){
        $tiket = tiket::find($id);
        $tiket->delete();
        return redirect('/tiket');
    }

    
    public function index_seminar(){
        $auth = Auth::user();
        $user = User::where('name',$auth->name)->where('phone',$auth->phone)->get();
        $seminars = tiket::where('nama',$auth->name)->where('kluster','=','Seminar')->get();
        // dd($seminars);
        return view('tiket.seminar',['tikets' => $seminars]);
    }
    public function index_workshop1(){
        // $workshop1s = tiket::orderBy('updated_at', 'DESC')->where('kluster','=','WorkshopBatch_1')->get();
        // return view('tiket.workshop1',compact('workshop1s'));
        $auth = Auth::user();
        $user = User::where('name',$auth->name)->where('phone',$auth->phone)->get();
        $ws1 = tiket::where('nama',$auth->name)->where('kluster','=','WorkshopBatch_1')->get();
        // dd($seminars);
        return view('tiket.workshop1',['tikets' => $ws1]);
    }
    public function index_workshop2(){
        // $workshop2s = tiket::orderBy('updated_at', 'DESC')->where('kluster','=','WorkshopBatch_2')->get();
        // return view('tiket.workshop2',compact('workshop2s'));
        $auth = Auth::user();
        $user = User::where('name',$auth->name)->where('phone',$auth->phone)->get();
        $ws2 = tiket::where('nama',$auth->name)->where('kluster','=','WorkshopBatch_2')->get();
        // dd($seminars);
        return view('tiket.workshop2',['tikets' => $ws2]);
    }
    public function index_competition(){
        // $kompetisis = tiket::orderBy('updated_at', 'DESC')->where('kluster','=','BussinessCaseCompetition')->get();
        // return view('tiket.competition',compact('kompetisis'));
        $auth = Auth::user();
        $user = User::where('name',$auth->name)->where('phone',$auth->phone)->get();
        $cases = tiket::where('nama',$auth->name)->where('kluster','=','BussinessCaseCompetition')->get();
        // dd($cases);
        // dd($seminars);
        return view('tiket.competition',['tikets' => $cases]);
    }
}
