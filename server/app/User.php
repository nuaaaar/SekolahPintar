<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [
        'id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function orang_tua()
    {
        return $this->belongsTo('App\User', 'parent_id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }

    public function kantin()
    {
        return $this->hasOne('App\Kantin');
    }
}
