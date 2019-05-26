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

Route::any('/{any}','SpaController@index')->where('any','.*');

Route::get('/', 'ChallengeQuestionsController@index')->name('index');
Route::get('/questions', 'ChallengeQuestionsController@index')->name('index.questions');
Route::get('/questions/create', 'ChallengeQuestionsController@create')->name('index.questions.create');
Route::get('/questions/{question}', 'ChallengeQuestionsController@show')->name('index.questions.show');
Route::post('/questions/store', 'ChallengeQuestionsController@store')->name('index.questions.store');



