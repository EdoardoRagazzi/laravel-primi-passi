<?php

use Illuminate\Support\Facades\Route;

require_once 'user.php';
require_once 'product.php';


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
    $data = new User('Edo','Ragazzi', 0 , 70);
    //return view('welcome');
    //return view('welcome', ['data' => $data ]);
    //return view('welcome', compact( 'data') );
    return view('welcome')->with('utente', $data );
})->name('homepage');


Route::get('/user', function () {
    $data = new User('Edo','Ragazzi', 0 , 50 );
    return view('user')->with('utente', $data );
})->name('userpage');

Route::get('/product', function () {
    $data = new Product('https://source.unsplash.com/random', 'Playstation' , 300 , 'console game' );
    return view('product')->with('product', $data);
})->name('productpage');


