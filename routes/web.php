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
    return view('master-layout');
});

Route::get('/sanpham', function () {
    return view('pages.sanpham');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/trangchu', function () {
    return view('pages.trangchu');
});