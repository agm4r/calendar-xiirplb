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
Route::get('blog/', 'blogController@home');
Route::get('blog/profile', 'blogController@profile');
Route::get('blog/contact', 'blogController@contact');
Route::get('/blog/calendar','calendarController@index');
Route::get('/blog/events/{date}','calendarController@events');
Route::get('/blog/events/tambah/{date}','calendarController@tambah');
Route::post('/blog/events/insert','calendarController@insert');
Route::post('/blog/events/update','calendarController@update');
Route::get('/blog/events/delete/{id}/{date}','calendarController@delete');
Route::get('/blog/events/edit/{id}','calendarController@edit');


//route xii rpl b
Route::get('/xiirplb/siswa', 'xiirplbController@index');
Route::get('/xiirplb/tambah', 'xiirplbController@tambah');
Route::get('/xiirplb/update/{id}', 'xiirplbController@update');
Route::get('/xiirplb/delete/{id}', 'xiirplbController@delete');
Route::post('/xiirplb/store', 'xiirplbController@store');
Route::post('/xiirplb/edit','xiirplbController@edit');