@extends('layouts.pamong_dashboard')

@section('section')

  <div class="container-fluid">
    <div class="row">
      <div class=" col-lg-offset-2 col-lg-8">
        <div class="panel">
          <div class="panel-heading">
            <h2>Daftar Pengumuman</h2>
          </div>

          <div class="panel-body">
            <table class="table table-striped">
              <thead>
                <th>No</th>
                <th>Kepada</th>
                <th>Isi</th>
                <th>Status</th>
              </thead>
              <tbody>
                @foreach ($pengumumans as $pengumuman)
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$pengumuman->kepada}} - <a class="btn btn-xs btn-success" href="{{ URL::to('pengumumans/' . $pengumuman->id . '/edit') }}">Edit</a></td>
                    <td>{{$pengumuman->isi}}</td>
                    @if ($pengumuman->tampil == 1)
                      <td><small><a class="btn btn-xs btn-success" id="status" href="#">Tampil</a></small></td>
                    @else
                      <td><small><a class="btn btn-xs btn-danger" id="status" href="#">Sembunyi</a></small></td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>



@stop
