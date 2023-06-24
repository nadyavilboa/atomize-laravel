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

Route::get('/', 'App\Http\Controllers\Controller@index');

Route::get('/corporative-clients', 'App\Http\Controllers\Controller@corporativeClients');

Route::get('/private-clients', 'App\Http\Controllers\Controller@privateClients');

Route::get('/company', 'App\Http\Controllers\Controller@company');

Route::get('/news', 'App\Http\Controllers\Controller@news');

Route::get('/support', 'App\Http\Controllers\Controller@support');

Route::get('/vacancies', 'App\Http\Controllers\Controller@vacancies');

Route::get('/contacts', 'App\Http\Controllers\Controller@contacts');

Route::get('/info', 'App\Http\Controllers\Controller@info');
