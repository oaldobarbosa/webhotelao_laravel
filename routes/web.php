<?php

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

//hospedagens
Route::get('/hospedagens', function(){
    return view('/hospedagem/hospedagens');
});
Route::get('/novahospedagem', function(){
    return view('/hospedagem/create_hospedagem');
});

//hospedes
Route::get('/hospedes', function(){
        return view('/hospede/hospedes');
});
Route::get('/novohospede', function(){
    return view('/hospede/create_hospede');
});

Route::get('/view', function(){
    return view('/hospede/view');
});

Route::get('/hospede/edit', function(){
    return view('/hospede/edit');
});


//quartos
Route::get('/quartos', function(){
    return view('quartos');
});

//historico
Route::get('/historico', function(){
    return view('historico');
});

