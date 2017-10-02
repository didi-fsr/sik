@extends('layouts.pamong_dashboard')

@section('section')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h2>Edit Pelanggaran</h2>
          </div>

          <div class="panel-body">
              {{ Form::model($punish, array('route' => array('rewardpunishes.update', $punish->id), 'method' => 'PUT')) }}
                <div class="form-group">
                  {{ Form::label('pamong', 'Pamong') }}
                  {{ Form::select('pamong', $pamongs, $pamong_selected, array('class'=>'form-control')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('kasus', 'Pelanggaran') }}
                  {{ Form::text('kasus', null, array('class' => 'form-control', 'aria-label'=>'Kasus Pelanggaran')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('hukuman', 'Hukuman') }}
                  {{ Form::text('hukuman', null, array('class' => 'form-control', 'aria-label'=>'Deskripsi Hukuman')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('ket_wkt_punish', 'Keterangan') }}
                  {{ Form::text('ket_wkt_punish', null, array('class' => 'form-control', 'aria-label'=>'Keterangan Waktu Hukuman')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('status', 'Status') }}
                  {{-- {{ Form::text('status', null, array('class' => 'form-control', 'aria-label'=>'Status Hukuman')) }} --}}

                  @if ($punish->status!=1)
                    <select name="status" aria-label="Status Hukuman" class="form-control">
                      <option value="1">Berlaku</option>
                      <option value="0" selected>Tidak Berlaku</option>
                    </select>
                  @else
                    <select name="status" aria-label="Status Hukuman" class="form-control">
                      <option value="1" selected>Berlaku</option>
                      <option value="0">Tidak Berlaku</option>
                    </select>
                  @endif

                </div>
                <hr>

                <div class="form-group">
                  <label class="control-label"> Edit Mahasiswa </label> <a id="mhs_toggle" href="#"> <span class="glyphicon glyphicon-chevron-down"> </span></a>
                  <div id="edit_mhs" >
                    {{-- {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!} --}}
                    @if ($punish->mahasiswas_count != 0)
                      <table class="table table-striped">
                        <thead>
                          <th>Nama</th>
                          <th>Hapus</th>
                        </thead>
                        <tbody>
                          @foreach ($punish->mahasiswas as $mhs)
                          <tr>
                            <td>{{$mhs->nm_pd}}</td>
                            <td><input class="checkbox" type="checkbox" name="detach_mhs[]" value="{{$mhs->id}}"></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @endif
                    <div class="input-group" id="add_mhs">
                      <input class="typeahead form-control" type="text" name="search_text" id="search_text" placeholder="Cari Mahasiswa" autocomplete="off">
                      <span class="input-group-btn">
                        {{-- <button class="btn btn-default" type="button">Go!</button> --}}
                        <button class="btn btn-default" type="button" id="rpm_add"> Add </button>
                      </span>
                    </div><!-- /input-group -->
                    {{-- <select class="form-control" name="mahasiswa">
                      @foreach ($mahasiswas as $mahasiswa)
                        <option value={{$mahasiswa->id}}>{{$mahasiswa->nama}}</option>
                      @endforeach
                    </select> --}}
                    {{-- <ol id="mhs_list">
                    </ol> --}}
                    <small><p style="margin-top:10px" id="terpilih"> Terpilih : </p></small>
                  </div>
                </div>

                {{ Form::submit('Ubah', array('class' => 'btn btn-primary')) }}

              {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#edit_mhs").hide();
      $("#mhs_toggle").click(function(){
        $("#edit_mhs").slideToggle("slow");
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
