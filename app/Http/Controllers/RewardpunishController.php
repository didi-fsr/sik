<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rewardpunish;
use Illuminate\Support\Facades\DB;

class RewardpunishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $punishes = Rewardpunish::withCount('mahasiswas')->where( 'r_or_p', 'p')->orderBy('updated_at','desc')->get();
        return view('punishes.index',['punishes'=>$punishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $punishes =  DB::select('select * from rewardpunishes')->where('r_or_p', 'p')->get();

        // $pamongbtgs = DB::table('pamongbtgss')->orderBy('id', 'desc')->first();
        // $mhssakit = DB::table('laporankhms')->where('')
        // return view('pamong_home',[pamongbtgs'=>$pamongbtgs]);

        // return view('punish.create',['kelass'=>$kelass]);
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
        $punishes = new Rewardpunish;

        date_default_timezone_set("Asia/Jakarta");

        $punishes->pamong = $request->pamong;
        $punishes->kasus = $request->kasus;
        $punishes->hukuman = $request->punish;
        $punishes->ket_wkt_punish = $request->ket_wkt;
        $punishes->r_or_p = 'p';
        $punishes->tgl = date("Y-m-d");
        // foreach($request->mhs as $mhs){
        //   $mhs_id = DB::table('mahasiswa')->where('nm_pd', $mhs)->value('id');
        //   $punishes->mahasiswas()->attach($mhs_id);
        // }

        $punishes->save();

        return redirect('/pamonghome');
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
        $punish = Rewardpunish::withCount('mahasiswas')->find($id);
        $pamongs = DB::table('pamongs')->pluck('nama','id');
        $pamong_selected = DB::table('pamongs')->where('id', $punish->pamong)->pluck('id');
        $rpm_count = $punish->mahasiswa_count;
       // show the edit form and pass the nerd
       return view('punishes.edit',['punish'=>$punish,'pamongs'=>$pamongs,'pamong_selected'=>$pamong_selected]);
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
        $punish = Rewardpunish::find($id);
        $punish->pamong = $request->pamong;
        $punish->kasus = $request->kasus;
        $punish->hukuman = $request->hukuman;
        $punish->ket_wkt_punish = $request->ket_wkt_punish;
        $punish->status = $request->status;

        if(!empty($request->attach_mhs)){
          foreach($request->attach_mhs as $mhs){
            $mhs_id = DB::table('mahasiswa')->where('nm_pd', $mhs)->pluck('id');
            $punish->mahasiswas()->toggle($mhs_id);
            // $punish->mahasiswas()->attach($mhs_id);
          }
        }

        if(!empty($request->detach_mhs)){
          foreach($request->detach_mhs as $mhs){
            // $mhs_id = DB::table('mahasiswa')->where('id', $mhs)->pluck('id');
            $punish->mahasiswas()->toggle($mhs);
          }
        }


        $punish->save();

            // redirect
            // Session::flash('message', 'Successfully updated nerd!');
            return redirect('/rewardpunishes');
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
