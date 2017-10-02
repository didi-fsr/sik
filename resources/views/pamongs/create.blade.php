@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-6 col-lg-offset-3">
  <div class="panel">
    <div class="panel-heading">
      <h2> Registrasi Pengasuh <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/ijinkeluars" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-12">
            {{-- <h3> Basic information <small></small></h3> --}}
            <div class="form-group">
              <label for="">Nama</label>
              <input name="nama" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">Keperluan</label> <br>
              <div class="radio">
                  <label class="radio-inline">
                      <input name="perlu" type="radio" id="radio1" value="1"> Pesiar
                  </label>
              </div>
              <div class="radio">
                  <label class="radio">
                      <input name="perlu" type="radio" id="radio2" value="2"> Bermalam
                  </label>
              </div>
              <div class="radio">
                  <label class="radio">
                      <input name="perlu" type="radio" id="radio3" value="3"> Izin Keluar
                  </label>
              </div>
              {{-- <div class="radio">
                  <label class="radio-inline">
                      <input onselect="disableDate" name="perlu" type="radio" id="radio2" value="bermalam"> Ijin Keluar
                  </label>
              </div> --}}

              <input name="keperluan" type="text" class="form-control" id="perlu" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">Lokasi Tujuan</label>
              <input name="tujuan" type="text" class="form-control" id="" placeholder="">
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label class="control-label " for="date">
                  Tanggal Berangkat:
                  </label>
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                   </div>
                   <input class="form-control" id="date" name="berangkat" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="control-label " for="time">
                  Waktu Berangkat:
                  </label>
                  <div class="input-group bootstrap-timepicker timepicker">
                    <input class="form-control" id="timepicker" name="wktberangkat" placeholder="hh:mm" type="text" autocomplete="off"/>
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-time"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label class="control-label " for="date">
                   Tanggal Kembali:
                  </label>
                  <div class="input-group">
                    <div class="input-group-addon">
                     <i class="fa fa-calendar">
                     </i>
                    </div>
                    <input class="form-control" id="date" name="ren_kembali" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="control-label " for="time">
                  Waktu Kembali:
                  </label>
                  <div class="input-group bootstrap-timepicker timepicker">
                    <input class="form-control" id="timepicker2" name="ren_wktkembali" placeholder="hh:mm" type="text" autocomplete="off"/>
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-time"></i>
                    </span>
                  </div>
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
