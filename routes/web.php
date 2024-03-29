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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['api', 'auth:api']], function() {
  Route::resource('tasks', 'TaskController', ['except' => ['show', 'create', 'edit']]);
  Route::put('tasks/{task}/toggle', 'TaskController@toggleStatus')->name('tasks.toggle');
  Route::get('activities', 'ActivityController@index')->name('activities');
  Route::get('activities/last60minutes', 'ActivityController@last60Minutes')->name('activities.last60minutes');
});
