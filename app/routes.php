<?php

Route::get('/', array('uses'=>'HomepageController@index'));
/*
Route::get('/', function(){
	return View::make('homepage');
});*/

Route::get('/admin', function()
{
	if(Session::has('logged_in') && Session::get('logged_in')=='1')
	{
		return View::make('backend.dashboard');
	}
	else
	{
		return View::make('landing_page');
	}
});

Route::get('/dashboard', function(){
	return View::make('backend.dashboard');
});

Route::post('/login', array('before'=>'csrf', 'uses'=>'UserController@proses_login'));
Route::get('/logout', function(){
	Session::flush();
	return Redirect::to('/admin');
});

Route::get('dashboard/intro', array('uses'=>'SliderController@index'));
Route::post('dashboard/intro/upload', array('uses'=>'SliderController@upload'));
Route::get('/dashboard/intro/update/{id}', array('uses'=>'SliderController@edit'));
Route::post('/dashboard/intro/update/{id}', array('uses'=>'SliderController@update'));
Route::post('/dashboard/intro/hapus/{id}', array('uses'=>'SliderController@hapus'));
//Route::get('/dashboard/intro/hapus/{id}', array('uses'=>'SliderController@hapus'));

Route::get('dashboard/about', function(){
 return View::make('backend.about');
});
Route::get('dashboard/about/edit/{id}', array('uses'=>'AboutController@edit'));
Route::post('/dashboard/about/doupdate', array('uses'=>'AboutController@doEdit'));

Route::get('dashboard/games', array('uses'=>'GamesController@index'));
Route::get('dashboard/games/tambah', array('uses'=>'GamesController@tambah'));
Route::post('dashboard/games/tambah', array('uses'=>'GamesController@simpan_game'));
Route::get('/games/{slug}', array('uses'=>'GamesController@baca'));
//Route::get('/dashboard/games/hapus/{id}', array('uses'=>'GamesController@hapus'));
Route::get('/dashboard/games/edit/{id}', array('uses'=>'GamesController@edit'));
Route::post('/dashboard/games/edit/{id}', array('uses'=>'GamesController@update_games'));
Route::post('/dashboard/games/hapus/{id}', array('uses'=>'GamesController@hapus'));