<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuartoController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HospedagemController;

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

//HOSPEDAGENS
Route::get('/hospedagens', [HospedagemController::class, 'index']);
    //create
Route::get('/hospedagens/create', [HospedagemController::class, 'create']);

Route::post('/hospedagens/create', [HospedeController::class, 'store']);




//chekout
Route::get('/hospedagens/checkout/{id}', [CheckoutController::class, 'index']);


//HOSPEDES
Route::get('/hospedes', [HospedeController::class, 'index']);
//create
Route::get('/hospedes/create', [HospedeController::class, 'create']);
//post create
Route::post('/hospedes', [HospedeController::class, 'store']);

Route::get('/hospedes/{id}', [HospedeController::class, 'show']);
//delete
Route::delete('/hospedes/{id}', [HospedeController::class, 'destroy']);
//edit
Route::get('/hospedes/edit/{id}', [HospedeController::class, 'edit']);
Route::put('/hospedes/update/{id}', [HospedeController::class, 'update']);


Route::get('/view', function(){
    return view('/hospede/view');
});

Route::get('/hospede/edit', function(){
    return view('/hospede/edit');
});

//QUARTOS
Route::get('/quartos', [QuartoController::class, 'index']);
Route::get('/quartos/edit/{id}', [QuartoController::class, 'edit']);
Route::put('/quartos/update/{id}', [QuartoController::class, 'update']);


//historico
Route::get('/historico', [HistoricoController::class, 'index']);

