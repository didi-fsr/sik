<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Laporankhm;

class LaporankhmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('laporankhms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('laporankhms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        date_default_timezone_set("Asia/Jakarta");
        $laporankhms = new Laporankhm;
        $laporankhms->tgl = date("Y-m-d");
        $laporankhms->id_pd = DB::table('mahasiswa')->where('nm_pd', $request->nama)->value('id');
        $laporankhms->id_khm = DB::table('khms')->where('giat', $request->giat)->value('id');

        if($request->ket == 1){
          $laporankhms->sakit = true;
          $laporankhms->hadir = false;
        }
        elseif($request->ket == 2){
          $laporankhms->tanpa_ket = true;
          $laporankhms->hadir = false;
        }
        elseif($request->ket == 3){
          $laporankhms->terlambat = true;
          // $laporankhms->hadir = false;
        }
        elseif($request->ket == 4){
          $laporankhms->ijin = true;
          $laporankhms->hadir = false;
        }

        $laporankhms->keterangan = $request->keterangan;
        $laporankhms->save();

        return redirect('/laporankhms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
