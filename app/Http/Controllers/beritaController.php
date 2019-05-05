<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent;
use App\User;
use App\berita;
use Illuminate\Support\Facades\DB;
use App\Support\Authorization\AuthorizationUserTrait;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index(){
        $berita = berita::get();;
        return view('berita.index',compact('berita'));
    }
    public function create(){
        return view('berita.create');
    }
    public function show($slug)
    {
        $berita = berita::where('slug',$slug)->first();
        // $rincians = Rincian::where('permohonan_id',$permohonan->id)->get();
        if(empty($berita)) abort (404);
        // if($permohonan->status==9) abort (404);
        // if($permohonan->status==1) abort (404);
        // dd($permohonan);
        return view('show_berita', compact('berita'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'kegiatan'=>['required'],
            'tanggal'=>['required'],
            'gambar'=>['required','mimes:jpeg,jpg,'],
            'deskripsi'=>['required'],
        ]);
        $slug = str_slug($request->kegiatan, '-');

        if(berita::where('slug',$slug)->first() !=null) {
            $slug = $slug . '-' .time();
        }
        $gambar = $request->file('gambar');
        $file_gambar = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $gambar->getClientOriginalName();
        $request->file('gambar')->storeAs('public/upload_gambar', $file_gambar);

        berita::create([
            'kegiatan' => $request['kegiatan'],
            'tanggal' => $request['tanggal'],
            'deskripsi' => $request['deskripsi'],
            'gambar' => $file_gambar,
            'slug'   => $slug,
        ]);
        return redirect('/berita');
    }
    public function edit($slug){
        $berita = berita::where('slug', $slug)->first();
        return view('berita.edit',compact('berita'));
    }
    public function update(Request $request, $slug){
        $berita = berita::where('slug', $slug)->first();
        $this->validate($request,[
            'kegiatan'=>['required'],
            'tanggal'=>['required'],
            'gambar'=>['required','mimes:jpeg,jpg,'],
            'deskripsi'=>['required'],

        ]);
        $slug = str_slug($request->kegiatan, '-');

        if(berita::where('slug',$slug)->first() !=null) {
            $slug = $slug . '-' .time();
        }

        $gambar = $request->file('gambar');
        $file_gambar = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $gambar->getClientOriginalName();
        $request->file('gambar')->storeAs('public/upload_gambar', $file_gambar);

        // $berita = berita::find($id);

        $berita ->update([
            'kegiatan' => $request['kegiatan'],
            'tanggal' => $request['tanggal'],
            'deskripsi' => $request['deskripsi'],
            'gambar' => $file_gambar,
            'slug'   => $slug,
        ]);
        return redirect('/berita');
    }
    public function destroy($id){
        $berita = berita::find($id);
        $berita->delete();
        return redirect('/berita');
    }
}
