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

Route::get('/database', function () {
    return view('database');
});

Route::get('/organization', function () {
    return view('organization');
});

Route::get('/name', function () {
    return view('name');
});

Route::get('/work', function () {
    return view('work');
});