
@extends('layouts.mhs_dashboard')

@section('mainform')

{{-- <div class="bootstrap-iso"> --}}
<div class="col-lg-9 col-md-9 col-sm-9">
  <div class="panel">
    <div class="panel-heading">
      <h2> REGISTRASI MAHASISWA <small></small></h2>
    </div>
    <div class="panel-body">
      {{-- <div class="row">
        <div class="col-lg-12">
          <h3>Informasi Akun</h3>
          <form enctype="multipart/form-data" action="/profile" method="POST">
            <label>Update Profile Image</label>
            <input type="file" name="photo_flag">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
        </div>
      </div> --}}
      <div class="row">
        <form method="post" action="/mahasiswas" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-6">
            <h3> Basic information <small></small></h3>
            <div class="form-group">
                <label>Nama Lengkap: </label>
                <input class="form-control" name="nm_pd">
                {{-- <p class="help-block">Example block-level help text here.</p> --}}
            </div>
            <div class="form-group">
                <label>NPM: </label>
                <input class="form-control" name="npm">
                {{-- <p class="help-block">Example block-level help text here.</p> --}}
            </div>
            <div class="form-group">
                <label>Kelas: </label>
                <input class="form-control" name="kelas">
                {{-- <p class="help-block">Example block-level help text here.</p> --}}
            </div>

            <div class="form-group">
              <label>Jenis Kelamin: </label>
              <div class="radio">
                  <label>
                      <input type="radio" name="jk" id="optionsRadios1" value="l" checked>Laki-laki
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="jk" id="optionsRadios2" value="p">Perempuan
                  </label>
              </div>
            </div>
            <div class="form-group">
                <label>Tempat Lahir: </label>
                <input class="form-control" name="tmpt_lahir" placeholder="Enter text">
            </div>
            <div class="form-group">
              <label class="control-label " for="date">
               Tanggal Lahir:
              </label>
              <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-calendar">
                </i>
               </div>
               <input class="form-control" id="date" name="tgl_lahir" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
              </div>
            </div>
            <div class="form-group">
                <label>Agama: </label>
                <input class="form-control" name="agama">
                {{-- <p class="help-block">Example block-level help text here.</p> --}}
            </div>
            <div class="form-group form-inline">
                <label>STSN Angkatan: </label>
                <input style="width:100px" name="angkatan" class="form-control" />
                {{-- <label>Kelas</label>
                <select class="form-control">
                    <option>I-1</option>
                    <option>I-2</option>
                    <option>I-3</option>
                    <option>I-4</option>
                    <option>II MP</option>
                    <option>II TK</option>
                    <option>II RB-Alpha</option>
                    <option>II RB-Omega</option>
                    <option>III MP</option>
                    <option>III TK</option>
                    <option>III RB-Alpha</option>
                    <option>III RB-Omega</option>
                    <option>IV MP</option>
                    <option>IV TK</option>
                    <option>IV RB-Alpha</option>
                    <option>IV RB-Omega</option>
                </select> --}}
            </div>
          </div>
          <div class="col-lg-6">
            <h3> Detail information <small></small></h3>
            <div class="form-group">
                <label>Alamat: </label>
                <textarea class="form-control" name="jln" rows="3"></textarea>
            </div>
            <div class="form-group form-inline">
                <label>Rt:</label>
                <input style="width:45px" name="rt" class="form-control">
                <label class="">Rw: </label>
                <input style="width:45px" name="rw" class="form-control">
                <label class="">Ds/Kel: </label>
                <input style="width:180px" name="ds_kel" class="form-control">

                {{-- <p class="help-block">Example block-level help text here.</p> --}}
            </div>
            <div class="form-group">
              <label class="">Kec: </label>
              <input  class="form-control" name="kec">
            </div>
            <div class="form-group ">
              <label class="">Kota/Kab: </label>
              <input class="form-control" name="kota_kab">
            </div>
            <div class="form-group ">
              <label class="">Provinsi: </label>
              <input class="form-control" name="prov">
            </div>
            <div class="form-group ">
              <label class="">Kode Pos: </label>
              <input class="form-control" name="kode_pos">
            </div>
            <div class="form-group">
                <label>Nomor HP: </label>
                <input class="form-control" name="tlp_hp"></input>
            </div>
            <div class="form-group">
                <label>Email: </label>
                <input class="form-control" name="email"></input>
            </div>
            <input type="hidden" name="stat_pd" value="t">
            <div class="form-group">
                <label>Nama Ayah: </label>
                <input class="form-control" name="nm_ayah"></input>
            </div>
            <div class="form-group">
                <label>Nama Ibu: </label>
                <input class="form-control" name="nm_ibu"></input>
            </div>
            <div class="form-group">
                <label>Alamat Orangtua: </label>
                <textarea class="form-control" name="alamat_ortu"></textarea>
            </div>
            <div class="form-group">
                <label>Nomor HP Orangtua: </label>
                <input class="form-control" name="kontak_ortu"></input>
            </div>
            <div class="form-group">
                <label>Tempat Lahir Ayah: </label>
                <input class="form-control" name="tmpt_lahir_ayah" placeholder="Enter text">
            </div>
            <div class="form-group">
              <label class="control-label " for="date" >
               Tanggal Lahir Ayah:
              </label>
              <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-calendar">
                </i>
               </div>
               <input class="form-control" id="date" name="tgl_lahir_ayah" placeholder="MM/DD/YYYY" type="text" autocomplete="off"/>
              </div>
            </div>
            <div class="form-group">
                <label>Tempat Lahir Ibu: </label>
                <input class="form-control" name="tmpt_lahir_ibu" placeholder="Enter text">
            </div>
            <div class="form-group">
              <label class="control-label " for="date">
               Tanggal Lahir Ibu:
              </label>
              <div class="input-group">
               <div class="input-group-addon">
                <i class="fa fa-calendar">
                </i>
               </div>
               <input class="form-control" id="date" name="tgl_lahir_ibu" placeholder="MM/DD/YYYY" type="text" autocomplete="off"/>
              </div>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ayah: </label>
                <input class="form-control" name="pekerjaan_ayah"></input>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ibu: </label>
                <input class="form-control" name="pekerjaan_ibu"></input>
            </div>
            <div class="form-group">
                <label>Nama Wali: </label>
                <input class="form-control" name="nm_wali"></input>
            </div>
            <div class="form-group">
                <label>Nomor HP Wali: </label>
                <input class="form-control" name="kontak_wali"></input>
            </div>
            <div class="form-group">
                <label>Alamat Wali: </label>
                <textarea class="form-control" name="alamat_wali"></textarea>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12 ">
          <button type="submit" class="btn btn-default">Submit</button>
          {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- </div> --}}

@stop
