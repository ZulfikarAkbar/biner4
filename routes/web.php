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


Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/coming_soon', 'ComeController@come');
// Route::any('countdown', 'WelcomeController@count')->name('countdown');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['Admin']], function(){
    Route::resource('pendaftar','PendaftarController');
    // Route::resource('berita','beritaController');
    Route::resource('prop','PropController');

    Route::get('/berita','beritaController@index');
    Route::get('/berita/buat_berita','beritaController@create')->name('buat_berita');
    Route::post('/berita/{berita}','beritaController@store')->name('store_berita');
    Route::get('/berita/{berita}/edit_berita', 'beritaController@edit')->name('berita.edit');
    Route::put('/berita/{berita}', 'beritaController@update');
    Route::delete('/berita/{id}', 'beritaController@destroy')->name('berita.destroy');
});
Route::resource('proposal','ProposalController');
Route::get('/berita/{berita}', 'beritaController@show')->name('berita.show');
