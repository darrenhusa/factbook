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
    return view('home');
});

Route::view('/section01', 'section-01');
Route::view('/section02', 'section-02');
Route::view('/section03', 'section-03');
Route::view('/section04', 'section-04');
Route::view('/section05', 'section-05');
Route::view('/section06', 'section-06');
