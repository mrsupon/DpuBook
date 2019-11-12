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
    return view('page1');
});

Route::get('/page1', 'RouteController@showPage1')->name('page1');  

Route::get('/page2', 'RouteController@showPage2')->name('page2'); 

Route::get('/page3', 'RouteController@showPage3')->name('page3'); 