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


//route blog
Route::get('/', 'blogController@home')->middleware('auth');
Route::get('contact', 'blogController@contact')->middleware('auth');
Route::get('/calendar','calendarController@index')->middleware('auth');
Route::get('/events/{date}','calendarController@events')->middleware('auth');
Route::get('/events/tambah/{date}','calendarController@tambah')->middleware('auth');
Route::post('/events/insert','calendarController@insert')->middleware('auth');


Route::post('/events/update/{mark}','calendarController@update')->middleware('auth');

Route::get('/events/delete/{id}/{date}','calendarController@delete')->middleware('auth');
Route::get('/delete/{id}/{date}','calendarController@delete')->middleware('auth');
Route::get('edit/{id}/{mark}','calendarController@edit')->middleware('auth');
Route::get('events/edit/{id}/{mark}','calendarController@edit')->middleware('auth');

Route::get('export_excel','ExportController@excel')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
