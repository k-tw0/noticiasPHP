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
/*
Route::get('/', function () {

    $name = 'FrancoR';
    return view('welcome', [ 'name' => $name]);
});*/

Route::get('/', 'CategoriesController@index');

Route::get('/register', function () {

    return view('register');
});

Route::get('/formulario', function () {

    return view('formulario');
});