<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', 'QuestionnaireController@index')->name('questionnaires.index');
Route::resource('questionnaires', 'QuestionnaireController')->except('index');

Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create')->name('questions.create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store')->name('questions.store');
Route::get('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@edit')->name('questions.edit');
Route::put('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@update')->name('questions.update');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy')->name('questions.destroy');
