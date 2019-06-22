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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app', 'HomeController@app');


Route::prefix('app')->group(function () {
    Route::prefix('marcas')->group(function() {
        Route::get('/', 'app\MarcasController@index');
        Route::get('/novo', 'app\MarcasController@new');
        Route::post('/', 'app\MarcasController@create');
    }); 
});
