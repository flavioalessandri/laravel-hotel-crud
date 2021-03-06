<?php

use Illuminate\Support\Facades\Route;


Route::get('/' , function(){
  return view('home');
})->name('home');


Route::get('/stanze', 'StanzaController@index')->name('stanze.index');

Route::get('/stanza/conf', 'StanzaController@create')->name('stanza-conf');
Route::post('/stanza/conf', 'StanzaController@store')->name('stanza-creazione');

Route::get('/stanza/{id}', 'StanzaController@show')->name('stanza-info');

Route::get('/pagamenti', 'PagamentoController@index')->name('pagamenti.index');
Route::get('pagamenti/delete/{id}', 'PagamentoController@delete')->name('pagamenti.delete');

Route::get('pagamenti/edit/{id}', 'PagamentoController@edit')->name('pagamenti.edit');
Route::post('pagamenti/update/{id}', 'PagamentoController@update')->name('pagamenti.update');
