<?php

use App\Http\Controllers\parking\AuthParkingAdminController;
use App\Http\Controllers\parking\RegisterParkingAdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/registrar-administrador', [RegisterParkingAdminController::class, 'create'])->name('register.adm.parking');
Route::post('/registrar-administrador', [RegisterParkingAdminController::class, 'store'])->name('register.adm.parking.store');

Route::get('/login-administrador', [AuthParkingAdminController::class, 'create'])->name('login.adm.parking');
Route::post('/login-administrador', [AuthParkingAdminController::class, 'store'])->name('login.adm.parking.store');
