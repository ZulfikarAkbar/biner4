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
    Route::resource('berita','beritaController');
    Route::resource('prop','PropController');
});
Route::resource('proposal','ProposalController');
