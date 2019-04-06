<?php

namespace App;
use App\proposal;
use Auth;
use Illuminate\Database\Eloquent\Model;

class prop extends Model
{
    protected $table = 'proposals';
    protected $fillable =
    [ 'uploader',
      'prop_file',
      'institusi'
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function proposals(){
        return $this->belongsTo('App\proposal', 'id_proposal');
    }
}
