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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/', [
    'as' => 'portfolio',
    'uses' => 'ContactsController@store'
]);

// Route::get('/', [
//     'as' => 'portfolio',
//     'uses' => 'ContactsController@create'
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/projet/insert','ProjetsController');
Route::post('projet/insert', [
    'as' => 'projetinsert',
    'uses' => 'ProjetsController@store'
]);
Route::get('projet/read', 'ProjetsController@index');
Route::delete('projet/delete/{id}', 'ProjetsController@destroy');
Route::post('projet/edit/{id}','ProjetsController@update');

Route::get('messages/read', 'ContactsController@index');
Route::get('messages/search', 'ContactsController@show');