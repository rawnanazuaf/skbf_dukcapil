<?php

use App\Http\Controllers\DevController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('authentication.login');
});

Route::get('/registerUser', function () {
    return view('authentication.register');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dev', [DevController::class,'index']);
Route::post('/dev/post', [DevController::class,'postDev']);
Route::get('/cariProvinsi', [DevController::class,'cariProvinsi']);
Route::get('/cariKabupatenKota', [DevController::class,'cariKabupatenKota']);
Route::get('/cariKecamatan', [DevController::class,'cariKecamatan']);
Route::get('/cariKelurahan', [DevController::class,'cariKelurahan']);
Route::get('/updateLokasi', [DevController::class,'updateLokasi']);

Route::get('/production', [ProductionController::class,'index']);
Route::POST('/production/post', [ProductionController::class,'postPro']);
Route::POST('/production/history', [ProductionController::class,'postHistory']);
Route::get('/cariProvinsi', [ProductionController::class,'cariProvinsi']);
Route::get('/cariKabupatenKota', [ProductionController::class,'cariKabupatenKota']);
Route::get('/cariKecamatan', [ProductionController::class,'cariKecamatan']);
Route::get('/cariKelurahan', [ProductionController::class,'cariKelurahan']);
Route::get('/updateLokasi', [ProductionController::class,'updateLokasi']);

Route::get('/profile', [UserController::class,'index']);
Route::put('/profile/{id}/edit', [UserController::class,'edit']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
