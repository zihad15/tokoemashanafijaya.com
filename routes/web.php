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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/perhiasan-cincin', function () {
    return view('galeries.cincin');
});

Route::get('/perhiasan-gelang', function () {
    return view('galeries.gelang');
});

Route::get('/perhiasan-kalung', function () {
    return view('galeries.kalung');
});

Route::get('/perhiasan-anting', function () {
    return view('galeries.anting');
});

Route::get('/emas-batangan', function () {
    return view('galeries.emasbatangan');
});

Route::get('/perhiasan-liontin', function () {
    return view('galeries.liontin');
});

Route::get('/cincin-cowok', function () {
    return view('galeries.cincincowok');
});