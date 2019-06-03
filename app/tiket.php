<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    protected $fillable =
    [ 'nama',
      'kluster',
      'tiket',
      'slug'
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
    // public function tikets(){
    //     return $this->hasMany('App\tiket');
    // }
}
