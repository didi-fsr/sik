<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinfoController extends Controller
{
    //
    public function index()
    {
        //
        date_default_timezone_set("Asia/Jakarta");
        
        $ijinkeluars = DB::select('select * from ijin_keluar');
        $ijinkegiatans = DB::select('select * from ijinkegiatans');
        // $ijinbarangs = DB::select('select * from ijinbarangs');
        $rekammediss  = DB::select('select * from rekam_medis');
        $pengumumans =  DB::select('select * from pengumuman');
        $pamongbtgs = DB::table('pamongbtgss')->orderBy('id', 'desc')->first();
        $mhssakits = DB::table('laporankhms')->where([['sakit', 1],['tgl',date('Y-m-d')]])->get();

        // foreach()
        // $mahasiswas = DB::select('select * from mahasiswa');
        // $kelas =


        return view('papan_informasi2', ['mhssakits'=>$mhssakits,'ijinkeluars'=>$ijinkeluars, 'ijinkegiatans'=>$ijinkegiatans,
        'rekammediss'=>$rekammediss, 'pengumumans'=>$pengumumans,'pamongbtgs'=>$pamongbtgs
        ]);
    }
}
