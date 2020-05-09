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
Route::post('contacts.create', 
'ContactsController@newContact'
)->name('newContact');

Route::get('contacts', 
'ContactsController@index'
)->name('contact');

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

  
Route::group(['prefix' => 'reservation'
], function () {    
    Route::get('/', 'BookingsController@index')->name('reservation');
    Route::post('/create', 'BookingsController@newBooking')->name('newBooking');
    Route::post('/edit', 'BookingsController@postEdit')->name('postEdit');
    Route::get('/edit/{id}', 'BookingsController@getEdit')->name('getEdit');
    Route::get('/delete/?{id}', 'BookingsController@deleteBooking')->name('deleteBooking');  
});

Route::get('/', function(){
    return view('index');
})->name('index'); 



Auth::routes(); //['verify' => true]

//Backend Routes
Route::group(['prefix' => 'admin',
        'middleware'=> ['auth','admin']
], function () {
    Route::get('/', function () {
        return view('admin/index');
    })->name('adminIndex');
    Route::resource('/food/','FoodsController');
});