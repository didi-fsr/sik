<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ijinlaptop;
use Illuminate\Support\Facades\DB;

class IjinlaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('ijinlaptops.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('ijinlaptops.create');
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
        $ijinlaptops = new Ijinlaptop;


        $ijinlaptops->id_pd = DB::table('mahasiswa')->where('nm_pd', $request->pemohon)->value('id');
        $ijinlaptops->merk = $request->merk;
        $ijinlaptops->tipe = $request->tipe;
        $ijinlaptops->prosesor = $request->prosesor;
        $ijinlaptops->grafis = $request->grafis;
        $ijinlaptops->memori = $request->memori;
        $ijinlaptops->hardisk = $request->hardisk;
        $ijinlaptops->daya = $request->daya;
        $ijinlaptops->opticaldrive = $request->odrive;
        $ijinlaptops->nic_lan = $request->nic_lan;
        $ijinlaptops->nic_wlan = $request->nic_wlan;
        $ijinlaptops->nic_modem = $request->nic_modem;
        $ijinlaptops->monitor = $request->monitor;
        $ijinlaptops->printer = $request->printer;
        $ijinlaptops->ext_hd = $request->ext_hd;
        $ijinlaptops->ext_modem = $request->ext_modem;
        $ijinlaptops->os = $request->os;
        $ijinlaptops->antivirus = $request->antivirus;

        $ijinlaptops->save();
        // Mahasiswa::create($request->all());

        return redirect('/ijinlaptops');
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
