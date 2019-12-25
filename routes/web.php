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

/*Route::get('/', function () {
    return view('backend.dashboard');
});*/

/*Pages routes
/*Route::get('/PagesMgt', 'PagesMgtController@index');*/
Route::get('PagesMgt', 'PagesMgtController@index')->name('PagesMgt');
Route::get('PagesMgt/getdata', 'PagesMgtController@getdata')->name('PagesMgt.getdata');
Route::post('PagesMgt/postdata', 'PagesMgtController@postdata')->name('PagesMgt.postdata');


//role routes
Route::get('Role', 'RoleController@index')->name('Role');
Route::get('Role/getdata', 'RoleController@getdata')->name('Role.getdata');
Route::post('Role/postdata', 'RoleController@postdata')->name('Role.postdata');
