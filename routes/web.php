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
    return view('pages.trangchu');
});

Route::get('/lienhe', function () {
    return view('pages.lienhe');
});

Route::get('/bantinsuckhoe', function () {
    return view('pages.bantin');
});

Route::get('/tienich', function () {
    return view('pages.tienich');
});

Route::get('/tintuc', function () {
    return view('pages.tintuc');
});
Route::get('/testosterone-luteinizing', function () {
    return view('pages.testosterone-luteinizing');
});

Route::get('/sexking', function () {
    return view('pages.sexking');
});
Route::get('/manduc', function () {
    return view('pages.manduc');
});
Route::get('/muangay', function () {
    return view('pages.muangay');
});
Route::get('/dathang', function () {
    return view('pages.dathang');
});
