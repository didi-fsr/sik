@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-8 col-lg-offset-2">
  <div class="panel">
    <div class="panel-heading">
      <h2> Form Izin Kendaraan Pribadi <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/ijinkendaraans" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-12">
            {{-- <h3> Basic information <small></small></h3> --}}

            <div class="form-group">
              <label for="">Pemohon</label>
              <input type="text" name="pemohon" class="form-control" id="" placeholder="" >
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Merk</label>
                  <input type="text" name="merk" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Tipe</label>
                  <input type="text" name="tipe" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">Nomor Plat Kendaraan</label>
              <input type="text" name="nomor_plat" class="form-control" id="" placeholder="" >
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
