<?php
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\KomunitasController;
use App\Models\Event;
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
    $karya = Karya::orderBy('created_at', 'desc')->get();
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
Route::get('/account/{id}/detailProfile', [AccountController::class, 'detail']);
Route::POST('/account/{id}/updateProfile', [AccountController::class, 'updateProfile']);







Route::resource('penggunas', PenggunaController::class)->except(['create', 'store', 'destroy']);


Route::get('/listUser', function() {
    return view('listUser');
});
Route::get('/aaa', function() {
    return view('test');
});

//pages belom fix :
Route::get('/calendar', function() {
    $event = Event::orderBy('created_at', 'desc')->get();
    return view('calendar', ['events'=>$event]);
});

// Route::get('/createKomunitas', function() {
//     return view('createKomunitas');
// });
Route::get('/detailKarya', function() {
    return view('detailKarya');
});
Route::get('/editAccount', function() {
    return view('editAccount');
});
Route::get('/editKarya', function() {
    return view('editKarya');
});
Route::get('/editKomunitas', function() {
    return view('editKomunitas');
});
Route::get('/inviteKomunitas', function() {
    return view('editKarya');
});

Route::get('/manage-event', function() {
    $event = Event::all();
    return view('manage-event', ['eventList'=>$event]);
});

Route::get('/manageAnggotaKomunitas', function() {
    return view('manageAnggotaKomunitas');
});
Route::get('/search', function() {
    return view('search');
});
Route::get('/update-event', function() {
    return view('update-event');
});

Route::get('/show-event', function() {
    return view('show-event');
});

Route::get('/profile', function() {
    return view('pages.profile');
});