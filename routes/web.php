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


//Route::get('/', function () {
//    return view('backend.dashboard');
//});
Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');


//Article Route
Route::get('/article', 'ArticleController@index')->name('article');
Route::get('articles-list', [\App\Http\Controllers\ArticleController::class, 'getArticlesList'])->name('articles.list');
Route::post('delete-article', [\App\Http\Controllers\ArticleController::class, 'deleteArticle'])->name('delete.article');
Route::post('article/store', 'ArticleController@store')->name('article.store');


//pages list
Route::get('Pages_list', 'Pages_listController@index')->name('Pages_list.index');
Route::get('Pages_list/getdata', 'Pages_listController@getdata')->name('Pages_list.getdata');

/*Pages routes
/*Route::get('/PagesMgt', 'PagesMgtController@index');*/
Route::get('PagesMgt', 'PagesMgtController@index')->name('PagesMgt.index');
Route::get('PagesMgt/getdata', 'PagesMgtController@getdata')->name('PagesMgt.getdata');
Route::post('PagesMgt/postdata', 'PagesMgtController@postdata')->name('PagesMgt.postdata');


//role routes
Route::get('Role', 'RoleController@index')->name('Role.index');
Route::get('Role/getdata', 'RoleController@getdata')->name('Role.getdata');
Route::post('Role/postdata', 'RoleController@postdata')->name('Role.postdata');


//user routes
Route::get('Users', 'UsersController@index')->name('Users.index');
Route::get('Users/edit', 'UsersController@edit')->name('User.edit');
Route::get('Users/destroy', 'UsersController@destroy')->name('User.destroy');
Route::put('Users/update/', 'UsersController@update')->name('User.update');

