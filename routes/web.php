<?php
use Illuminate\Http\Request;
use App\VPaperTopicModel;
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
Route::get ( '/', function () {
    return view ( 'welcome' );
} );
/*Route::prefix('search')->group(function () {
    Route::get('/search', 'SearchController@Search')->name('search.search');
});*/

    Route::get('search/', 'SearchController@getSearch')->name('search.cari');


//
