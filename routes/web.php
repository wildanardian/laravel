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
    return view('welcome');
});

Route::get('/test/{nama}', function($hai){
    $awalan = $hai;
    return $awalan;
});

Route::get('/index', 'Controller@index');
Route::get('/register', 'Controller@register');
Route::post('/selamat-datang', 'Controller@selamat_datang');