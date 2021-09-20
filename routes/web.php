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

Route::get('/','QuizController@index');
Route::get('/quizForm','QuizController@quizForm');
Route::post('/store','QuizController@store');
Route::get('/statistic','QuizController@statistic');
