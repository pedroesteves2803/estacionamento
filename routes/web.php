<?php

use App\Http\Controllers\parking\AuthParkingAdminController;
use App\Http\Controllers\parking\DashboarController;
use App\Http\Controllers\parking\RegisterParking;
use App\Http\Controllers\parking\RegisterParkingAdminController;
use App\Http\Livewire\RegisterCars;
use App\Http\Livewire\ShowPosts;
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

Route::get('/registrar-estacionamento', [RegisterParking::class, 'create'])->name('register.parking');
Route::post('/registrar-estacionamento', [RegisterParking::class, 'store'])->name('register.parking.store');

Route::get('/login-administrador', [AuthParkingAdminController::class, 'create'])->name('login.parking');
Route::post('/login-administrador', [AuthParkingAdminController::class, 'store'])->name('login.parking.store');

Route::prefix('admin/')->name('admin.')->group(function (){
    Route::get('/dashboard-administrador', [DashboarController::class, 'create'])->name('dashboard.parking');

    Route::get('/registrar-administrador', [RegisterParkingAdminController::class, 'create'])->name('register.parking');
    Route::post('/registrar-administrador', [RegisterParkingAdminController::class, 'store'])->name('register.parking.store');

    Route::get('/registrar-carro', RegisterCars::class)->name('register.cars');
});


