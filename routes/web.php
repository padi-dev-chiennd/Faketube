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
Route::get('/channels', 'ChannelController@index');
Route::get('/channels/create', 'ChannelController@create');
Route::post('/channels', 'ChannelController@store');
Route::get('/channels/{id}/edit', 'ChannelController@edit');
Route::put('/channels/{id}', 'ChannelController@update');
Route::delete('/channels/{id}', 'ChannelController@destroy');
