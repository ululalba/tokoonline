<?php

use App\Models\pegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\pegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pegawai', [pegawaiController::class,'index']);
Route::get('/pegawai/create' , [pegawaiController::class,'create']);
Route::post('/pegawai/data_pegawai' , [pegawaiController::class,'data_pegawai']);
Route::get('/pegawai/{id}/Edit' , [pegawaiController::class,'edit']);
Route::put('/pegawai/{id}' , [pegawaiController::class,'update']);
Route::delete('/pegawai/{id}' , [pegawaiController::class,'destroy']);
