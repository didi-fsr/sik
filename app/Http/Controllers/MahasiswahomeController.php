<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswahomeController extends Controller
{
    //
    public function index()
    {
        //
        $kelass =  DB::select('select * from kelas');
        $ketuakelass =  DB::select('select * from ketuakelass');
        // $ketuakelass = DB::table('ketuakelass')->pluck('ketua_kelas');
        // $mhssakit = DB::table('laporankhms')->where('')
        return view('mahasiswa_home',['kelass'=>$kelass,'ketuakelass'=>$ketuakelass]);
    }
}
