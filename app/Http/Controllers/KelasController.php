<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas;
use App\Mahasiswa;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('kelass.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelass =  DB::select('select * from kelas');
        // $pamongbtgs = DB::table('pamongbtgss')->orderBy('id', 'desc')->first();
        // $mhssakit = DB::table('laporankhms')->where('')
        // return view('pamong_home',[pamongbtgs'=>$pamongbtgs]);

        return view('kelass.create',['kelass'=>$kelass]);

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

        $kelas =  Kelas::find($request->kelas);
        $mahasiswa = Mahasiswa::find(DB::table('mahasiswa')->where('nm_pd', $request->nama)->value('id'));
        // $mahasiswas = Mahasiswa::find(2);
        $tahun = date('Y');

        $kelas->mahasiswas()->attach($mahasiswa,['tahun'=>$tahun]);

        return redirect('/kelass/create');
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
