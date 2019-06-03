<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','institusi','phone','role','bukti'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        if($this->role=="Admin") return true;
        return false;
    }
    public function isSeminar(){
        $users = User::where('name',$this->name)->where('phone',$this->phone)->get();
        foreach  ($users as $user) {
            if($user->role=="Seminar") return true;
        }
        // if($this->role=="Seminar") return true;
        return false;
    }
    public function isCompetition(){
        $users = User::where('name',$this->name)->where('phone',$this->phone)->get();
        foreach  ($users as $user) {
            if($user->role=="BussinessCaseCompetition") return true;
        }
        // if($this->role=="BussinessCaseCompetition") return true;
        return false;
    }
    public function isWorkshop_1(){
        $users = User::where('name',$this->name)->where('phone',$this->phone)->get();
        foreach  ($users as $user) {
            if($user->role=="WorkshopBatch_1") return true;
        }
        return false;
    }
    public function isWorkshop_2(){
        $users = User::where('name',$this->name)->where('phone',$this->phone)->get();
        foreach  ($users as $user) {
            if($user->role=="WorkshopBatch_2") return true;
        }
        return false;
    }
    public function beritas()
    {
        return $this->belongsTo('App\berita');
    }
    public function proposals()
    {
        return $this->belongsTo('App\proposal');
    }
    // public function admin()
    // {
    //     return $this->belongsTo('App\admin');
    // }

}
