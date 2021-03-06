@extends('layouts.mhs_dashboard')

@section('mainform')

    <div class="container-fluid">
        <div class="row">
          {{-- <div class="col-lg-4">
            <div class="panel-body">
              <div id="tbl2b" class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Kelas</th>
                                  <th>Ketua Kelas</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($kelass as $kelas)
                              <tr>
                                  <td class="success">{{$kelas->nama_kelas}}</td>
                                  <td></td>
                              </tr>
                            @endforeach

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
          </div> --}}

            {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Timeline  <a href="#" data-toggle="modal" data-target="#post-something">
                                <span class="pull-right btn-link"> <i title="Tambah Kejadian" class="fa fa-plus"> </i></span>
                                <div class="clearfix"></div>
                            </a></h3>
                    </div>

                    <div class="panel-body">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-badge"><i class="fa fa-check"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                </div>
                                <div class="timeline-panel time">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge info"><i class="fa fa-save"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                        <hr>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-gear"></i>  <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Agenda Kegiatan Subbag AK</h3></div>
                    <div class="panel-body">
                        <div class="panel">

                        </div>
                    </div>
                </div>
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">News Feed</h3></div>
                    <div class="panel-body"><span>Panel Body</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <h3 class="panel-title">Mahasiswa Sakit</h3></div>
                    <div class="panel-body"><span>Panel Body</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <h3 class="panel-title">Mahasiswa Dalam Masa Hukuman</h3></div>
                    <div class="panel-body"><span>Panel Body</span></div>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <div class="modal fade" role="dialog" tabindex="-1" id="post-something">
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
    </div> --}}


@stop
