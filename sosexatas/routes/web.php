<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubjectController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/home/{id}', 'App\Http\Controllers\HomeController@indexUsuario')->name('home');

Route::get('/home/login', 'App\Http\Controllers\HomeController@showLoginForm')->name('home.login');
//Route::post('/home/login/do', 'App\Http\Controllers\HomeController@login')->name('home.login.do');


Route::get('/cadastroUsuario', 'App\Http\Controllers\RegisterController@registerUser')->name('registerUser');

Route::get('/cadastroDisciplina', 'App\Http\Controllers\RegisterController@registerSubject')->name('registerSubject');
Route::post('/disciplinaInsertBD', [RegisterController::class, 'storeSubject']);

Route::get('/cadastroTopico/{id}', 'App\Http\Controllers\RegisterController@registerTopic')->name('registerTopic');
Route::post('/topicoInsertBD/{id}', [RegisterController::class, 'storeTopic']);

Route::get('/cadastroSubTopico/{idDisciplina}/{idTopico}', 'App\Http\Controllers\RegisterController@registerSubTopic')->name('registerSubTopic');
Route::post('/subTopicoInsertBD/{idDisciplina}/{idTopico}', [RegisterController::class, 'storeSubTopic']);

Route::get('/cadastroMaterialDidatico/{id}', 'App\Http\Controllers\RegisterController@registerStudyMaterial')->name('registerStudyMaterial');
Route::post('/materialDidaticoInsertBD/{id}', [RegisterController::class, 'storeStudyMaterial']);


Route::get('/disciplinaShow/{id}', [SubjectController::class, 'show']);

//Route::get('/disciplina/{$id}', 'App\Http\Controllers\SubjectController@showSubject')->name('subject'); //como fazer o acesso dinâmico?

Route::get('/disciplina/quizz', 'App\Http\Controllers\SubjectController@showQuizz')->name('subject.quizz'); //como fazer o acesso dinâmico?
//Route::post('/quizz/do', 'App\Http\Controllers\QuizzController@takeQuizz');
Route::get('/disciplina/quizz/resultado', 'App\Http\Controllers\SubjectController@showQuizzResult')->name('subject.quizz.result');

Route::get('/disciplina/ranking', 'App\Http\Controllers\SubjectController@showSubjectRanking')->name('subject.ranking');

Route::get('/comunidade', 'App\Http\Controllers\CommunityController@showFriends')->name('community');
//Route::post('/amigos/do', 'App\Http\Controllers\FriendController@addFriend');

Route::get('/perfil', 'App\Http\Controllers\ProfileController@showProfile')->name('profile');
