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

Route::get('/', 'AuthController@authCheckWelcome');

Route::get('/logout', 'AuthController@logout');

Route::get('/login', 'AuthController@authCheckLogin');
Route::post('/login', 'AuthController@login');

Route::get('/register', 'AuthController@authCheckRegister');
Route::post('/register', 'AuthController@register');

Route::get('/home', 'ProductController@showAllItem');

Route::get('/product/{id}', 'ProductController@showItem')->middleware('member');

Route::post('/addToCart/{id}', 'CartController@addToCart')->middleware('member');

Route::get('/cart', 'CartController@showCart')->middleware('member');
Route::get('/cart/{id}', 'CartController@checkout')->middleware('member');

Route::post('/addToCart/{id}', 'CartController@addToCart')->middleware('member');

Route::get('/history', 'CartController@showHistory')->middleware('member');