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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/try', 'QuestionController@try');

Route::get('/questions', 'QuestionController@index');
Route::get('/add-question', 'QuestionController@create');
Route::post('/add-question', 'QuestionController@store');
Route::get('/edit-question/{id}', 'QuestionController@edit');
Route::post('/edit-question/{id}', 'QuestionController@update');
Route::get('/delete-question/{id}', 'QuestionController@destroy');

Route::get('/answers', 'AnswerController@index');
Route::get('/add-answer', 'AnswerController@create');
Route::post('/add-answer', 'AnswerController@store');
Route::get('/edit-answer/{id}', 'AnswerController@edit');
Route::post('/edit-answer/{id}', 'AnswerController@update');
Route::get('/delete-answer/{id}', 'AnswerController@destroy');

Route::get('/categories', 'CategoryController@index');
Route::get('/add-category', 'CategoryController@create');
Route::post('/add-category', 'CategoryController@store');
Route::get('/edit-category/{id}', 'CategoryController@edit');
Route::post('/edit-category/{id}', 'CategoryController@update');
Route::get('/delete-category/{id}', 'CategoryController@destroy');

Route::get('/tags', 'TagController@index');
Route::get('/add-tag', 'TagController@create');
Route::post('/add-tag', 'TagController@store');
Route::get('/edit-tag/{id}', 'TagController@edit');
Route::post('/edit-tag/{id}', 'TagController@update');
Route::get('/delete-tag/{id}', 'TagController@destroy');


Route::get('/quizes', 'QuizController@index');
Route::get('/add-quiz', 'QuizController@create');
Route::post('/add-quiz', 'QuizController@store');
Route::get('/edit-quiz/{id}', 'QuizController@edit');
Route::post('/edit-quiz/{id}', 'QuizController@update');
Route::get('/delete-quiz/{id}', 'QuizController@destroy');