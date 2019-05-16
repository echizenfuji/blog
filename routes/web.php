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

// Route::get('/', function () {
//     return view('welcome');
//     // return 'hello world';
// });

// http://127.0.0.1:8000/


Route::get('/', 'ArticleController@index');
// Route::get('articles', 'ArticleController@index');
// http://127.0.0.1:8000/articles

Route::get('article/{article}', 'ArticleController@show');


Route::prefix('admin')->middleware('auth')->group(function (){

    Route::get('article', 'Admin\ArticleController@index');
    Route::get('article/create', 'Admin\ArticleController@create');
    Route::post('article', 'Admin\ArticleController@store');
    Route::delete('article/{article}', 'Admin\ArticleController@delete')->name('admin.article.delete');
    // name('admin.article.delete') 設定網頁的別名, 這樣要改網址就不用到每個blade裡改了,
    // 如改這邊的'tobey/{article}'即可
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('admin/article', 'Admin\ArticleController@index');

// Route::get('resources/views/layouts/');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
