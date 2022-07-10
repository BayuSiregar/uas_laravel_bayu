<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TerlambatController;
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
route::middleware(['auth'])->group(function(){
    /**
     * Router Untuk Siswa
     */
    route::get('/siswa', [SiswaController::class, 'index']);
    route::get('/siswa/create', [SiswaController::class, 'create']);
    route::post('/siswa/store',[SiswaController::class,'store']);
    route::get('/siswa/{id}/edit',[SiswaController::class,'edit']);
    route::put('/siswa/{id}',[SiswaController::class,'update']);
    route::delete('/siswa/{id}',[SiswaController::class,'destroy']);


    /**
     * 
     * Router Untuk Guru
     */
    route::get('/guru', [GuruController::class, 'index']);
    route::get('/guru/create', [GuruController::class, 'create']);
    route::post('/guru/store',[GuruController::class,'store']);
    route::get('/guru/{id}/edit',[GuruController::class,'edit']);
    route::put('/guru/{id}',[GuruController::class,'update']);
    route::delete('/guru/{id}',[GuruController::class,'destroy']);

    // router untuk Keterlambatan
    route::get('/terlambat', [TerlambatController::class, 'index']);
    route::get('/terlambat/create', [TerlambatController::class, 'create']);
    route::post('/terlambat/store',[TerlambatController::class,'store']);
    route::get('/terlambat/{id}/edit',[TerlambatController::class,'edit']);
    route::put('/terlambat/{id}',[TerlambatController::class,'update']);
    route::delete('/terlambat/{id}',[TerlambatController::class,'destroy']);

    route::get('/cetak/index',[PdfController::class,'index']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');