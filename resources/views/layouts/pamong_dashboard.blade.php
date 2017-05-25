@extends('layouts.plane')

@section('body')
    <div id="wrapper">
        <!-- Navigation -->
        <div class="page-header"></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand navbar-link " href="#">SIK-STSN </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-left">

                        <li class="active" role="presentation"><a href="#">Profil Mahasiswa</a></li>
                        <li  role="presentation"><a href="#">Infografis Mahasiswa</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Input Data Mahasiswa<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="#">Mahasiswa Sakit</a></li>
                                <li role="presentation"><a href="#">Prestasi dan Pelanggaran</a></li>
                                <li role="presentation"><a href="#">Nilai Samapta</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown" role="presentation">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Perijinan <i class="fa fa-flag fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li><a href="#"><i class="fa fa-plane fa-fw"></i> Ijin Keluar</a>
                                </li>
                                <li><a href="#"><i class="fa fa-bed fa-fw"></i> Ijin Bermalam</a>
                                </li>
                                <li><a href="#"><i class="fa fa-building fa-fw"></i> Ijin Fasilitas</a>
                                </li>
                                <li><a href="#"><i class="fa fa-briefcase fa-fw"></i> Ijin Perlengkapan Pribadi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" role="presentation">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <button class="btn btn-info" type="button">Cari </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        @yield('section')
    </div>
@stop

