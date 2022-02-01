<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'CartController@index')->name('index');
Route::get('/card', 'CartController@card')->name('card');
Route::get('/checkout', 'CartController@checkout')->name('checkout');
