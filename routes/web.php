<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuartoController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HospedeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HospedagemController;
use App\Http\Controllers\TesteController;
use App\Models\Hospedagem;
use GuzzleHttp\Middleware;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    //dashboard
    Route::get('/', [DashboardController::class, 'index']);

    //HOSPEDAGENS
    Route::get('/hospedagens', [HospedagemController::class, 'index']);
    Route::get('/hospedagens/create', [HospedagemController::class, 'create']);
    Route::post('/hospedagens', [HospedagemController::class, 'store']);
    Route::get('/hospedagens/{id}', [HospedagemController::class, 'show']);
    Route::get('hospedagens/checkout/{id}', [HospedagemController::class, 'edit']);
    Route::put('/hospedagens/update/{id}', [HospedagemController::class, 'update']);

    //chekout
    Route::get('/hospedagens/checkout/{id}', [HospedagemController::class, 'checkout']);

    //HOSPEDES
    Route::get('/hospedes', [HospedeController::class, 'index']);
    //create
    Route::get('/hospedes/create', [HospedeController::class, 'create']);
    //post create
    Route::post('/hospedes', [HospedeController::class, 'store']);

    Route::get('/hospedes/{cpf}', [HospedeController::class, 'show']);
    //delete
    Route::delete('/hospedes/{cpf}', [HospedeController::class, 'destroy']);
    //edit
    Route::get('/hospedes/edit/{cpf}', [HospedeController::class, 'edit']);
    Route::put('/hospedes/update/{cpf}', [HospedeController::class, 'update']);



    //QUARTOS
    Route::get('/quartos', [QuartoController::class, 'index'])->middleware('auth');
    Route::get('/quartos/edit/{id}', [QuartoController::class, 'edit']);
    Route::put('/quartos/update/{id}', [QuartoController::class, 'update']);
  
    Route::post('/quartos/search', [QuartoController::class, 'searchQuartos']);//ajax
    Route::post('/quartos/searchValor', [QuartoController::class, 'searchValor']);//ajax


    //historico
    Route::get('/historico', [HistoricoController::class, 'index']);
    Route::get('/historico/{id}', [HistoricoController::class, 'show']);


});