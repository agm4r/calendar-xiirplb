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


// Route::get('/', function () {
//     return view('welcome');
// });	

// Route::get('/biodata', function () {
//     return view('biodata');
// });

Route::get('dosen', 'DosenController@index');
Route::get('belajar', 'BelajarController@index');
Route::get('welcome', 'tugas5Controller@welcome');
Route::get('biodata', 'tugas5Controller@biodata');
Route::get('formulir', 'SiswaController@formulir');
Route::post('formulir/proses', 'SiswaController@proses');


//route blog
Route::get('/', 'blogController@home');
Route::get('profile', 'blogController@profile');
Route::get('contact', 'blogController@contact');
Route::get('/calendar','calendarController@index');
Route::get('/events/{date}','calendarController@events');
Route::get('/events/tambah/{date}','calendarController@tambah');
Route::post('/events/insert','calendarController@insert');


Route::post('/events/update/{mark}','calendarController@update');

Route::get('/events/delete/{id}/{date}','calendarController@delete');
Route::get('/delete/{id}/{date}','calendarController@delete');
Route::get('edit/{id}/{mark}','calendarController@edit');
Route::get('events/edit/{id}/{mark}','calendarController@edit');

Route::get('export_excel','ExportController@excel');


//route xii rpl b
Route::get('/xiirplb/siswa', 'xiirplbController@index');
Route::get('/xiirplb/tambah', 'xiirplbController@tambah');
Route::get('/xiirplb/update/{id}', 'xiirplbController@update');
Route::get('/xiirplb/delete/{id}', 'xiirplbController@delete');
Route::post('/xiirplb/store', 'xiirplbController@store');
Route::post('/xiirplb/edit','xiirplbController@edit');