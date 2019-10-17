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

Route::get('/', [
	'as' => 'home_path',
	'uses' => 'PagesController@index'
]);
Route::get('about', [
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);
Route::get('help', [
	'as' => 'help_path',
	'uses' => 'PagesController@help'
]);
Route::get('etudiant', [
	'as' => 'etudiant_path',
	'uses' => 'PagesController@etudiant'
]);
#enquete------------------------------------------------------
Route::get('enquete', [
	'as' =>	'enquete_path',
	'uses' => 'EnquetesController@index'
]);
Route::get('enquete/show', [
	'as' =>	'enquete.show_path',
	'uses' => 'EnquetesController@show'
]);
Route::get('enquete/create', [
	'as' =>	'enquete.create_path',
	'uses' => 'EnquetesController@create'
]);
Route::get('enquete/update', [
	'as' =>	'enquete.update_path',
	'uses' => 'EnquetesController@update'
]);
Route::get('enquete/delete', [
	'as' =>	'enquete.delete_path',
	'uses' => 'EnquetesController@destroy'
]);
#users -------------------------------------------------------
Route::get('user', [
	'as' =>	'users_path',
	'uses' => 'UsersController@index'
]);

Route::get('user/show', [
	'as' =>	'users.show_path',
	'uses' => 'UsersController@show'
]);

Route::get('user/create', [
	'as' =>	'users.create_path',
	'uses' => 'UsersController@create'
]);

Route::get('user/update', [
	'as' =>	'users.update_path',
	'uses' => 'UsersController@update'
]);

Route::get('user/delete', [
	'as' =>	'users.delete_path',
	'uses' => 'UsersController@destroy'
]);
