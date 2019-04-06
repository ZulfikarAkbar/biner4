<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;

class adminController extends Controller
{
    public function Index(){
        $users = Auth::user();
        $indexs = admin::where('user_id', $users->id)->orderBy('updated_at', 'desc')->paginate(10);
        return view('index_admin', compact('indexs'));
    }
}
