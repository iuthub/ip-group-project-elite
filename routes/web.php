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

/*Route::get('/', function () {
    return view('index');
})->name('index');*/
Route::get('reservation', function () {
    return view('reservation');
})->name('reservation');
Route::get('contact', function () {
    return view('contacts');
})->name('contact');
Route::get('menu', function () {
    return view('menu');
})->name('menu');
Route::get('order', function () {
    return view('home');
})->name('order');
Route::get('about', function () {
    return view('aboutUs');
})->name('about');
Route::get('book', function () {
    return view('aboutUs');
})->name('book');
Auth::routes(); //['verify' => true]
Route::get('/', 'HomeController@index')->name('index'); 
//Backend Routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin/index');
    });
    Route::get('food', function () {
        return view('admin/food');
    });
});