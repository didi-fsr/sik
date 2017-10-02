@extends('layouts.mhs_dashboard')

@section('mainform')
<div class="col-lg-8 col-lg-offset-2">
  <div class="panel">
    <div class="panel-heading">
      <h2> Form Laptop <small></small></h2>
    </div>
    <div class="panel-body">
      <div class="row">
        <form method="post" action="/ijinlaptops" id="eventForm" role="form">
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
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Prosesor</label>
                  <input type="text" name="prosesor" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Memori</label>
                  <input type="text" name="memori" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Kartu Grafis</label>
                  <input type="text" name="grafis" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Hardisk</label>
                  <input type="text" name="hardisk" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Daya</label>
                  <input type="text" name="daya" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Optical Drive</label>
                  <input type="text" name="odrive" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="">NIC LAN</label>
              <input type="text" name="nic_lan" class="form-control" id="" placeholder="" >
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">NIC WLAN</label>
              <input type="text" name="nic_wlan" class="form-control" id="" placeholder="" >
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="form-group">
              <label for="">NIC Modem</label>
              <input type="text" name="nic_modem" class="form-control" id="" placeholder="" >
              {{-- <p class="help-block">Help text here.</p> --}}
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Dimensi Monitor</label>
                  <input type="text" name="monitor" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Printer</label>
                  <input type="text" name="printer" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Hardisk Eksternal</label>
                  <input type="text" name="ext_hd" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Modem External</label>
                  <input type="text" name="ext_modem" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Sistem Operasi</label>
                  <input type="text" name="os" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="">Anti Virus</label>
                  <input type="text" name="antivirus" class="form-control" id="" placeholder="" >
                  {{-- <p class="help-block">Help text here.</p> --}}
                </div>
              </div>
            </div>
          </div>


      </div>
      <div class="row">
        <div class="col-lg-12 ">
          <button style="float:right;" type="submit" class="btn btn-default">Submit</button>
          {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
          </form>
        </div>
      </div>
    </div>
  </div>


</div>



@stop
