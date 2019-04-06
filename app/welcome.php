<?php

namespace App;
use App\berita;
use Auth;
use Illuminate\Database\Eloquent\Model;

class welcome extends Model
{
    protected $table = 'beritas';
    protected $fillable =
    [ 'kegiatan',
      'gambar',
      'tanggal',
      'deskripsi'
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function beritas(){
        return $this->belongsTo('App\berita', 'id_berita');
    }
}
