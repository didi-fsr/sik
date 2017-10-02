@extends('layouts.pamong_dashboard')

@section('section')

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1-12">
        <h2>Hasil Pencarian Kejadian</h2>

        <table class="table">
          <thead>
            <tr>
              <th>Kejadian</th>
              <th>Tanggal</th>
              <th>Pamong</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($results as $result)
              <tr>
                <td>{{$result->post}}</td>
                <td>{{$result->created_at}}</td>
                <td>{{$result->pamong_id}}</td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop
