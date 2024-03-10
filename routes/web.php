<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/page1', function () {
    return view('page1');
});
Route::get('/trangchu', function () {
    return view('trangchu');
});
Route::get('/gioithieu', function () {
    return view('gioithieu');
});
Route::get('/lienhe', function () {
    return view('lienhe');
});
Route::get('/ban', function () {
    return view('ban');
});
