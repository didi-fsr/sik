<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $table = 'kelas';
    protected $primarykey = 'id';
    public $timestamps = false;

  //   public function mahasiswa()
  //  {
  //      return $this->hasMany('App\Mahasiswa', );
  //  }

   public function mahasiswas() {
        return $this->belongsToMany('App\Mahasiswa')->withPivot('tahun');
    }
}
