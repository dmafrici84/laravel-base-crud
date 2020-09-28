<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function(){return view('home');}) -> name('home');

// PAGANTE
Route::get('/paganti', 'PaganteController@index') -> name('paganti.index');

// PAGAMENTI
Route::get('/pagamenti', 'PagamentoController@index') -> name('pagamenti.index');
Route::get('/pagamento/{id}', 'PagamentoController@show') -> name('pagamento.show');

Route::get('/pagamento/edit/{id}', 'PagamentoController@edit') -> name('pagamento.edit');
Route::post('/pagamento/update/{id}', 'PagamentoController@update') -> name('pagamento.update');

Route::get('/pagamento/delete/{id}', 'PagamentoController@destroy') -> name('pagamento.destroy');
