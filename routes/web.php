<?php
use App\Http\Controllers\CucianController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

//Homepage User
Route::get('/', function () {
    return view('homepage');
});

//Login
Route::get('/blue-springs-laundry/login', function () {
    return view('login');
});

// proses login
// Route::get('/blue-springs-laundry/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/blue-springs-laundry/login', [App\Http\Controllers\AuthController::class, 'showLoginForm']);
// Route::post('/blue-springs-laundry/login', [App\Http\Controllers\AuthController::class, 'login']);
// Route::post('/blue-springs-laundry/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');
// Route::get('/blue-springs-laundry/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/blue-springs-laundry/login', 'App\Http\Controllers\AuthController@login')->name('login.submit');


Route::get('/blue-springs-laundry/dashboard', function () {
    // Halaman dashboard admin
})->name('admin.dashboard');

Route::get('/', function () {
    return view('homepage');
    // Halaman dashboard user
})->name('user.dashboard');


// Route::get('login', 'App\Http\Controllers\AuthController@index')->name('index');
// // Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('/blue-springs-laundry/dashboard', DashboardController::class);
//     });
//     Route::group(['middleware' => ['cek_login:user']], function () {
//         return view('homepage');
//     });
// });

//Register
Route::get('/blue-springs-laundry/register', function () {
    return view('register');
});

Route::post('/blue-springs-laundry/register/create', [App\Http\Controllers\RegisterController::class, 'registerPostData']);

//Admin Profile
Route::get('/blue-springs-laundry/users-profile', function () {
    return view('users-profile');
});

//Dashboard Admin
Route::get('/blue-springs-laundry/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboardclass']);

//DATA PELANGGAN
Route::get('/blue-springs-laundry/data-pelanggan', [App\Http\Controllers\UserController::class, 'viewuserclass']);

Route::post('/blue-springs-laundry/data-pelanggan/create', [App\Http\Controllers\UserController::class, 'userPostData']);

Route::put('/blue-springs-laundry/data-pelanggan/{id_pelanggan}', [App\Http\Controllers\UserController::class, 'userEditData']);

Route::delete('/blue-springs-laundry/data-pelanggan/{id_pelanggan}', [App\Http\Controllers\UserController::class, 'userDeleteData']);

//DATA TRANSAKSI
Route::get('/blue-springs-laundry/data-transaksi', [App\Http\Controllers\TransaksiController::class, 'viewtransaksiclass']);

Route::post('/blue-springs-laundry/data-transaksi/create', [App\Http\Controllers\TransaksiController::class, 'transaksiPostData']);

Route::put('/blue-springs-laundry/data-transaksi/{id_transaksi}', [App\Http\Controllers\TransaksiController::class, 'transaksiEditData']);

Route::delete('/blue-springs-laundry/data-transaksi/{id_transaksi}', [App\Http\Controllers\TransaksiController::class, 'transaksiDeleteData']);

//DATA PAKET
Route::get('/blue-springs-laundry/data-paket', [App\Http\Controllers\PaketController::class, 'viewpaketclass']);

Route::post('/blue-springs-laundry/data-paket/create', [App\Http\Controllers\PaketController::class, 'paketPostData']);

Route::put('/blue-springs-laundry/data-paket/{id_paket}', [App\Http\Controllers\PaketController::class, 'paketEditData']);

Route::delete('/blue-springs-laundry/data-paket/{id_paket}', [App\Http\Controllers\PaketController::class, 'paketDeleteData']);

//DATA CUCIAN
Route::get('/blue-springs-laundry/data-cucian', [App\Http\Controllers\CucianController::class, 'viewcucianclass']);

Route::post('/blue-springs-laundry/data-cucian/create', [App\Http\Controllers\CucianController::class, 'cucianPostData']);

Route::put('/blue-springs-laundry/data-cucian/{id_cucian}', [App\Http\Controllers\CucianController::class, 'cucianEditData']);

Route::delete('/blue-springs-laundry/data-cucian/{id_cucian}', [App\Http\Controllers\CucianController::class, 'cucianDeleteData']);