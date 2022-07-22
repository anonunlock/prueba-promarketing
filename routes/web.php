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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/juegos', 'JuegoController@index')->name('juegos');
Route::get('/juegos/delete/{id}', 'JuegoController@destroy')->name('juegos.destroy');
Route::get('/juegos/create', 'JuegoController@create')->name('juegos.create');
Route::get('/juegos/edit/{id}', 'JuegoController@edit')->name('juegos.edit');
Route::get('/juegos/show/{id}', 'JuegoController@show')->name('juegos.show');
Route::post('/juegos/store', 'JuegoController@store')->name('juegos.store');
Route::post('/juegos/update', 'JuegoController@update')->name('juegos.update');

