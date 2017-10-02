<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ijinkegiatan;

class IjinkegiatanController extends Controller
{
  public function _construct(){

    // $this->middleware('auth');

  }

   public function index()
   {
       //
       return view('ijinkegiatans.index');
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       return view('ijinkegiatans.create');
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
        $ijinkegiatans = new Ijinkegiatan;

        $ijinkegiatans->pemohon = $request->pemohon;
        $ijinkegiatans->nama_giat = $request->namagiat;
        $ijinkegiatans->desc = $request->deskripsi;
        $ijinkegiatans->status = 'm';

        $ijinkegiatans->save();
        // Mahasiswa::create($request->all());

        return redirect('/ijinkegiatans');

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
