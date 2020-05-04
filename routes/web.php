<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
})->name('home');

Route::get('contact', function () {
    return view('home');
})->name('contactUs');
Route::get('menu', function () {
    return view('home');
})->name('menu');
Route::get('book', function () {
    return view('home');
})->name('book');
Route::get('order', function () {
    return view('home');
})->name('order');
Route::get('about', function () {
    return view('home');
})->name('about');
Auth::routes(); //['verify' => true]
Route::get('/', 'HomeController@index')->name('home'); 

