<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Ashiap suwun
*/

/* Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::post('/test','AuthController@tampil');

Route::get('/index', 'HomeController@index'
);

Route::get('/form', 'AuthController@form');
*/
/*
Route::get('/admin', function () {
    return view('admin.master');
});

Route::get('/',function() {
    return view('admin.data');
});

Route::get('/data-tables',function() {
    return view('admin.datatables');
});
*/

Route::get('/pertanyaan/create','PertanyaanController@create');

Route::post('/pertanyaan','PertanyaanController@store');

Route::get('/pertanyaan','PertanyaanController@index');

Route::get('/pertanyaan/{id}','PertanyaanController@show');

Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');

Route::put('/pertanyaan/{id}','PertanyaanController@update');

Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');