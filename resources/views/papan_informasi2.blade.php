<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta content="width=device-width, initial-scale=1" name="viewport"/>
  	<meta content="" name="description"/>
  	<meta content="" name="author"/>
    <title>sik-stsn</title>
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/custom.css") }}" />
</head>

<body onLoad="scroll()">
    <div class="container-fluid">
        <div class="page-header" id="pinfo_head">
          <h1><strong>PAPAN INFORMASI</strong> <small>Sistem Informasi Kemahasiswaan STSN </small></h1></div>

          <div class="row">
            <div class="col-lg-6">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3 class="panel-title">Pengumuman </h3>
                  </div>
                  <div id="pl1" class="panel-body autoscroll" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
                    <div id="tbl1" class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                                <th>Kepada</th>
                                <th>Isi Pengumuman</th>
                            </tr>
                          </thead>
                          <tbody class=" table-striped">
                            @foreach ($pengumumans as $pengumuman)
                              @if ($pengumuman->tampil==0)
                                @break
                              @endif
                              <tr>
                                  <td>{{$pengumuman->kepada}}</td>
                                  <td>{{$pengumuman->isi}}</td>
                              </tr>
                            @endforeach
                          </tbody>

                        </table>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="panel panel-green">
                  <div class="panel-heading">
                      <h3 class="panel-title">Ijin Keluar</h3></div>
                  <div id="pl3" class="panel-body autoscroll" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()" >
                      <div id="tbl3" class="table-responsive">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>Nama</th>
                                      <th>Keperluan</th>
                                      <th>Tujuan</th>
                                      <th>Berangkat</th>
                                      <th>Kembali</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($ijinkeluars as $ijinkeluar)

                                    {{-- {{$mahasiswa = DB::table('mahasiswa')->where('id',$ijinkeluar->id_pd)->get()}} --}}

                                  @if ($ijinkeluar->pesiar_ib == 1 || $ijinkeluar->pesiar_ib == 2)
                                    @continue
                                  @endif

                                  <tr>
                                      <td>{{DB::table('mahasiswa')->where('id', $ijinkeluar->id_pd)->value('nm_pd')}}</td>
                                      {{-- @foreach ($mahasiswas as $mahasiswa)
                                        @foreach ($mahasiswa->kelass as $kelas)
                                          @if ($kelas->pivot->tahun != date('Y'))
                                            @continue
                                          @endif
                                          <td>{{$kelas->aka_kelas}}</td>
                                        @endforeach


                                      @endforeach --}}
                                      {{-- <td>{{  $mahasiswa->kelass()->latest()->first() }}</td> --}}
                                      <td>{{$ijinkeluar->perlu}}</td>
                                      <td>{{$ijinkeluar->tujuan}}</td>
                                      <td>{{$ijinkeluar->berangkat}}</td>
                                      <td>{{$ijinkeluar->ren_kembali}}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        <div class="row">
            <div class="col-lg-4 col-xs-12">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <h3 class="panel-title">Pengasuh Bertugas</h3></div>
                  <div id="pl2" class="panel-body autoscroll" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
                    {{-- <div id="tbl2a" class="table-responsive">
                        <table class="table">
                          <thead>
                              <tr>
                                  <th><strong>Tim Pamong:</strong></th>
                                  <th><strong>Katim:</strong></th>
                              </tr>
                          </thead>
                        </table>
                    </div> --}}
                    <div id="tbl2b" class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tingkat</th>
                                        <th>Pamong</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td class="success">Tingkat I</td>
                                      <td>{{$pamongbtgs->tk1}}</td>
                                  </tr>
                                  <tr>
                                      <td class="warning">Tingkat II</td>
                                      <td>{{$pamongbtgs->tk2}}</td>
                                  </tr>
                                  <tr>
                                      <td class="danger">Tingkat III</td>
                                      <td>{{$pamongbtgs->tk3}}</td>
                                  </tr>
                                  <tr>
                                      <td class="info">Tingkat IV</td>
                                      <td>{{$pamongbtgs->tk4}}</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3  class="panel-title">Mahasiswa Sakit <span class="pull-right"> @php
                                date_default_timezone_set("Asia/Jakarta");
                                echo date("d/m/Y");
                                @endphp </span>
                                <div class="clearfix"></div>
                              </h3>
                            </div>
                                <div id="pl4" class="panel-body autoscroll" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
                                  <div id="tbl4" class="table-responsive">
                                      <table class="table table-striped">
                                          <thead>
                                              <tr>
                                                  <th>Nama</th>
                                                  <th>Keterangan</th>
                                              </tr>
                                          </thead>

                                          <tbody>
                                            @foreach ($mhssakits as $mhssakit)
                                              <tr>
                                                  <td>{{DB::table('mahasiswa')->where('id', $mhssakit->id_pd)->value('nm_pd')}}</td>
                                                  <td>{{$mhssakit->keterangan}}</td>
                                              </tr>
                                            @endforeach
                                          </tbody>
                                      </table>
                                  </div>
                                </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 col-xs-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ijin Barang Pribadi</h3></div>
                            <div id="pl5" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()" class="panel-body autoscroll">
                              <div id="tbl5" class="table-responsive">
                                  <table class="table table-striped">
                                      <thead>
                                          <tr>
                                              <th>Pemohon</th>
                                              <th>Jenis Barang</th>
                                              <th>Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($ijinbarangs as $ijinbarang)
                                          <tr>
                                              <td>{{$ijinbarang->pemohon}}</td>
                                              <td>{{$ijinbarang->jenis_barang}}</td>
                                              <td>{{$ijinbarang->status}}</td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-6 col-xs-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ijin Kegiatan</h3></div>
                            <div id="pl5" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()" class="panel-body autoscroll">
                              <div id="tbl5" class="table-responsive">
                                  <table class="table table-striped">
                                      <thead>
                                          <tr>
                                              <th>Pemohon</th>
                                              <th>Kegiatan</th>
                                              <th>Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($ijinkegiatans as $ijinkegiatan)
                                          {{-- @if ($ijinkegiatan->pesiar_ib == 1 || $ijinkegiatan->pesiar_ib == 2)
                                            @continue
                                          @endif --}}
                                          <tr>
                                              {{-- <td>{{DB::table('mahasiswa')->where('id_pd', $ijinkeluar->id_pd)->value('nm_pd')}}</td> --}}
                                              <td>{{$ijinkegiatan->pemohon}}</td>
                                              <td>{{$ijinkegiatan->nama_giat}}</td>
                                              <td>{{$ijinkegiatan->status}}</td>
                                          </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>

    <script>
    //run instantly and then goes after (setTimeout interval)
    var speed = 7000;
    //var DivElmnt = document.getElementsByClassName('panel-body');
    function scroll(speed) {
      // $('html, body').animate({ scrollTop: $(document).height() - $(window).height() }, speed, function() {
      $('#pl1').animate({ scrollTop: $('#tbl1').height() - $('#pl1').height() }, speed, function() {
        $(this).animate({ scrollTop: 0 }, speed);
      });
      $('#pl3').animate({ scrollTop: $('#tbl3').height() - $('#pl3').height() }, speed, function() {
        $(this).animate({ scrollTop: 0 }, speed);
      });
      $('#pl4').animate({ scrollTop: $('#tbl4').height() - $('#pl4').height() }, speed, function() {
        $(this).animate({ scrollTop: 0 }, speed);
      });
      $('#pl5').animate({ scrollTop: $('#tbl5').height() - $('#pl5').height() }, speed, function() {
        $(this).animate({ scrollTop: 0 }, speed);
      });

        // alert($('.autoscroll').scrollHeight);
    }

    scroll(speed);
    setInterval(function(){scroll(speed)}, speed * 2);

    </script>

</body>

</html>
