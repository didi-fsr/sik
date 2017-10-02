@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-6 col-lg-offset-3">
  <div class="panel">
    <div class="panel-heading">
      <h2> Form Izin Fasilitas STSN <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/ijinfasilitass" id="eventForm" role="form">
          {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="col-lg-12">
            {{-- <h3> Basic information <small></small></h3> --}}
            <div class="form-group">
              <label for="">Fasilitas</label>
              <select class="form-control" name="fasilitas">
                 <option value="l">Laboratorium</option>
                 <option value="p">Perpustakaan</option>
                 <option value="k">Kolam Renang</option>
                 <option value="a">Auditorium</option>
              </select>
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">Pemohon</label>
              <input type="text" name="pemohon" class="form-control" id="" placeholder="" >
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label class="control-label " for="date">
                  Tanggal Mulai:
                  </label>
                  <div class="input-group">
                   <div class="input-group-addon">
                    <i class="fa fa-calendar">
                    </i>
                   </div>
                   <input class="form-control" id="date" name="mulai" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="control-label " for="timepicker">
                  Waktu Mulai:
                  </label>
                  <div class="input-group bootstrap-timepicker timepicker">
                    <input class="form-control" id="timepicker" name="wktmulai" placeholder="hh:mm" type="text" autocomplete="off"/>
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
                   Tanggal Selesai:
                  </label>
                  <div class="input-group">
                    <div class="input-group-addon">
                     <i class="fa fa-calendar">
                     </i>
                    </div>
                    <input class="form-control" id="date" name="selesai" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label class="control-label " for="timepicker">
                  Waktu Selesai:
                  </label>
                  <div class="input-group bootstrap-timepicker timepicker">
                    <input class="form-control" id="timepicker2" name="wktselesai" placeholder="hh:mm" type="text" autocomplete="off"/>
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-time"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Keperluan</label>
              <input class="form-control" type="text" name="perlu">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <textarea name="ket" class="form-control" id="" placeholder="" rows="3"></textarea>
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
