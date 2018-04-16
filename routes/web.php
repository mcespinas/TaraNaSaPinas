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
/*
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('agencies', 'AgencyController');
Route::resource('deals', 'DealsController');
Route::resource('bookings', 'BookingsController');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Messaging route
Route::get('/messages', 'HomeController@index')->name('message');


//Messaging
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

