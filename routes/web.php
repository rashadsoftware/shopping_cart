<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ShopCartController@index')->name('index');
Route::get('/card', 'ShopCartController@card')->name('card');
Route::get('/checkout', 'ShopCartController@checkout')->name('checkout');
