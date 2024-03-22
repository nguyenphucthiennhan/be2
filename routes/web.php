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
//êxe 1
Route::get('/{name}', function ($name) {
    return view($name);
});

// Route::get('/trangchu', function () {
//     return view('trangchu');
//  });
// Route::get('/gioithieu', function () {
//     return view('gioithieu');
// });
// Route::get('/lienhe', function () {
//     return view('lienhe');
// });
// Route::get('/ban', function () {
//     return view('ban');
// });

//exe 2
// $routes = [
//     '/' => ['view' => 'welcome', 'name' => 'Home'],
//     '/page1' => ['view' => 'page1', 'name' => 'page1'],
//     '/trangchu' => ['view' => 'trangchu', 'name' => 'trangchu'],
//     '/gioithieu' => ['view' => 'gioithieu', 'name' => 'gioithieu'],
//     '/lienhe' => ['view' => 'lienhe', 'name' => 'lienhe'],
//     '/ban' => ['view' => 'ban', 'name' => 'ban'],
// ];
// foreach ($routes as $url => $data) {
//     Route::view($url, $data['view'])->name('page.' . $data['name']);
// }



Route::post('/demo', function () {
    return view('demo');
})->middleware('checkCredentials');
