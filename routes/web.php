<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

Route::resource('book', BookController::class);

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/calculate', 'CalculateController@getcalc')->name('calculate');

Route::get('/calculate', function () {
    return view('calculate/num');
});

// Route::get('/crud', 'CrudController@getIndex');
Route::get('/crud', function () {
    return view('crud/index');
});
// Route::get('/boot_template', 'Boot_templateController@getIndex');

Route::get('/boot_template', function () {
    return view('boot_template/index');
});

Route::get('/users','UserController@getindex')->name('users');
Route::get('/user/{id}','UserController@getshow')->name('user.show');
Route::get('/users/create','UserController@create')->name('users.create');
Route::get('/users/store','UserController@store')->name('users.store');
Route::post('/users/store','UserController@store')->name('users.store');
Route::get('/users/{id}/edit','UserController@edit')->name('user.edit');
// Route::get('/users/store','UserController@store')->name('users.store');
// Route::get('/user', function () {
//     return view('user/index');
// });

// Route::get('/student/list','StudentController@getlist')->name('student');
// Route::get('/student/list', function () {
//     return view('student/list');
// });

// Route::get('/student/list','StudentController@getlist')->name('student.list');
// Route::get('/student/{id}/edit','StudentController@getedit')->name('student.edit');
// Route::get('/student/edit/{id}', 'StudentController@getedit')->name('student.edit');

// Route::resource('student', BookController::class);


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

// Route::prefix('contents')->group(function() {
//     Route::get('/list', 'ContentController@list')->name('contents.list');
//     Route::get('/create', 'ContentController@create')->name('contents.create');
//     Route::get('/update/{content_id}', 'ContentController@update')->name('contents.update');
//     Route::get('/delete/{content_id}', 'ContentController@delete')->name('contents.delete');
//     Route::post('/save', 'ContentController@save')->name('contents.save');
// });

Route::prefix('contents')->group(function() {
  Route::get('/list', [ContentController::class, 'list'])->name('contents.list');
  Route::get('/create', [ContentController::class, 'create'])->name('contents.create');
  Route::get('/update/{content_id}', [ContentController::class, 'update'])->name('contents.update');
  Route::get('/delete/{content_id}', [ContentController::class, 'delete'])->name('contents.delete');
  Route::post('/save', [ContentController::class, 'save'])->name('contents.save');
});
