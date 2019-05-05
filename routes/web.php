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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/listequestions', 'ListeQuestionsController@listeQuestions')->name('listeQuestions');
Route::get('/ajoutquestion', 'AjoutQuestionController@ajoutQuestion')->name('ajoutQuestion');
Route::get('/managequestion', 'ManageQuestionController@manageQuestion')->name('manageQuestion');
Route::get('/managequestion/{id}','ManageQuestionController@editQuestion')->name('editReponse');
Route::get('/managequestion/{id}/delete','ManageQuestionController@supprimerQuestion')->name('deleteReponse');


Route::post('/ajoutquestion/post', 'AjoutQuestionController@enregistrerQuestion')->name('postQuestion');
Route::post('/managequestion/{id}/post', 'ManageQuestionController@modifierEtat')->name('createReponse');
Route::post('/searchquestion','ListeQuestionsController@searchQuestion')->name('searchQuestion');