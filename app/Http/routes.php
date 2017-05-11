<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "StaticController@home")->name('home');
Route::get("/help", "StaticController@help")->name('help');
Route::get("/about", "StaticController@about")->name('about');
Route::get("/signup", "UserController@create")->name('signup');
Route::resource('users', 'Usercontroller');

Route::get("/login", "SessionsController@create")->name('sessions.create');
Route::post("/login", "SessionsController@store")->name('sessions.store');//括号里的一样就可以取名login
Route::delete("logout", "SessionsController@logout")->name('sessions.logout');