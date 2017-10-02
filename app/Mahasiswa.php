<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $primarykey = 'id';
    public $timestamps = false;
    // protected $fillable = ['name','jk', 'npm'];

  //   public function kelas()
  //  {
  //      return $this->belongsTo('App\Kelas');
  //  }

    public function kelass() {
        return $this->belongsToMany('App\Kelas')->withPivot('tahun');
    }

    public function rewardpunishes() {
         return $this->belongsToMany('App\Rewardpunish');
     }
}
