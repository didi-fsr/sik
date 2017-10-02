<?php


namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authenticate;

class MahasiswaController extends Controller
{
    //
    // public funtion validation(
    //
    // ){
    //
    // }

    public function _construct(){
      //$this->middleware('auth:session');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('mahasiswas.index');
         //return Sukses!!!!!;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('mahasiswas.create');
    }

    public function store(Request $request){
      $mahasiswas = new Mahasiswa;

      $mahasiswas->nm_pd = $request->nm_pd;
      $mahasiswas->jk = $request->jk;
      $mahasiswas->npm = $request->npm;
      $mahasiswas->tmpt_lahir = $request->tmpt_lahir;
      $mahasiswas->tgl_lahir = $request->tgl_lahir;
      $mahasiswas->jln = $request->jln;
      $mahasiswas->rt = $request->rt;
      $mahasiswas->rw = $request->rw;
      $mahasiswas->ds_kel = $request->ds_kel;
      $mahasiswas->kec = $request->kec;
      $mahasiswas->kota_kab = $request->kota_kab;
      $mahasiswas->prov = $request->prov;
      $mahasiswas->kode_pos = $request->kode_pos;
      $mahasiswas->tlp_hp = $request->tlp_hp;
      $mahasiswas->email = $request->email;
      $mahasiswas->stat_pd = $request->stat_pd;
      $mahasiswas->agama = $request->agama;
      $mahasiswas->angkatan = $request->angkatan;
      $mahasiswas->photo_flag = $request->photo_flag;
      $mahasiswas->nm_ayah = $request->nm_ayah;
      $mahasiswas->tmpt_lahir_ayah = $request->tmpt_lahir_ayah;
      $mahasiswas->tgl_lahir_ayah = $request->tgl_lahir_ayah;
      $mahasiswas->pekerjaan_ayah = $request->pekerjaan_ayah;
      $mahasiswas->nm_ibu = $request->nm_ibu;
      $mahasiswas->tmpt_lahir_ibu = $request->tmpt_lahir_ibu;
      $mahasiswas->tgl_lahir_ibu = $request->tgl_lahir_ibu;
      $mahasiswas->pekerjaan_ibu = $request->pekerjaan_ibu;
      $mahasiswas->kontak_ortu = $request->kontak_ortu;
      $mahasiswas->alamat_ortu = $request->alamat_ortu;
      $mahasiswas->nm_wali = $request->nm_wali;
      $mahasiswas->alamat_wali = $request->alamat_wali;
      $mahasiswas->kontak_wali = $request->kontak_wali;

      $mahasiswas->save();
      // Mahasiswa::create($request->all());

      return redirect('/mahasiswas');
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

    public function autoComplete(Request $request) {
      $data = Mahasiswa::select('nm_pd as name')->where("nm_pd","LIKE","%{$request->input('query')}%")->get();
      return response()->json($data);

    }
}
