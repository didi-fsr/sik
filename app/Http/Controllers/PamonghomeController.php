<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PamonghomeController extends Controller
{
    //
    public function index()
    {
        //

        $pengumumans =  DB::select('select * from pengumuman');
        $pamongbtgs = DB::table('pamongbtgss')->orderBy('id', 'desc')->first();
        $mhssakits = DB::table('laporankhms')->where([['sakit', 1],['tgl',date('Y-m-d')]])->get();
        $pamongs = DB::select('select * from pamongs');
        $timelines = DB::table('timelines')->orderBy('id', 'desc')->paginate(4);
        $punishes = DB::table('rewardpunishes')->where('status', 1)->get();
        // $mhssakit = DB::table('laporankhms')->where('')
        return view('pamong_home',['punishes'=>$punishes,'timelines'=>$timelines,'pamongs'=>$pamongs,'mhssakits'=>$mhssakits,'pengumumans'=>$pengumumans,'pamongbtgs'=>$pamongbtgs]);
    }
}
