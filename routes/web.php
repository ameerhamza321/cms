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



Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('/', function () {
//    return view('backend.dashboard');
//});
Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');


//Article Route
Route::get('/article', 'ArticleController@index')->name('article');
Route::get('articles-list', [\App\Http\Controllers\ArticleController::class, 'getArticlesList'])->name('articles.list');
//Route::get('delete-article', [\App\Http\Controllers\ArticleController::class, 'deleteArticle'])->name('delete.article');
Route::get('article/add_article', 'ArticleController@add_article')->name('article.add_article');
Route::get('article/{id}/edit', 'ArticleController@edit')->name('article.edit');
Route::post('article/store', 'ArticleController@store')->name('article.store');
Route::post('article/update', 'ArticleController@update')->name('article.update');
Route::get('article/destroy/{id}', 'ArticleController@destroy');


//pages list
Route::get('Pages_list', 'Pages_listController@index')->name('Pages_list.index');
Route::get('Pages_list/{id}/edit', 'Pages_listController@edit')->name('Pages_list.edit');
Route::post('pages_list/update', 'pages_listController@update')->name('pages_list.update');
Route::get('Pages_list/destroy/{id}', 'pages_listController@destroy')->name('pages_list.delete');




//Pages routes
/*Route::get('/PagesMgt', 'PagesMgtController@index');*/
Route::get('Pagesmgt', 'PagesmgtController@index')->name('Pagesmgt.index');
Route::get('Pagesmgt/getdata', 'PagesmgtController@getdata')->name('Pagesmgt.getdata');
Route::post('Pagesmgt/postdata', 'PagesmgtController@postdata')->name('Pagesmgt.postdata');




//Pages
Route::resource('Pages', 'PagesController');
Route::post('Pages/update', 'PagesController@update')->name('Pages.update');
Route::get('Pages/destroy/{id}', 'PagesController@destroy');



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
Route::get('Users', 'UsersController@index')->name('Users.index');
Route::get('Users/edit', 'UsersController@edit')->name('User.edit');
Route::get('Users/destroy', 'UsersController@destroy')->name('User.destroy');
Route::put('Users/update/', 'UsersController@update')->name('User.update');

