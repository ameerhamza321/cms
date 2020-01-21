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
Route::get('articles-list', 'ArticleController@getArticlesList')->name('articles.list');
Route::get('article/add_article', 'ArticleController@add_article')->name('article.add_article');
Route::get('article/{id}/edit', 'ArticleController@edit')->name('article.edit');
Route::post('article/store', 'ArticleController@store')->name('article.store');
Route::put('article/update/{id}', 'ArticleController@update')->name('article.update');
Route::get('article/destroy/{id}', 'ArticleController@destroy')->name('article.delete');


//pages list
Route::get('Pages_list', 'Pages_listController@index')->name('Pages_list.index');
Route::get('Pages_list/{id}/edit', 'Pages_listController@edit')->name('Pages_list.edit');
Route::put('Pages_list/update/{id}', 'Pages_listcontroller@update')->name('Pages.list.update');
Route::get('Pages_list/destroy/{id}', 'pages_listController@destroy')->name('pages_list.delete');




//Pages routes
/*Route::get('/PagesMgt', 'PagesMgtController@index');*/
Route::get('Pagesmgt', 'PagesmgtController@index')->name('Pagesmgt.index');
Route::get('Pagesmgt/getdata', 'PagesmgtController@getdata')->name('Pagesmgt.getdata');
Route::post('Pagesmgt/postdata', 'PagesmgtController@postdata')->name('Pagesmgt.postdata');


//role routes
Route::resource('Role', 'RoleController');
Route::post('Role/update', 'RoleController@update')->name('Role.update');
Route::get('Role/destroy/{id}', 'RoleController@destroy');

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
