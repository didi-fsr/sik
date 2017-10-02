<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('pamonghome@index',['pengumumans'=>$pengumumans]);
        $pengumumans = Pengumuman::all();

        return view('pengumumans.index',['pengumumans'=>$pengumumans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $pengumumans = new Pengumuman;

        $pengumumans->kepada = $request->kepada;
        $pengumumans->isi = $request->isi;

        $pengumumans->save();

        return redirect('pamonghome');
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
        $pengumuman = Pengumuman::find($id);

       return view('pengumumans.edit',['pengumuman'=>$pengumuman]);
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
        $pengumuman = Pengumuman::find($id);
        $pengumuman->kepada = $request->kepada;
        $pengumuman->isi = $request->isi;
        $pengumuman->tampil = $request->tampil;
        $pengumuman->save();

        return redirect('/pengumumans');
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
