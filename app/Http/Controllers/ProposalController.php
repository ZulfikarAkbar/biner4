<?php

namespace App\Http\Controllers;

use App\User;
use App\proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index(){
        $proposal = proposal::all();
        return view('proposal.index',compact('proposal'));
    }
    public function create(){
        return view('proposal.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'uploader'=>'required',
            'institusi'=>'required',
            'prop_file'=>'required',

        ]);
        $file = $request->file('prop_file');
        $file_prop = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $file->getClientOriginalName();
        $request->file('prop_file')->storeAs('public/upload_proposal', $file_prop);

        $proposal = proposal::create([
            'name' => $request['name'],
            'uploader' => $request['uploader'],
            'institusi' => $request['institusi'],
            'prop_file' => $file_prop,
        ]);
        return redirect('/proposal');
    }
    public function edit($id){
        $proposal = proposal::find($id);
        return view('proposal.edit',compact('proposal'));
    }
    public function update(Request $request, $id){
        $this->validate($request,[
            'name'=>'required',
            'uploader'=>'required',
            'institusi'=>'required',
            'prop_file'=>'required',

        ]);

        $file = $request->file('prop_file');
        $file_prop = \Carbon\Carbon::now()->format('d-m-Y') . '-' .  $file->getClientOriginalName();
        $request->file('prop_file')->storeAs('public/upload_proposal', $file_prop);

        $proposal = proposal::find($id);

        $berita ->update([
            'name' => $request['name'],
            'uploader' => $request['uploader'],
            'institusi' => $request['institusi'],
            'prop_file' => $file_prop,
        ]);
        return redirect('/proposal');
    }
    public function destroy($id){
        $proposal = proposal::find($id);
        $proposal->delete();
        return redirect('/proposal');
    }
}
