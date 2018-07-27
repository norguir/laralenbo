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
    return view('index');
})->name('index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('admin/users', 'Admin\\UsersController', ['as' => 'admin']);
// Route::resource('admin/ious', 'Admin\\IousController', ['as' => 'admin']);
//Route::resource('ious', 'IouController');

Route::get('screens', function () { return view('screens'); })->name('screens');

Route::get('/ious/new', 'IouController@new_')->name('ious-new');
Route::get('test', function () { return view('test'); })->name('test');
Route::get('cgus', function () { return view('cgus'); })->name('cgus');
Route::get('about', function () { return view('about'); })->name('about');

