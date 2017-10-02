@extends('layouts.pamong_dashboard')

@section('section')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h2>Edit Pengumuman</h2>
          </div>

          <div class="panel-body">
              {{ Form::model($pengumuman, array('route' => array('pengumumans.update', $pengumuman->id), 'method' => 'PUT')) }}
                <div class="form-group">
                  {{ Form::label('kepada', 'Kepada') }}
                  {{ Form::text('kepada', null, array('class' => 'form-control', 'aria-label'=>'Pengumuman Kepada')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('isi', 'Isi Pengumuman') }}
                  {{ Form::text('isi', null, array('class' => 'form-control', 'aria-label'=>'Isi Pengumuman')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('tampil', 'Status') }}
                  {{-- {{ Form::text('status', null, array('class' => 'form-control', 'aria-label'=>'Status Hukuman')) }} --}}

                  @if ($pengumuman->tampil!=1)
                    <select name="tampil" aria-label="Status Hukuman" class="form-control">
                      <option value="1">Tampilkan</option>
                      <option value="0" selected>Sembunyikan</option>
                    </select>
                  @else
                    <select name="tampil" aria-label="Status Hukuman" class="form-control">
                      <option value="1" selected>Tampilkan</option>
                      <option value="0">Sembunyikan</option>
                    </select>
                  @endif

                </div>

                {{ Form::submit('Ubah', array('class' => 'btn btn-primary')) }}

              {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>


@stop
