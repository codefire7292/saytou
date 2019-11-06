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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

	Route::get('/', [
		'as' => 'home_path',
		'uses' => 'HomeController@index'
	]);
	Route::get('/admin', [
		'as' => 'admin_index',
		'uses' => 'PagesController@admin_index'
	]);
	Route::get('/patron', [
		'as' => 'patron_index',
		'uses' => 'PagesController@patron_index'
	]);
	Route::get('/coordinator', [
		'as' => 'coordinator_index',
		'uses' => 'PagesController@coordinator_index'
	]);
	Route::get('about', [
		'as' => 'about_path',
		'uses' => 'PagesController@about'
	]);
	Route::get('help', [
		'as' => 'help_path',
		'uses' => 'PagesController@help'
	]);
	#etudiant------------------------------------------------------

	Route::resource('etudiant', 'EtudiantController');
	#enquete------------------------------------------------------

	Route::resource('enquete', 'EnquetesController');
	#users -------------------------------------------------------

	Route::resource('user','UsersController');
});
