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


Route::get('/users', 'user@index')->name('users.index');

//create
Route::get('/users/create', 'user@create')->name('users.create');

//store
Route::post('/users', 'user@store')->name('users.store');
Route::get('/users/{id}', 'user@show')->name('users.show');
Route::delete('/users/{id}', 'user@destroy')->name('users.destroy');

// edit
Route::get('/users/{id}/edit', 'user@edit')->name('users.edit');

// update
Route::put('/users/{id}', 'user@update')->name('users.update');