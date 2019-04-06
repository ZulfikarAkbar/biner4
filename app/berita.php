<?php

namespace App;
use App\welcome;
use Auth;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable =
    [ 'kegiatan',
      'gambar',
      'tanggal',
      'deskripsi'
    ];
    public function isOwner()
	{
        if (Auth::guest())
            return false;

		return Auth::user()->id == $this->user->id;
	}
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function welcomes(){
        return $this->hasMany('App\welcome');
    }

}
