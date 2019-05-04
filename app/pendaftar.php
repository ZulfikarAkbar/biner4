<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
//
use Auth;

class pendaftar extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'institusi','bukti','role'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

}
