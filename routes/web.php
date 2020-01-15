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
    return view('index');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/areas', function () {
    return view('areas');
});
Route::get('/transformacion', function () {
    return view('transformacion');
});
