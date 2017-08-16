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
    return view('welcome');
});

//Route::get('/test', 'TestController@index');

//Route::get('/test/users', 'TestController@getUsers');


Route::group(['prefix' => 'test'], function() {
	Route::get('/', 'TestController@index');
	Route::get('/users', 'TestController@getUsers');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/', 'AdminController@index');
	//Route::post('/', 'Admin2Controller@index');
});

//Route::get('user/{id?}', function($id = null) {
//	return 'User ' . $id;
//});

//Route::get('user/{id?}', 'TestController@user');


//Route::get('user/{id?}', 'TestController@user')->name('getUser');

Route::get('user/{id}/{name}', 'TestController@user')->name('getUser');





Route::get('/', 'MainController@index')->name('site.main.index');

Route::get('/blog', 'MainController@blog')->name('site.main.blog');
Route::get('/post', 'MainController@post')->name('site.main.post');
Route::get('/folio', 'MainController@folio')->name('site.main.folio');



