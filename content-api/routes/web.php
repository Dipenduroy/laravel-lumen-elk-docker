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

Route::get('/', function () {
  \Log::error('Something not so sweet went wrongssssd niki', ['foo' => 'bar','dip'=>'roy']);
    return view('welcome');
});
