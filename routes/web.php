<?php
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\KomunitasController;
use App\Models\Karya;
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

// Route::get('/', function () {
//     $karya = Karya::all();
//     return view('landingPage',['karyas' => $karya]);
// });

Route::get('/',function () {
    $karya = Karya::all();
    return view('pages.index',['karyas' => $karya]);

});

Route::get('/dashboard', function () {
    $karya = Karya::all();
    return view('pages.dashboard',['karyas' => $karya]);
});

//event

Route::get('/update-event', function () {
    return view('update-event');
});

//komunitas

Route::get('/createKomunitas', function () {
    return view('createKomunitas');
});
Route::get('/editKomunitas', function () {
    return view('editKomunitas');
});


Route::get('/register', [AccountController::class,'AccountRegister']);
Route::get('/login', [AccountController::class,'Accountlogin']);
Route::post('/login', [AccountController::class,'login']);
Route::get('/logout', [AccountController::class, 'logout']);

Route::resource('/account', AccountController::class);
Route::resource('/karya', KaryaController::class);
Route::resource('/komunitas', KomunitasController::class);
Route::resource('/event', EventController::class);
Route::resource('/komentar', EventController::class);



Route::resource('penggunas', PenggunaController::class)->except(['create', 'store', 'destroy']);


Route::get('/listUser', function() {
    return view('listUser');
});
Route::get('/aaa', function() {
    return view('test');
});

//Bagian Kalender
Route::get('/adelcalender', function() {
    return view('calendar');
});

//bagian show event
Route::get('/show-event', function() {
    return view('show-event');
});