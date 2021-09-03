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

//Connection with the file Welcome.blade.php  --homepage--
Route::get('/', function () {
    return view('welcome');
})->name('homepage');


Route::get('/user', function () {
    return view('user');
})->name('userpage');

Route::get('/product', function () {
    return view('product');
})->name('productpage');

