<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@homeFunction')->name('home');

Route::get('/pilot/{id}', 'HomeController@pilotFunction')->name('pilot');

Route::get('/brand/{id}', 'HomeController@brandFunction')->name('brand');

Route::get('/create', 'HomeController@createFunction')->name('create');

Route::post('/create/store', 'HomeController@storeFunction')->name('store');
