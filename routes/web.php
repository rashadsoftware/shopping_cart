<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ShopCartController@index')->name('index');
Route::get('/add-to-cart/{id}', 'ShopCartController@addToCart')->name('add_to_cart');
Route::get('/card', 'ShopCartController@card')->name('card');
Route::patch('update-cart', 'ShopCartController@updateToCart')->name('update_cart');
Route::delete('remove-from-cart', 'ShopCartController@removeFromCart')->name('remove_from_cart');
Route::get('/checkout', 'ShopCartController@checkout')->name('checkout');
