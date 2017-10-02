<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rewardpunish extends Model
{
    //


    public function mahasiswas() {
         return $this->belongsToMany('App\Mahasiswa');
    }
}
