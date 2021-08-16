<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => 'check.login'], function () { //valida a autenticação
    //Route::auth();
    //Route::post('/login',['uses'=>'App\Http\Controllers\HomeController@verificaLogin','as' => 'VerificaLogin']);
    Route::get('/disciplinaShow/{id}', [SubjectController::class, 'show'])->name('showDisc');

    Route::get('/disciplina/quizz/{idDisc}/{idQuiz}', 'App\Http\Controllers\SubjectController@showQuizz')->name('subject.quizz');

    Route::get('/disciplina/quizz/resultado', 'App\Http\Controllers\SubjectController@showQuizzResult')->name('subject.quizz.result');

    Route::get('/home/{id}/avatar', 'App\Http\Controllers\HomeController@showAvatar');
    Route::get('/insereAvatar/{idUsuario}/{idAvatar}', 'App\Http\Controllers\HomeController@selectAvatar');

    Route::get('/disciplina/ranking', 'App\Http\Controllers\SubjectController@showSubjectRanking')->name('subject.ranking');

    Route::get('/comunidade', 'App\Http\Controllers\CommunityController@showFriends')->name('community');
    //Route::post('/amigos/do', 'App\Http\Controllers\FriendController@addFriend');

    Route::get('/perfil', 'App\Http\Controllers\ProfileController@showProfile')->name('profile');

    //Route::get('/quizz/{idDisc}/{idQuiz}/', 'App\Http\Controllers\QuizzController@takeQuizz');

    Route::group(['middleware' => ['check.permissao']], function () {
        // Precisa estar autenticado e for adm

        Route::get('/cadastroDisciplina', 'App\Http\Controllers\RegisterController@registerSubject')->name('registerSubject');
        Route::get('/cadastroDisciplina/{idDisc}', 'App\Http\Controllers\RegisterController@registerSubject')->name('registerSubject');
        Route::post('/disciplinaInsertBD', [RegisterController::class, 'storeSubject']);
        Route::put('/disciplinaUpdateBD/{idDisc}', [RegisterController::class, 'updateSubject']);

        Route::get('/cadastroTopico/{idDisc}', 'App\Http\Controllers\RegisterController@registerTopic')->name('registerTopic');
        Route::get('/cadastroTopico/{idDisc}', 'App\Http\Controllers\RegisterController@registerTopic')->name('registerTopic');
        Route::get('/cadastroTopico/{idDisc}/{idTopico}', 'App\Http\Controllers\RegisterController@registerTopic')->name('registerTopic');
        Route::post('/topicoInsertBD/{idDisc}', [RegisterController::class, 'storeTopic']);
        Route::put('/topicoUpdateBD/{idDisc}/{idTopico}', [RegisterController::class, 'updateTopic']);

        Route::get('/cadastroSubTopico/{idDisciplina}/{idTopico}', 'App\Http\Controllers\RegisterController@registerSubTopic')->name('registerSubTopic');
        Route::get('/cadastroSubTopico/{idDisciplina}/{idTopico}/{idSubTopico}', 'App\Http\Controllers\RegisterController@registerSubTopic')->name('registerSubTopic');
        Route::post('/subtopicoInsertBD/{idDisciplina}/{idTopico}', [RegisterController::class, 'storeSubTopic']);
        Route::put('/subtopicoUpdateBD/{idDisciplina}/{idTopico}/{idSubTopico}', [RegisterController::class, 'updateSubTopico']);

        Route::get('/cadastroMaterialDidatico/{idTopico}', 'App\Http\Controllers\RegisterController@registerStudyMaterial')->name('registerStudyMaterial');
        Route::get('/cadastroMaterialDidatico/{idTopico}/{idMaterial}', 'App\Http\Controllers\RegisterController@registerStudyMaterial')->name('registerStudyMaterial');
        Route::post('/materialDidaticoInsertBD/{idTopico}', [RegisterController::class, 'storeStudyMaterial']);
        Route::put('/materialDidaticoUpdateBD/{idTopico}/{idMaterial}', [RegisterController::class, 'updateStudyMaterial']);
    });
});


Route::get('/', function () {
    return redirect("/home/login");
});



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/home/login', 'App\Http\Controllers\HomeController@showLoginForm')->name('home.login');
Route::get('/logout', 'App\Http\Controllers\HomeController@logout')->name('home.login');
//Route::post('/home/login/do', 'App\Http\Controllers\HomeController@login')->name('home.login.do');
Route::post('/doLogin', 'App\Http\Controllers\HomeController@login');


Route::get('/home/{id}', 'App\Http\Controllers\HomeController@indexUsuario')->name('home');

Route::get('/cadastroUsuario', 'App\Http\Controllers\RegisterController@registerUser')->name('registerUser');
Route::put('/createUser', [UserController::class, 'storeUser']);



//Route::get('/disciplinaShow/{id}', [SubjectController::class, 'show'])->name('showDisc');

//Route::get('/disciplina/{$id}', 'App\Http\Controllers\SubjectController@showSubject')->name('subject'); //como fazer o acesso dinâmico?
