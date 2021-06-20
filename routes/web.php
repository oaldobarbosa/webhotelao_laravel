<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuartoController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\DashboardController;

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

//dashboard
Route::get('/', [DashboardController::class, 'index']);

//hospedagens
Route::get('/hospedagens', function(){
    return view('/hospedagem/hospedagens');
});
Route::get('/novahospedagem', function(){
    return view('/hospedagem/create_hospedagem');
});

//hospedes
Route::get('/hospedes', [HospedeController::class, 'index']);
Route::get('/hospedes/create', [HospedeController::class, 'create']);
Route::post('/hospedes', [HospedeController::class, 'store']);
Route::get('/hospedes/{id}', [HospedeController::class, 'show']);
Route::delete('/hospedes/{id}', [HospedeController::class, 'destroy']);


Route::get('/view', function(){
    return view('/hospede/view');
});

Route::get('/hospede/edit', function(){
    return view('/hospede/edit');
});

//quartos
Route::get('/quartos', [QuartoController::class, 'index']);

//historico
Route::get('/historico', [HistoricoController::class, 'index']);

