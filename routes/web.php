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

Route::get('/', 'Pagescontroller@welcome');
Route::get('/about', 'Pagescontroller@about');
Route::get('/contact', 'Pagescontroller@contact');
Route::resource('/project', 'PostController');
//Route::get('/project', 'Pagescontroller@index');
//Route::get('/project/create', 'Pagescontroller@create');
//Route::post('/project', 'Pagescontroller@store');



