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

Route::get('/', 'LandingPageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/shop', 'ShopController@index')->middleware('auth');
Route::get('/shop/detail/{id}', 'ShopController@show')->middleware('auth');
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::get('/shop/category/{id}', 'ShopController@category')->middleware('auth');
Route::post('/cart/store', 'CartController@store')->middleware('auth');
Route::patch('/cart/{id}', 'CartController@update')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->middleware('auth');
