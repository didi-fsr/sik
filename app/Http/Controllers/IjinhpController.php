<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ijinhp;
use Illuminate\Support\Facades\DB;

class IjinhpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ijinhps.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('ijinhps.create');
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
        $ijinhps = new Ijinhp;


        $ijinhps->id_pd = DB::table('mahasiswa')->where('nm_pd', $request->pemohon)->value('id');
        $ijinhps->merk = $request->merk;
        $ijinhps->tipe = $request->tipe;
        $ijinhps->os = $request->os;
        $ijinhps->prosesor = $request->prosesor;
        $ijinhps->memori_int = $request->memori_int;
        $ijinhps->memori_eks = $request->memori_eks;
        $ijinhps->layar = $request->layar;
        $ijinhps->kebutuhan = $request->kebutuhan;
        $ijinhps->harga_baru = $request->harga;
        $ijinhps->sumber = $request->sumber;
        $ijinhps->nomor_telepon = $request->nomor_telepon;

        $ijinhps->save();
        // Mahasiswa::create($request->all());

        return redirect('/ijinhps');
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
