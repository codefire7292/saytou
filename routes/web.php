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
	/*Route::middleware('admin')->group(function () {
    ...
	});
	Route::middleware('coordinator')->group(function () {
    ...
	});
	Route::middleware('enqueteur')->group(function () {
    ...
	});
	Route::middleware('patron')->group(function () {
    ...
	});
	Route::middleware('etudiant')->group(function () {
    ...
	});*/
	Route::get('/', [
		'as' => 'home_path',
		'uses' => 'HomeController@index'
	]);
	Route::get('/admin', [
		'as' => 'admin_index',
		'uses' => 'PagesController@admin_index'
	])->middleware('admin');
	Route::get('/patron', [
		'as' => 'patron_index',
		'uses' => 'PagesController@patron_index'
	])->middleware('patron');
	Route::get('/coordinator', [
		'as' => 'coordinator_index',
		'uses' => 'PagesController@coordinator_index'
	])->middleware('coordinator');
	Route::get('/etudiant', [
		'as' => 'etudiant',
		'uses' => 'PagesController@etudiant'
	])->middleware('etudiant');
	Route::get('/investigator', [
		'as' => 'investigator_index',
		'uses' => 'PagesController@investigator_index'
	])->middleware('investigator');
	Route::get('about', [
		'as' => 'about_path',
		'uses' => 'PagesController@about'
	]);
	Route::get('help', [
		'as' => 'help_path',
		'uses' => 'PagesController@help'
	]);
	Route::get('profile', [
		'as' => 'profile_path',
		'uses' => 'UsersController@profile'
	]);
	Route::post('update_avatar', [
		'as' => 'update_avatar_path',
		'uses' => 'UsersController@update_avatar'
	]);


	Route::get('pdf-generate', [
		'as' => 'pdf-generate',
		'uses' => 'UsersController@PDFgenerate'
	]);
	#etudiant------------------------------------------------------

	Route::resource('etudiant', 'EtudiantController');
	#enqueter------------------------------------------------------

	Route::resource('enqueter', 'EnqueterController');
	#enquete------------------------------------------------------

	Route::resource('enquete', 'EnquetesController');
	#users -------------------------------------------------------

	Route::resource('user','UsersController');
	#zones -------------------------------------------------------

	Route::resource('zone','ZonesController');
	#affectations -------------------------------------------------

	Route::resource('affectation','AffectationsController');
});
