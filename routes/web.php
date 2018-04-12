<?php

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
//主页
Route::get('/','\App\Http\Controllers\IndexController@index');
//团队介绍
Route::get('/team/{lm?}','\App\Http\Controllers\TeamController@index');
Route::get('/teamshow/{id}','\App\Http\Controllers\TeamController@show');
//what we do 产品分类
Route::get('/prolm/{id?}','\App\Http\Controllers\ProlmController@index');
//产品展示
Route::get('/pro/','\App\Http\Controllers\ProController@index');
Route::get('/pro/{lm}','\App\Http\Controllers\ProController@prolm');
Route::get('/proshow/{id}','\App\Http\Controllers\ProController@show');
Route::get('/provideo/{id}','\App\Http\Controllers\ProController@video');

Route::get('/news/{lm?}','\App\Http\Controllers\NewController@index');
Route::get('/newshow/{id}','\App\Http\Controllers\NewController@show');



Route::get('/contact','\App\Http\Controllers\ContactController@index');
