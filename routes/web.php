<?php

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
    return view('pages.index');
});

Route::get('/dashboard', function () {
    $karya = Karya::all();
    return view('dashboard',['karyas' => $karya]);
});

Route::get('/register', [AccountController::class,'AccountRegister'])->name('showRegister');
Route::get('/login', [AccountController::class,'Accountlogin'])->name('showLogin');
Route::post('/login', [AccountController::class,'login']);
Route::get('/logout', [AccountController::class, 'logout']);

Route::resource('/account', AccountController::class);
Route::resource('/karya', KaryaController::class);
Route::resource('/komunitas', KomunitasController::class);
Route::resource('/event', EventController::class);
Route::resource('/komentar', EventController::class);

Route::get('/listUser', function() {
    return view('listUser');
});