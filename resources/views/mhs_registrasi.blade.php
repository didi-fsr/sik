@extends('layouts.mhs_dashboard')

@section('mainframe')

    <div class="panel panel-primary">
      <div class="panel-heading">
        Main Form
      </div>
      <div class="panel-body">

      </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="post-something">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Tambah Kejadian</h4></div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="control-label">Judul </label>
                            <input aria-label="Judul Kejadian" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Deskripsi Kejadian</label>
                            <input aria-label="Deskripsi Kejadian" class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="button">Post </button>
                            <button class="btn btn-default" type="button">Close </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('sidebar')
  <div class="panel panel-red ">
    <div class="panel-heading ">
      Berita
    </div>
    <div class="panel-body">

    </div>

  </div>
@endsection
