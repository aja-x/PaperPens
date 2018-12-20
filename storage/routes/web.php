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
    return view('layouts.app');
});

Route::prefix('departemen')->group(function () {
    Route::get('/', 'DepartemenController@index')->name('departemen.index');
    Route::get('/create', 'DepartemenController@create')->name('departemen.create');
    Route::post('/store','DepartemenController@store')->name('departemen.store');
    Route::get('/edit/{id_departemen}', 'DepartemenController@edit')->name('departemen.edit');
    Route::post('/update/{id_departemen}','DepartemenController@update')->name('departemen.update');
    Route::post('/destroy/{id_departemen}', 'DepartemenController@destroy')->name('departemen.destroy');
});

Route::prefix('paper')->group(function () {
    Route::get('/', 'PaperController@index')->name('paper.index');
    Route::get('/show/{id_paper}', 'PaperController@show')->name('paper.show');
    Route::get('/create', 'PaperController@create')->name('paper.create');
    Route::post('/store','PaperController@store')->name('paper.store');
    Route::get('/edit/{id_paper}', 'PaperController@edit')->name('paper.edit');
    Route::post('/update/{id_paper}','PaperController@update')->name('paper.update');
    Route::post('/destroy/{id_paper}', 'PaperController@destroy')->name('paper.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
});
