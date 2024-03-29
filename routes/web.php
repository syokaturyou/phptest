<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('book', 'BookController');

Route::get('/crud', function () {
    return view('crud/index');
});

Route::get('/users','UserController@index')->name('users');
Route::get('/user/show/{id}','UserController@show')->name('user.show');
Route::get('/user/create','UserController@create')->name('user.create');
Route::get('/user/store','UserController@store')->name('user.store');
Route::post('/user/store','UserController@store')->name('user.store');
Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
Route::get('/user/update/{id}','UserController@update')->name('user.update');
Route::post('/user/update/{id}','UserController@update')->name('user.update');
Route::get('/user/destroy/{id}','UserController@destroy')->name('user.destory');
Route::post('/user/destroy/{id}','UserController@destroy')->name('user.destroy');

Route::group(['prefix'=>'student'], function () {
  Route::get('index', 'StudentController@index')->name('student.index');
  Route::get('create', 'StudentController@create')->name('student.create');
  Route::get('store', 'StudentController@store')->name('student.store');
  Route::post('store', 'StudentController@store')->name('student.store');
  Route::get('show/{id}', 'StudentController@show')->name('student.show');
  Route::get('edit/{id}', 'StudentController@edit')->name('student.edit');
  Route::get('update/{id}', 'StudentController@update')->name('student.update');
  Route::post('update/{id}', 'StudentController@update')->name('student.update');
  Route::get('destroy/{id}', 'StudentController@destroy')->name('student.destroy');
  Route::post('destroy/{id}', 'StudentController@destroy')->name('student.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
