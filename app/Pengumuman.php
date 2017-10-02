<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    //
    protected $table = 'pengumuman';
    protected $primarykey = 'id_peng';
    public $timestamps = false;
}
