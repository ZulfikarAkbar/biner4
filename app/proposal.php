<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proposal extends Model
{
    protected $fillable = ['uploader','prop_file', 'institusi','name'];
    public function users()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public function props(){
        return $this->hasMany('App\prop');
    }
}
