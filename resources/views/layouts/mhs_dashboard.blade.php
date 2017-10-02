@extends('layouts.plane')

@section('content')
    <div id="wrapper">
        <!-- Navigation -->
        <div class="page-header"></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand navbar-link " href="#">SIK | Dashboard Mahasiswa </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#">Perijinan<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li tabindex="-1" aria-expanded="false" ><a href="{{route('ijinkeluars.create')}}">Ijin Keluar</a></li>
                                <li tabindex="-1" aria-expanded="false" ><a href="{{route('ijinkegiatans.create')}}">Ijin Kegiatan</a></li>
                                <li tabindex="-1" aria-expanded="false" ><a href="{{route('ijinfasilitass.create')}}">Ijin Fasilitas</a></li>
                                <li class="dropdown-submenu" ><a class="test" aria-expanded="false" href="#">Ijin Barang Pribadi <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li tabindex="-1" ><a aria-expanded="false" href="{{route('ijinlaptops.create')}}">Ijin Laptop</a></li>
                                    <li tabindex="-1" ><a aria-expanded="false" href="{{route('ijinkendaraans.create')}}">Ijin Sepeda Motor</a></li>
                                    <li tabindex="-1" ><a aria-expanded="false" href="{{route('ijinhps.create')}}">Ijin HP/Smartphone</a></li>
                                  </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#">Laporan-laporan<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{route('laporankhms.create')}}">Laporan Kehadiran KHM</a></li>
                                <li role="presentation"><a href="#">Laporan Mahasiswa Sakit</a></li>
                                <li role="presentation"><a href="#">Laporan Kerusakan Sarpras</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <!-- Authentication Links -->
                      @if (Auth::guest())
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user fa-fw"></i>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <ul class="dropdown-menu" role="menu">
                                  <li>
                                      <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </li>
                      @endif
                        {{-- <li class="dropdown" role="presentation">
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
                        </li> --}}
                    </ul>
                    <form class="navbar-form navbar-right">
                        <button class="btn btn-info" type="button">Cari </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
      <div class="row">

          @yield('mainform')

          @yield('sidebar')

      </div>
    </div>
@stop
