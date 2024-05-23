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
    return view('index', ["title" => "Beranda"]);
});

Route::get('/video', function () {
    return view('video', ["title" => "Video", "active" => "video"]);
});
Route::get('/3d_explore', function () {
    return view('3d_explorer', ["title" => "3D Explorer", "active" => "3d"]);
});
Route::get('/sejarah', function () {
    return view('sejarah', ["title" => "Sejarah", "active" => "sejarah"]);
});
Route::get('/galery', function () {
    return view('galery', ["title" => "Galery", "active" => "galery"]);
});
