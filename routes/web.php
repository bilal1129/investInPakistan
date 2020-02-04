<?php

Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::get('/event' , function(){
  return view('event');
})->name('event');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
