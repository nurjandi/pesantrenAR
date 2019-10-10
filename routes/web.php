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
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

Route::resource('admin', 'userController',[
	'except' => ['create', 'show']
]);
Route::post('/admin/login','userController@login')->name('admin.login');
Route::get('/logout','userController@logout')->name('logout');
Route::resource('pesantren', 'pesantrenController',[
	'except' => ['create', 'show']
]);