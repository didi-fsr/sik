<?php

// Illuminate\Auth\Middleware\Authenticate
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->resource('mahasiswas', 'MahasiswaController');

Route::get('searchajax', array('as'=>'searchajax','uses'=>'MahasiswaController@autoComplete'));
// Route::get('searchajax','MahasiswaController@autoComplete');

Route::middleware('auth')->resource('ijinkeluars', 'IjinkeluarController');

Route::middleware('auth')->resource('ijinkegiatans', 'IjinkegiatanController');

Route::middleware('auth')->resource('ijinfasilitass', 'IjinFasilitasController');

Route::middleware('auth')->resource('pengumumans', 'PengumumanController');

Route::middleware('auth')->resource('pamongs', 'PamongController');

Route::middleware('auth')->resource('laporankhms', 'LaporankhmController');

Route::middleware('auth')->resource('kelass', 'KelasController');

Route::post('pamongbtgs','PamongbtgsController@store');

Route::middleware('auth')->resource('timelines', 'TimelineController');

Route::middleware('auth')->resource('ijinlaptops', 'IjinlaptopController');

Route::middleware('auth')->resource('ijinkendaraans', 'IjinkendaraanController');

Route::middleware('auth')->resource('ijinhps', 'IjinhpController');

Route::middleware('auth')->resource('rewardpunishes', 'RewardpunishController');

Route::middleware(['auth','ability:admin,true'])->resource('users', 'UserController');
//
Route::middleware(['auth','ability:admin,true'])->resource('roles', 'RoleController');

Route::get('/', function () {
    // use Illuminate\Support\Facades\Auth;

    if (Auth::check()) {
    // The user is logged in...
    // Generating URLs...
    // $url = route('mhs');
    //
    // // Generating Redirects...
    // return redirect()->route('mhs');
      return redirect('mahasiswahome');
    }
    return view('auth.login');
});

Route::middleware('auth')->resource('mahasiswahome', 'MahasiswahomeController');
  Route::middleware('permission:item-list|item-create|item-edit|item-delete')->resource('adminhome', 'AdminhomeController');
  Route::middleware('permission:item-list|item-create|item-edit|item-delete')->resource('pamonghome', 'PamonghomeController');
// Route::middleware('auth')->resource('pamonghome', 'PamonghomeController');
// Route::middleware('auth')->resource('adminhome', 'AdminhomeController');

// Route::get('mahasiswahome', function () {
//     return view('mahasiswa_home');
// })->middleware('auth')->name('mhs');
//
// Route::get('pamonghome', 'PamonghomeController@index');

Route::get('pinfo', 'PinfoController@index');

Auth::routes();

// Route::group(['middleware' => ['auth']], function() {
//
// 	Route::get('/home', 'HomeController@index');
//
// 	// Route::resource('users','UserController');
//   // Route::resource('roles','RoleController');
//
//   // Route::middleware('role:admin')->resource('users', 'UserController');
//   // Route::resource('roles', 'RoleController');
//
//   Route::group(['prefix' => 'roles', 'middleware' => ['ability:admin,true']], function() {
//     Route::get('/', 'RoleController@index');
//     // Route::get('/create', ['as'=>'roles.create','uses'=>'RoleController@create']);
//     // Route::post('/create', ['as'=>'roles.store','uses'=>'RoleController@store']);
//     // Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
//   });
//
//
//
// });

// Entrust::routeNeedsRole('roles/create', 'admin');
// Route::get('/home', 'HomeController@index')->name('home');
