@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-6 col-lg-offset-3">
  <div class="panel">
    <div class="panel-heading">
      <h2> Form Izin Kegiatan Mahasiswa <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/ijinkegiatans" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-12">
            {{-- <h3> Basic information <small></small></h3> --}}
            <div class="form-group">
              <label for="">Pemohon</label>
              <input name="pemohon" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">Nama Kegiatan</label>
              <input name="namagiat" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">Deskripsi Kegiatan</label>
              <textarea name="deskripsi" class="form-control" id="" placeholder="" rows="3"></textarea>
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            {{-- <div class="form-group">
              <label>Upload Berkas Pengajuan Kegiatan</label>
              <input type="file" name="filename">
            </div> --}}

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
