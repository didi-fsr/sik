@extends ('layouts.plane')

{{-- @section('navbar')
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
        </ul>
      </div>
    </div>
  </nav>
@endsection --}}

@section ('content')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('login_panel_title','Please Sign In')
               @section ('login_panel_body')
                 <div class="login-card"><img src="{{ asset("assets/img/logo stsn.png") }}" alt="logo_stsn" width="50" height="50" class="profile-img-card">
                     <p class="profile-name-card">Sistem Informasi Kemahasiswaan STSN</p>
                     <form class="form-signin" role="form" method="POST" action="{{ route('login') }}"><span class="reauth-email"> </span>
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('text') ? ' has-error' : '' }}" >
                          <input class="form-control " type="text" name="name" required="" placeholder="Username" autofocus="" value="{{ old('username') }}" id="inputUsername">
                          @if ($errors->has('text'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('text') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                          <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword">
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                        </div>

                         <div class="checkbox">
                             <div class="checkbox">
                                 <label>
                                     <input type="checkbox">Remember me</label>
                             </div>
                         </div>
                         <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
                     </form><a href=""{{ route('password.request') }}"" class="forgot-password">Forgot your password?</a></div>
                        {{-- <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="{{ url ('') }}" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form> --}}

                @endsection
                @include('widgets.panel', array('as'=>'login', 'header'=>true))
            </div>
        </div>
    </div>
@stop
