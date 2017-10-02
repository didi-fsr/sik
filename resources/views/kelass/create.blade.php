@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-6 col-lg-offset-3">
  <div class="panel">
    <div class="panel-heading">
      <h2> Update Anggota Kelas <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/kelass" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-12">
            {{-- <h3> Basic information <small></small></h3> --}}
            <div class="form-group">
              <label for="">Tahun :
                @php
                  date_default_timezone_set("Asia/Jakarta");
                  // $date = DateTime::createFromFormat("Y-m-d", "2068-06-15");
                  // echo $date->format("Y");
                  echo date("Y");
                @endphp
              </label>
              <input type="hidden" class="form-control" name="tahun" placeholder="">
            </div>

            <div class="form-group">
              <label for="">Kelas</label>
              <select class="form-control" name="kelas">
                @foreach ($kelass as $kelas)
                  <option value={{$kelas->id}}>{{$kelas->nama_kelas}}</option>
                @endforeach
                {{-- <option value=1>satu</option> --}}
              </select>
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">Mahasiswa</label>
              <input type="text" name="nama" class="form-control" id="" placeholder="" >
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12 ">
          <button style="float:right;" type="submit" class="btn btn-default">Tambahkan</button>
          {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
        </div>
        </form>
      </div>
    </div>
  </div>


</div>



@stop
