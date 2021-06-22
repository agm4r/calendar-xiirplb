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


<<<<<<< HEAD
Route::get('belajar', 'BelajarController@index')->middleware('auth');
Route::get('welcome', 'tugas5Controller@welcome')->middleware('auth');
Route::get('biodata', 'tugas5Controller@biodata')->middleware('auth');
Route::get('formulir', 'SiswaController@formulir')->middleware('auth');
Route::post('formulir/proses', 'SiswaController@proses')->middleware('auth');


//route blog
Route::get('/', 'blogController@home')->middleware('auth');
Route::get('profile', 'blogController@profile')->middleware('auth');
=======
//route blog
Route::get('/', 'blogController@home')->middleware('auth');
>>>>>>> update
Route::get('contact', 'blogController@contact')->middleware('auth');
Route::get('/calendar','calendarController@index')->middleware('auth');
Route::get('/events/{date}','calendarController@events')->middleware('auth');
Route::get('/events/tambah/{date}','calendarController@tambah')->middleware('auth');
Route::post('/events/insert','calendarController@insert')->middleware('auth');
<<<<<<< HEAD


Route::post('/events/update/{mark}','calendarController@update')->middleware('auth');

Route::get('/events/delete/{id}/{date}','calendarController@delete')->middleware('auth');
Route::get('/delete/{id}/{date}','calendarController@delete')->middleware('auth');
Route::get('edit/{id}/{mark}','calendarController@edit')->middleware('auth');
Route::get('events/edit/{id}/{mark}','calendarController@edit')->middleware('auth');

Route::get('export_excel','ExportController@excel')->middleware('auth');
=======


Route::post('/events/update/{mark}','calendarController@update')->middleware('auth');

Route::get('/events/delete/{id}/{date}','calendarController@delete')->middleware('auth');
Route::get('/delete/{id}/{date}','calendarController@delete')->middleware('auth');
Route::get('edit/{id}/{mark}','calendarController@edit')->middleware('auth');
Route::get('events/edit/{id}/{mark}','calendarController@edit')->middleware('auth');
>>>>>>> update

Route::get('export_excel','ExportController@excel')->middleware('auth');
Auth::routes();

<<<<<<< HEAD
//route xii rpl b
Route::get('/xiirplb/siswa', 'xiirplbController@index')->middleware('auth');
Route::get('/xiirplb/tambah', 'xiirplbController@tambah')->middleware('auth');
Route::get('/xiirplb/update/{id}', 'xiirplbController@update')->middleware('auth');
Route::get('/xiirplb/delete/{id}', 'xiirplbController@delete')->middleware('auth');
Route::post('/xiirplb/store', 'xiirplbController@store')->middleware('auth');
Route::post('/xiirplb/edit','xiirplbController@edit')->middleware('auth');
Auth::routes();

=======
>>>>>>> update
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
