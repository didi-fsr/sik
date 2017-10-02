@extends('layouts.pamong_dashboard')

@section('section')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6">
        <div class="panel">
          <div class="panel-heading">
            <h2>Hasil Pencarian Kejadian</h2>
          </div>

          <div class="panel-body">
              {{ Form::model($timeline, array('route' => array('timelines.update', $timeline->id), 'method' => 'PUT')) }}
                <div class="form-group">
                  {{ Form::label('pamong_id', 'Pamong') }}
                  {{ Form::select('pamong_id', $pamongs, $pamong_selected, array('class'=>'form-control')) }}
                </div>
                <div class="form-group">
                  {{ Form::label('post', 'Kejadian') }}
                  {{ Form::textarea('post', null, array('class' => 'form-control','rows' => 3)) }}
                </div>
                {{ Form::submit('Ubah', array('class' => 'btn btn-primary')) }}

              {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>


  </div>
@stop
