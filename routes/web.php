<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/', 'QuestionnaireController@index')->name('questionnaires.index');
    Route::resource('questionnaires', 'QuestionnaireController')->except('index');

    Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create')->name('questions.create');
    Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store')->name('questions.store');
    Route::get('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@edit')->name('questions.edit');
    Route::put('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@update')->name('questions.update');
    Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy')->name('questions.destroy');

    Route::get('/surveys/questionnaires/{questionnaire}', 'SurveyController@show')->name('surveys.show');
    Route::post('/surveys/questionnaires/{questionnaire}', 'SurveyController@store')->name('surveys.store');

    Route::get('/respondents', 'SurveyResponseController@index')->name('responses.index');
    Route::get('/respondents/surveys/{survey}', 'SurveyResponseController@show')->name('responses.show');
});
