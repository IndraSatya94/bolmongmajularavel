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

Route::get('/', function () {
    return view('template/index');
});

Route::get('/dinas', function () {
    return view('template/detail/dinas');
});

Route::get('/login', function () {
    return view('pengguna/login');
});

Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');