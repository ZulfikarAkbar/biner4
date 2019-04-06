<?php

namespace App\Http\Controllers;

use App\User;
use App\berita;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index(){
        $berita = berita::all();
        return view('berita.index',compact('berita'));
    }
    public function create(){
        return view('berita.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'kegiatan'=>'required',
            'tanggal'=>'required',
            'gambar'=>'required',
            'deskripsi'=>'required',

        ]);
        $gambar = $request->file('gambar');
        $file_gambar = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $gambar->getClientOriginalName();
        $request->file('gambar')->storeAs('public/upload_gambar', $file_gambar);

        $berita = berita::create([
            'kegiatan' => $request['kegiatan'],
            'tanggal' => $request['tanggal'],
            'deskripsi' => $request['deskripsi'],
            'gambar' => $file_gambar,
        ]);
        return redirect('/berita');
    }
    public function edit($id){
        $berita = berita::find($id);
        return view('berita.edit',compact('berita'));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'kegiatan'=>'required',
            'tanggal'=>'required',
            'gambar'=>'required|mimes:jpg',
            'deskripsi'=>'required',

        ]);

        $gambar = $request->file('gambar');
        $file_gambar = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $gambar->getClientOriginalName();
        $request->file('gambar')->storeAs('public/upload_gambar', $file_gambar);

        $berita = berita::find($id);

        $berita ->update([
            'kegiatan' => $request['kegiatan'],
            'tanggal' => $request['tanggal'],
            'deskripsi' => $request['deskripsi'],
            'gambar' => $file_gambar,
        ]);
        return redirect('/berita');
    }
    public function destroy($id){
        $berita = berita::find($id);
        $berita->delete();
        return redirect('/berita');
    }
}
