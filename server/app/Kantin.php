<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantin extends Model
{
    protected $table = 'kantin';

    protected $guarded = [
        'id',
    ];

    public function pemilik_kantin()
    {
        return $this->belongsTo('App\User');
    }
}
