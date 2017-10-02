@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-8 col-lg-offset-2">
  <div class="panel">
    <div class="panel-heading">
      <h2> Form Laporan Kegiatan Harian Mahasiswa <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/laporankhms" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-12">
            {{-- <h3> Basic information <small></small></h3> --}}

            <div class="form-group">
              <label for="">Tanggal :
                @php
                  date_default_timezone_set("Asia/Jakarta");
                  echo date("d/m/Y");
                @endphp
              </label>
              {{-- <input name="nama" type="text" class="form-control" id="" placeholder="" disabled> --}}
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>

            {{-- <div class="form-group">
              <label for="">Kelas</label>
              <input name="kelas" type="text" class="form-control" id="" placeholder="">

            </div>

            <div class="form-group">
              <label for="">Ketua Kelas</label>
              <input name="ketua" type="text" class="form-control" id="" placeholder="">

            </div> --}}

            <div class="form-group">
              <label for="">Nama</label>
              <input name="nama" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>

            <div class="form-group">
              <label for="">Kegiatan</label>
              <input name="giat" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>

            <div class="row">
              <div class="col-lg-2">
                <div class="radio">
                    <label class="radio">
                        <input name="ket" type="radio" id="radio1" value="1"> Sakit
                    </label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="radio">
                    <label class="radio">
                        <input name="ket" type="radio" id="radio2" value="2"> Tanpa Keterangan
                    </label>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="radio">
                    <label class="radio">
                        <input name="ket" type="radio" id="radio3" value="3"> Terlambat
                    </label>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="radio">
                    <label class="radio">
                        <input name="ket" type="radio" id="radio4" value="4"> Ijin
                    </label>
                </div>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="">Keterangan</label>
              <input name="keterangan" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12 ">
          <button style="float:right;" type="submit" class="btn btn-default">Submit</button>
          {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
        </div>
        </form>
      </div>
    </div>
  </div>
</div>



@stop
