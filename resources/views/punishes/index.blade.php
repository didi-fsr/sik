@extends('layouts.pamong_dashboard')

@section('section')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="panel">
          <div class="panel-heading">
            <h2>Daftar Pelanggaran Mahasiswa</h2>
          </div>

          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <th>No</th>
                <th>Pelanggaran</th>
                <th>Tanggal</th>
                <th>Hukuman</th>
                <th>Pamong</th>
                <th>Mahasiswa</th>
                <th>Keterangan</th>
                <th>Status</th>
              </thead>
              <tbody>
                @foreach ($punishes as $punish)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$punish->kasus}} - <a class="btn btn-xs btn-success" href="{{ URL::to('rewardpunishes/' . $punish->id . '/edit') }}">Edit</a></td>
                    <td>{{$punish->tgl}}</td>
                    <td>{{$punish->hukuman}}</td>
                    <td>{{DB::table('pamongs')->where('id',$punish->pamong)->value('nama')}}</td>
                    <td>
                      {{-- @foreach ($punish->mahasiswas() as $punish_mhs)
                        {{$punish_mhs->nm_pd}} <br>
                      @endforeach --}}
                      <small><a id="lampiran" href="#"><span class="glyphicon glyphicon-chevron-down"> Show </span></a></small>
                      <div id="listmhs">
                        @if ($punish->mahasiswas_count != 0)
                          @foreach ($punish->mahasiswas as $mhs)
                             {{$mhs->nm_pd}} <br>
                          @endforeach
                        @endif
                      </div>
                    </td>
                    <td>{{$punish->ket_wkt_punish}}</td>
                    @if ($punish->status == 1)
                      <td><small><a class="btn btn-xs btn-success" id="status" href="#">Berlaku</a></small></td>
                    @else
                      <td><small><a class="btn btn-xs btn-danger" id="status" href="#">Tdk Berlaku</a></small></td>
                    @endif

                  </tr>
                @endforeach
              </tbody>
            </table>
              {{-- {{ Form::model($timeline, array('route' => array('timelines.update', $timeline->id), 'method' => 'PUT')) }}
                <div class="form-group">
                  {{ Form::label('pamong_id', 'Pamong') }}
                  {{ Form::select('pamong_id', $pamongs, $pamong_selected, array('class'=>'form-control')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('post', 'Kejadian') }}
                  {{ Form::textarea('post', null, array('class' => 'form-control','rows' => 3)) }}
                </div>
                {{ Form::submit('Ubah', array('class' => 'btn btn-primary')) }}

              {!! Form::close() !!} --}}

          </div>
        </div>
      </div>
    </div>
  </div>
{{--
  <div class="modal fade" role="dialog" tabindex="-1" id="lampiran">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="mhead"> </h4></div>
              <div class="modal-body">
                  <ol class="list-group">
                    @if ($punish->mahasiswas_count != 0)
                      @foreach ($punish->mahasiswas as $mhs)
                        <li>{{$mhs->nm_pd}}</li>
                      @endforeach
                    @endif
                  </ol>
              </div>
          </div>
      </div>
  </div> --}}
  <script type="text/javascript">
    $(document).ready(function(){
      $("#listmhs").hide();
      $("#lampiran").click(function(){
        $("#listmhs").slideToggle("slow");
      });
    });
    // $('#lampiran').on('show.bs.modal', function(e) {
    // //get data-id attribute of the clicked element
    //     var kasus = $(e.relatedTarget).data('kasus');
    //     var punishid = $(e.relatedTarget).data('punishid');
    //     // var productName = $(e.relatedTarget).data('product_name');
    //  $("#mhead").text( "Pelanggaran: " + kasus );
    // $("#delForm").attr('action', 'put your action here with productId');//e.g. 'domainname/products/' + productId
    // });
  </script>

@stop
