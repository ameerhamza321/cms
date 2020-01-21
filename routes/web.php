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


//frontend view
Route::get('/', 'frontend\FrontController@index')->name('/');

//Route::get('/login2', function () {
//    return view('auth.login2');
//});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');


//Article Route
Route::get('/article', 'ArticleController@index')->name('article');
Route::get('articles-list', [\App\Http\Controllers\ArticleController::class, 'getArticlesList'])->name('articles.list');
Route::get('article/add_article', 'ArticleController@add_article')->name('article.add_article');
Route::get('article/{id}/edit', 'ArticleController@edit')->name('article.edit');
Route::post('article/store', 'ArticleController@store')->name('article.store');
Route::put('article/update/{id}', 'ArticleController@update')->name('article.update');
Route::get('article/destroy/{id}', 'ArticleController@destroy')->name('article.delete');

//pages list
Route::get('Pages_list', 'Pages_listController@index')->name('Pages_list.index');
Route::get('Pages_list/getdata', 'Pages_listController@getdata')->name('Pages_list.getdata');


//Pages routes
/*Route::get('/PagesMgt', 'PagesMgtController@index');*/
Route::get('PagesMgt', 'PagesMgtController@index')->name('PagesMgt.index');
Route::get('PagesMgt/getdata', 'PagesMgtController@getdata')->name('PagesMgt.getdata');
Route::post('PagesMgt/postdata', 'PagesMgtController@postdata')->name('PagesMgt.postdata');


//role routes
Route::get('Role', 'RoleController@index')->name('Role.index');
Route::get('Role/getdata', 'RoleController@getdata')->name('Role.getdata');
Route::post('Role/postdata', 'RoleController@postdata')->name('Role.postdata');

//slider route
Route::get('slider', 'SliderController@index')->name('slider.index');
Route::get('slider/create', 'SliderController@create')->name('slider.create');
Route::get('edit/{id}', 'SliderController@edit');
Route::put('update/{id}', 'SliderController@update');
Route::post('slider/store', 'SliderController@store')->name('slider.store');

//user routes

Route::resource('Users' , 'UsersController');
Route::get('Users/{User}/edit', 'UsersController@edit')->name('User.edit');
Route::put('Users/{User}', 'UsersController@update')->name('User.update');
Route::get('Users/{User}', 'UsersController@destroy')->name('User.destroy');


//show articles
Route::get('/blog', 'frontend\ShowArticleController@index')->name('show_article');
Route::get('/blog/{articles}', 'frontend\ShowArticleController@show')->name('view_article');
