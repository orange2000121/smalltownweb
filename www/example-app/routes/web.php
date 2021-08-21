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
Route::get('/smalleye', function () {
    return view('smalleye');
});
Route::get('/osmanthusalley', function () {
    return view('osmanthusAlley');
});
