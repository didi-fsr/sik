@extends('layouts.plane')

@section('content')

  {{-- <div class="jumbotron">
    <h1> Registrasi berhasil. <small>Terima kasih atas partisipasi anda.</small></h1>
    <button type="button" class="btn btn-link">Link</button>
  </div> --}}
  <div class="jumbotron">
      <div class="container">
        <h1>Upload Formulir Ijin Kegiatan Berhasil</h1>
        {{-- <p>Terima kasih atas partisipasi anda.</p> --}}
        <p><a class="btn btn-primary btn-lg" role="button" href='ijinkegiatans/create'>Kembali ke Formulir Ijin Kegiatan</a></p>
      </div>
  </div>
@stop
