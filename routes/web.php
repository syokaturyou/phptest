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

// Route::get('/calculate', 'CalculateController@getcalc')->name('calculate');

Route::get('/calculate', function () {
    return view('calculate/num');
});

// Route::get('/crud', 'CrudController@getIndex');
Route::get('/crud', function () {
    return view('crud/index');
});
// Route::get('/boot_template', 'Boot_templateController@getIndex');

Route::get('/user','UserController@getindex')->name('user');

// Route::get('/user', function () {
//     return view('user/index');
// });