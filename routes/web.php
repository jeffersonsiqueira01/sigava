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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => 'sigava', 'middleware' => ['auth']], function () {
    Route::get('/', 'AppController@index')->name("main");
    Route::get('/minor', 'AppController@minor')->name("minor");
});


Route::get('/registrar', function(){
    return view('register.create');
} );