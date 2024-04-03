<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReciboController;
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

Route::get('/', 'App\Http\Controllers\ReciboController@index');

Route::post('/download', 'App\Http\Controllers\ReciboController@download');

Route::post('/imprimir', 'App\Http\Controllers\ReciboController@imprimir');

Route::get('/pdf', 'App\Http\Controllers\ReciboController@visualizaPDF');
