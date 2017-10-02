@extends('layouts.app')

@section('content')

  {{-- <div class="jumbotron">
    <h1> Registrasi berhasil. <small>Terima kasih atas partisipasi anda.</small></h1>
    <button type="button" class="btn btn-link">Link</button>
  </div> --}}
  <div class="jumbotron">
      <div class="container">
        <h1>You Don't have permission</h1 >
        {{-- <p>Terima kasih atas partisipasi anda.</p> --}}
        {{-- <p><a class="btn btn-primary btn-lg" role="button" href='ijinfasilitass/create'>Kembali ke Formulir Ijin Fasilitas</a></p> --}}
        <button class="btn btn-primary pull-right" onclick="goBack()">Go Back</button>
      </div>
  </div>
  <script>
  	function goBack() {
  	window.history.back();
  }
  </script>
@stop

{{-- @section('section') --}}
