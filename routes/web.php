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

Route::prefix('explore')->group(function () {
    Route::get('/topic/{id_topic}', 'ExploreController@PaperByTopic')->name('explore.topic');
    Route::get('/year/{year}', 'ExploreController@PaperByYear')->name('explore.year');

});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@getSearch')->name('search.cari');
Route::post('/login', function () {
    return redirect()->route('admin.index');
})->name('login');


Route::prefix('admin')->group(function () {
    //Admin Profile
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/show', 'Admin\AdminController@show')->name('admin.show');
    Route::get('/create', 'Admin\AdminController@create')->name('admin.create');
    Route::post('/store','Admin\AdminController@store')->name('admin.store');
    Route::get('/edit/{id_admin}', 'Admin\AdminController@edit')->name('admin.edit');
    Route::post('/update/{id_admin}','Admin\AdminController@update')->name('admin.update');
    Route::post('/destroy/{id_admin}', 'Admin\AdminController@destroy')->name('admin.destroy');

    //Dosen CRUD
    Route::get('/dosen/', 'Admin\DosenController@index')->name('admin.dosen.index');
    Route::get('/dosen/show/{id_dosen}', 'Admin\DosenController@show')->name('admin.dosen.show');
    Route::get('/dosen/create', 'Admin\DosenController@create')->name('admin.dosen.create');
    Route::post('/dosen/store','Admin\DosenController@store')->name('admin.dosen.store');
//    Route::get('/dosen/edit/{id_dosen}', 'Admin\DosenController@edit')->name('admin.dosen.edit');
//    Route::post('/dosen/update/{id_dosen}','Admin\DosenController@update')->name('admin.dosen.update');
    Route::post('/dosen/destroy/{id_dosen}', 'Admin\DosenController@destroy')->name('admin.dosen.destroy');

    //Editor CRUD
    Route::get('/editor/', 'Admin\EditorController@index')->name('admin.editor.index');
    Route::get('/editor/show/{id_editor}', 'Admin\EditorController@show')->name('admin.editor.show');
    Route::get('/editor/create', 'Admin\EditorController@create')->name('admin.editor.create');
    Route::post('/editor/store','Admin\EditorController@store')->name('admin.editor.store');
    Route::get('/editor/edit/{id_editor}', 'Admin\EditorController@edit')->name('admin.editor.edit');
    Route::post('/editor/update/{id_editor}','Admin\EditorController@update')->name('admin.editor.update');
    Route::post('/editor/destroy/{id_editor}', 'Admin\EditorController@destroy')->name('admin.editor.destroy');

    //Departemen CRUD
    Route::get('/departemen/', 'Admin\DepartemenController@index')->name('admin.departemen.index');
    Route::get('/departemen/create', 'Admin\DepartemenController@create')->name('admin.departemen.create');
    Route::post('/departemen/store','Admin\DepartemenController@store')->name('admin.departemen.store');
    Route::get('/departemen/edit/{id_departemen}', 'Admin\DepartemenController@edit')->name('admin.departemen.edit');
    Route::post('/departemen/update/{id_departemen}','Admin\DepartemenController@update')->name('admin.departemen.update');
    Route::post('/departemen/destroy/{id_departemen}', 'Admin\DepartemenController@destroy')->name('admin.departemen.destroy');

    //Paper show admin
    Route::get('/paper/', 'Admin\PaperController@index')->name('admin.paper.index');
    Route::get('/paper/show/{id_paper}', 'Admin\PaperController@show')->name('admin.paper.show');

    //Login route
//    Route::post('/dosen/login', 'Admin\Auth\LoginController@login')->name('dosen.login')->middleware('guest:dosen');
//    Route::get('/paper/show/{id_paper}', 'Admin\PaperController@show')->name('admin.paper.show');
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
