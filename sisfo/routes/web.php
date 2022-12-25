<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\MuridsController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\ScoresController;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

// Route::get('/admin', function () {
//     return view('admin');
// });

// Route::get('/create', function () {
//     return view('murid.index');
// });

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);

Route::group(['middleware' => ['auth','cekuser:Admin']], function(){
    Route::resource('/admin', AdminController::class)->middleware('auth'); 

    Route::get('/murid', [MuridsController::class,'index'])->middleware('auth');
    Route::post('/murid', [MuridsController::class,'create'])->middleware('auth');
    Route::post('/murid', [MuridsController::class,'destroy'])->middleware('auth');
    
    Route::get('/murid/{id}/profile',[ScoresController::class,'profile'])->middleware('auth');
    Route::post('/murid/{id}/score',[ScoresController::class,'addScore'])->middleware('auth');
    
    Route::get('/teacher', [TeachersController::class,'index'])->middleware('auth');
    Route::post('/teacher', [TeachersController::class,'create'])->middleware('auth');
    Route::post('/teacher', [TeachersController::class,'destroy'])->middleware('auth');

    Route::get('/murid/satu', [MuridsController::class,'satu'])->middleware('auth');
    Route::get('/murid/dua', [MuridsController::class,'dua'])->middleware('auth');
});

Route::group(['middleware' => ['auth','cekuser:Guru']], function(){
    Route::get('/murid', [MuridsController::class,'index'])->middleware('auth');
    Route::post('/murid', [MuridsController::class,'create'])->middleware('auth');

    Route::resource('/teacher', TeachersController::class)->middleware('auth');
    Route::resource('/murid', MuridsController::class)->middleware('auth');
    Route::get('/murid/satu', [MuridsController::class,'satu'])->middleware('auth');
    Route::get('/murid/dua', [MuridsController::class,'dua'])->middleware('auth');
    Route::get('/murid/{id}/profile',[ScoresController::class,'profile'])->middleware('auth');
    Route::post('/murid/{id}/score',[ScoresController::class,'addScore'])->middleware('auth');
});

Route::group(['middleware' => ['auth','cekuser:Murid']], function(){
    // Route::resource('/admin', AdminController::class)->middleware('auth'); 
    Route::get('/murid', [MuridsController::class,'index'])->middleware('auth');
    Route::get('/murid/{id}/profile',[ScoresController::class,'profile'])->middleware('auth');
    // Route::resource('/teacher', TeachersController::class)->middleware('auth'); 
});



