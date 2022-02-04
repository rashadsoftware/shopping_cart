<?php

use Illuminate\Support\Facades\Route;

// index page
Route::get('/', 'ShopCartController@index')->name('index');
Route::post('/add-to-cart', 'ShopCartController@addToCart')->name('add_to_cart');

// card page
Route::get('/card', 'ShopCartController@card')->name('card');
Route::patch('update-cart', 'ShopCartController@updateToCart')->name('update_cart');
Route::delete('remove-from-cart', 'ShopCartController@removeFromCart')->name('remove_from_cart');

// checkout page
Route::get('/checkout', 'ShopCartController@checkout')->name('checkout');

// customer page
Route::get('/integrations', 'IntegrationController@index')->name('integrations');
