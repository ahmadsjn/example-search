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

Route::get('/get-first-repeating/{string}', 'HomeController@firstRepeating')->name('firstRepeating');
Route::get('/get-bubble-sort', 'HomeController@bubbleSort')->name('bubbleSort');