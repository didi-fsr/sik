<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ijinkeluar;

class IjinkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function _construct(){
      //  $this->middleware('auth');
      // $this->middleware('csrf');
      // $this->middleware('auth');
     }

    public function index()
    {
        //
        return view('pamongs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ijinkeluars.create');
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
        // $id_pd = DB::table('mahasiswa')->where('nm_pd', $request->nama)->value('id_pd');

        $ijinkeluars = new Ijinkeluar;


        $ijinkeluars->id_pd = DB::table('mahasiswa')->where('nm_pd', $request->nama)->value('id');

        $ijinkeluars->pesiar_ib = $request->perlu;
        $ijinkeluars->perlu = $request->keperluan;
        $ijinkeluars->tujuan = $request->tujuan;
        $ijinkeluars->berangkat = $request->berangkat;
        $ijinkeluars->ren_kembali = $request->ren_kembali;

        $ijinkeluars->save();
        // Mahasiswa::create($request->all());

        return redirect('/ijinkeluars');
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
