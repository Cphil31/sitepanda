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

Route::get('/', 'view@home');
Route::get('/qui', 'view@qui');
Route::get('/diaporama', 'view@diaporama');
Route::get('/contact', 'view@contact');
Route::get('/video','view@video');
