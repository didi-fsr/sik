@extends('layouts.pamong_dashboard')

@section('section')
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Timeline  <a href="#" data-toggle="modal" data-target="#post-something">
                                <span class="pull-right btn-link"> <i title="Tambah Kejadian" class="fa fa-plus"> </i></span>
                                <div class="clearfix"></div>
                            </a></h3>
                    </div>

                    <div class="panel-body">

                        <ul class="timeline">

                          @foreach ($timelines as $timeline)
                            @if ($timeline->tampil == 1)
                              @if ($loop->index % 2 == 1)
                                <li>
                                    {{-- <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div> --}}
                                    <div class="timeline-panel">
                                      <div class="timeline-body">
                                          <p>{{$timeline->post}}</p>
                                      </div>
                                      <div class="timeline-heading">
                                          <p><small class="text-muted"><i class="fa fa-clock-o"></i> {{DB::table('pamongs')->where('id', $timeline->pamong_id)->value('nama')}} - {{$timeline->created_at}} -
                                            <a href={{route('timelines.edit',$timeline->id)}}> edit </a>
                                            {{-- <a href="{{ URL::to('timelines/' . $value->id) }}"> hapus <input type="hidden" name="_method" value="DELETE"></a> --}}
                                            {{ Form::open(array('url' => 'timelines/' . $timeline->id, 'class' => 'pull-right')) }}
                                              {{ Form::hidden('_method', 'DELETE') }}
                                              {{ Form::submit('Hapus', array('class' => 'btn btn-warning btn-xs')) }}
                                            {{ Form::close() }}
                                          </small>
                                          </p>
                                      </div>

                                    </div>
                                </li>
                              @elseif ($loop->index % 2 == 0)
                                <li class="timeline-inverted">
                                    {{-- <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div> --}}
                                    <div class="timeline-panel">
                                      <div class="timeline-body">
                                          <p>{{$timeline->post}}</p>
                                      </div>
                                      <div class="timeline-heading">
                                          <p>
                                            <small class="text-muted">
                                              <i class="fa fa-clock-o"></i>
                                              {{DB::table('pamongs')->where('id', $timeline->pamong_id)->value('nama')}} - {{$timeline->created_at}} -
                                              <a href={{route('timelines.edit',$timeline->id)}}> edit </a>
                                              {{ Form::open(array('url' => 'timelines/' . $timeline->id, 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Hapus', array('class' => 'btn btn-warning btn-xs')) }}
                                              {{ Form::close() }}
                                            </small>
                                          </p>
                                      </div>

                                    </div>
                                </li>

                              @endif
                            @endif

                          @endforeach
                        </ul>
                        <div class="class="center-block"">
                          {{$timelines->links()}}
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row">
              <div class="col-lg-1-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Pengumuman -
                          <a href="{{url ('pengumumans')}}">
                                <span class=" btn-link"> <i title="Detail Pengumuman" class="fa fa-list-alt"> </i></span>
                          </a>
                          <a href="#" data-toggle="modal" data-target="#pengumuman">
                                <span class="pull-right btn-link"> <i title="Tambah Pengumuman" class="fa fa-plus"> </i></span>
                                <div class="clearfix"></div>
                            </a></h3>
                    </div>
                    <div class="panel-body autoscroll">
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
                              @continue
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
              <div class="col-lg-1-12">
                <div class="panel panel-green">
                    <div class="panel-heading">
                      <h3 class="panel-title"> Pengasuh Bertugas <a href="#" data-toggle="modal" data-target="#pengasuh">
                              <span class="pull-right btn-link"> <i title="Edit Pengasuh Bertugas" class="fa fa-edit"> </i></span>
                              <div class="clearfix"></div>
                          </a></h3>
                    </div>
                    <div class="panel-body autoscroll">
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
              <div class="col-lg-1-12">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <h3  class="panel-title">Mahasiswa Sakit <span class="pull-right"> @php
                        date_default_timezone_set("Asia/Jakarta");
                        echo date("d/m/Y");
                        @endphp </span>
                        <div class="clearfix"></div>
                      </h3>
                    </div>
                        <div class="panel-body autoscroll">
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
              <div class="col-lg-1-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                          Daftar Pelanggaran Mahasiswa -
                          <a href="{{url ('rewardpunishes')}}">
                                <span class=" btn-link"> <i title="Detail Pelanggaran" class="fa fa-list-alt"> </i></span>
                          </a>
                          <a href="#" data-toggle="modal" data-target="#pelanggaran">
                                <span class="pull-right btn-link"> <i title="Tambah Pelanggaran" class="fa fa-plus"> </i></span>
                                <div class="clearfix"></div>
                          </a>
                        </h3></div>
                    <div class="panel-body autoscroll">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Pelanggaran</th>
                                  <th>Hukuman</th>
                                  <th>Keterangan</th>
                                  <th>Pamong</th>
                              </tr>
                          </thead>

                          <tbody>
                            @foreach ($punishes as $punish)
                                <tr>
                                    <td>{{$punish->kasus}}</td>
                                    <td>{{$punish->hukuman}}</td>
                                    <td>{{$punish->ket_wkt_punish}}</td>
                                    <td>{{DB::table('pamongs')->where('id',$punish->pamong)->value('nama')}}</td>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="pelanggaran">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Pelanggaran</h4></div>
                <div class="modal-body">
                    <form method="post" action="/rewardpunishes" id="eventForm" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label"> Pamong </label>
                            <select class="form-control" name="pamong">
                              @foreach ($pamongs as $pamong)
                                <option value={{$pamong->id}}>{{$pamong->nama}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="kasus"> Kasus </label>
                            <input aria-label="Kasus Pelanggaran" name="kasus" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label"> Hukuman </label>
                            <input aria-label="Deskripsi Hukuman" name="punish" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label"> Keterangan </label>
                            <input aria-label="Keterangan Waktu Hukuman" name="ket_wkt" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-default" type="submit"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="post-something">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Kejadian</h4></div>
                <div class="modal-body">
                    <form method="post" action="/timelines" id="eventForm" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label"> Pamong </label>
                            <select class="form-control" name="pamong">
                              @foreach ($pamongs as $pamong)
                                <option value={{$pamong->id}}>{{$pamong->nama}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label"> Kejadian </label>
                            <textarea name="post" aria-label="Deskripsi Kejadian" class="form-control" id="" placeholder="" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit"> Tambahkan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="pengumuman">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Pengumuman</h4></div>
                <div class="modal-body">
                    <form method="post" action="/pengumumans" id="eventForm" role="form">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="control-label">Kepada </label>
                            <input aria-label="kepada" name="kepada" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Isi Pengumuman</label>
                            <input aria-label="Deskripsi Kejadian" name="isi" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <button  class="btn btn-primary" type="submit">Tambahkan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="pengasuh">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Edit Pengasuh Bertugas</h4></div>
                <div class="modal-body">
                    <form method="post" action="/pamongbtgs" id="eventForm" role="form">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-6">
                              <label class="control-label " for="date">
                              Tanggal:
                              </label>
                              <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                               </div>
                               <input class="form-control" id="date" name="tgl" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pamong Tingkat I</label>
                            <input aria-label="Pamong Tingkat I" name="tk1" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pamong Tingkat II</label>
                            <input aria-label="Pamong Tingkat II" name="tk2" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pamong Tingkat III</label>
                            <input aria-label="Pamong Tingkat III" name="tk3" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pamong Tingkat IV</label>
                            <input aria-label="Pamong Tingkat IV" name="tk4" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <button  class="btn btn-primary" type="submit">Ubah </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" role="dialog" tabindex="-1" id="pelanggaran">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Daftar Kasus</h4></div>
                <div class="modal-body">
                    <form method="post" action="/rewardpunishes" id="eventForm" role="form">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-6">
                              <label class="control-label " for="date">
                              Tanggal:
                              </label>
                              <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                               </div>
                               <input class="form-control" id="date" name="tgl_kasus" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kasus</label>
                            <input aria-label="Deskripsi Kasus" name="kasus" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pengurangan Nilai Pengasuhan</label>
                            <input aria-label="Pengurangan Poin" name="poin_min" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Hukuman</label>
                            <input aria-label="Hukuman" name="hukuman" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-6">
                              <label class="control-label " for="date">
                              Muali Hukuman:
                              </label>
                              <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                               </div>
                               <input class="form-control" id="date" name="tgl_mulai" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-6">
                              <label class="control-label " for="date">
                              Selesai Hukuman:
                              </label>
                              <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                               </div>
                               <input class="form-control" id="date" name="tgl_selesai" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <button  class="btn btn-primary" type="submit">Tambahkan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}


@stop
