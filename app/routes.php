<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('index', function()
{
 return View::make('index');
});

Route::get('dashboard', function()
{
 return View::make('dashboard');
});

Route::get('dashboard/intro', function()
{
 return View::make('intro');
});

Route::get('dashboard/about', function()
{
 return View::make('about');
});

Route::get('dashboard/games', function()
{
 return View::make('games');
});

Route::get('/', 'AboutController@index');
Route::post('dashboard/input', 'AboutController@input');
Route::get('dashboard/hapus/{id}', 'AboutController@hapus');
Route::get('dashboard/edit/{id}', 'AboutController@edit');
Route::post('dashboard/doupdate', 'AboutController@doEdit');
//Route::post('dashboard/update', 'AboutController@update');
