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
    Route::resource('/imovel', 'PropertyController');
    Route::resource('/contato', 'ContactController');
    Route::resource('/acabamento', 'AcabamentoController');
    Route::resource('/conservacao', 'ConservacaoController');

    Route::get('/parametros', 'AppController@parametro')->name('parametros');
    Route::get('/parametros/acabamento', 'AppController@acabamento')->name('acabamento');

    Route::any('/imovel/step-2/validate/{id}', 'PropertyController@storeMaintenance')->name('storeStep2');
    Route::any('/imovel/step-2/cadastrar/{id}', 'PropertyController@createMaintenance')->name('createStep2');

    Route::any('/imovel/step-3/validate/{id}', 'PropertyController@storePlus')->name('storeStep3');
    Route::any('/imovel/step-3/cadastrar/{id}', 'PropertyController@createPlus')->name('createStep3');
});

//Teste subindo atualizacoes
