<?php

use Illuminate\Support\Facades\Route;


Route::get('/' , function(){
  return view('home');
})->name('home');


Route::get('/stanze', 'StanzaController@index')->name('index');

Route::get('/stanza/conf', 'StanzaController@create')->name('stanza-conf');
Route::post('/stanza/conf', 'StanzaController@store')->name('stanza-creazione');

Route::get('/stanza/{id}', 'StanzaController@show')->name('stanza-info');
