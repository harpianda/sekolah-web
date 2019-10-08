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
});

Route::get('/members', function () {
    return view('members.index');
});

// Route::get('/members', 'MembersController@index');
// Route::get('/members/create', 'MembersController@create');
// Route::get('/members/{member}', 'MembersController@show');
// Route::post('/members', 'MembersController@store');
// Route::delete('/members/{member}', 'MembersController@destroy');
// Route::get('/members/{member}/edit', 'MembersController@edit');
// Route::patch('/members/{member}', 'MembersController@update');

Route::resource('members','MembersController');
Route::resource('schools', 'SchoolsController');
