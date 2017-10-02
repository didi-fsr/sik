<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    // protected $name = 'name';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'logout']);
        //$this->middleware('auth');
    }

    protected function authenticated(Request $request, $user)
    {
      if ( $user->hasRole('admin') ) {// do your margic here
        return redirect('/adminhome');
      }
      elseif ($user->hasRole('pamong')){
        return redirect('/pamonghome');
      }
      else
        return redirect('/mahasiswahome');
    }

    public function username()
    {
        return 'name';
    }

    // public function redirectTo()
    // {
    //     if($username=='admin'){
    //       return '/admin_home';
    //     } else if(){
    //
    //     }
    // }
}
