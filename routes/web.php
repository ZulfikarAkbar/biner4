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

    Route::get('/peserta-seminar','pesertaController@index_seminar');
    Route::delete('/peserta-seminar/{id}', 'pesertaController@destroy_seminar')->name('seminar.destroy');

    Route::get('/peserta-bisnis','pesertaController@index_bisnis');
    Route::delete('/peserta-bisnis/{id}', 'pesertaController@destroy_bisnis')->name('bisni.destroy');

    Route::get('/peserta-workshop-batch1','pesertaController@index_workshop_batch1');
    Route::delete('/peserta-workshop-batch1/{id}', 'pesertaController@destroy_wb1')->name('workshop1.destroy');

    Route::get('/peserta-workshop-batch2','pesertaController@index_workshop_batch2');
    Route::delete('/peserta-workshop-batch2/{id}', 'pesertaController@destroy_wb2')->name('workshop2.destroy');

    Route::get('/tiket','TiketController@index');
    Route::get('/tiket/buat_tiket','TiketController@create')->name('buat_tiket');
    Route::post('/tiket/{tiket}','TiketController@store')->name('store_tiket');
    Route::get('/tiket/{tiket}/edit_tiket', 'TiketController@edit')->name('tiket.edit');
    Route::put('/tiket/{tiket}', 'TiketController@update');
    Route::delete('/tiket/{id}', 'TiketController@destroy')->name('tiket.destroy');

});
Route::resource('proposal','ProposalController');
Route::get('/berita/{berita}', 'beritaController@show')->name('berita.show');

Route::get('/tiket-seminar','TiketController@index_seminar');
Route::get('/tiket-workshop-batch-1','TiketController@index_workshop1');
Route::get('/tiket-workshop-batch-2','TiketController@index_workshop2');
Route::get('/tiket-competition','TiketController@index_competition');

Route::get('/rangkaian-acara/seminar','InfoController@seminar');
Route::get('/rangkaian-acara/workshop','InfoController@workshop');
Route::get('/rangkaian-acara/kompetisi','InfoController@kompetisi');
