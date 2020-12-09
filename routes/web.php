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

Route::get('/test/index', 'TestController@index');

Route::get('/test/add', 'TestController@add');

Route::post('/test/send', 'TestController@send');

Route::get('/test/edit', 'TestController@edit');

Route::post('/test/edit', 'TestController@update');


Route::get('/systemkbn/index', 'SystemkbnController@index')->name('systemkbn_index');

Route::get('/systemkbn/add', 'SystemkbnController@add')->name('systemkbn_add');

Route::post('/systemkbn/insert', 'SystemkbnController@insert');

Route::get('/systemkbn/edit/{id}', 'SystemkbnController@edit')->name('systemkbn_edit');;

