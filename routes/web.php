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
    //Admin Profile
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    //Dosen CRUD
    Route::get('/dosen/', 'Admin\DosenController@index')->name('admin.dosen.index');
    Route::get('/dosen/show/{id_dosen}', 'Admin\DosenController@show')->name('admin.dosen.show');
    Route::get('/dosen/create', 'Admin\DosenController@create')->name('admin.dosen.create');
    Route::post('/dosen/store','Admin\DosenController@store')->name('admin.dosen.store');
    Route::get('/dosen/edit/{id_dosen}', 'Admin\DosenController@edit')->name('admin.dosen.edit');
    Route::post('/dosen/update/{id_dosen}','Admin\DosenController@update')->name('admin.dosen.update');
    Route::post('/dosen/destroy/{id_dosen}', 'Admin\DosenController@destroy')->name('admin.dosen.destroy');
    //Departemen CRUD
    Route::get('/departemen/', 'Admin\DepartemenController@index')->name('admin.departemen.index');
//    Route::get('/departemen/show/{id_departemen}', 'Admin\DepartemenController@show')->name('admin.departemen.show');
    Route::get('/departemen/create', 'Admin\DepartemenController@create')->name('admin.departemen.create');
    Route::post('/departemen/store','Admin\DepartemenController@store')->name('admin.departemen.store');
    Route::get('/departemen/edit/{id_departemen}', 'Admin\DepartemenController@edit')->name('admin.departemen.edit');
    Route::post('/departemen/update/{id_departemen}','Admin\DepartemenController@update')->name('admin.departemen.update');
    Route::post('/departemen/destroy/{id_departemen}', 'Admin\DepartemenController@destroy')->name('admin.departemen.destroy');
    //Paper show admin
    Route::get('/paper/', 'Admin\PaperController@index')->name('admin.paper.index');
    Route::get('/paper/show/{id_paper}', 'Admin\PaperController@show')->name('admin.paper.show');

});
