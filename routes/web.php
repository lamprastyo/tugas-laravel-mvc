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

route::get('/test', function () {
    return "OK";
});

route::get('/halo/{nama}', function ($nama) {
    return "Halo $nama";
});

route::get('/tes/{angka}', function ($angka) {
    return view('tes', ['angka'=>$angka]);
});

route::get('/form', 'RegisterController@form');
route::get('/sapa', 'RegisterController@sapa');
Route::post('/sapa', 'RegisterController@sapa_post');
