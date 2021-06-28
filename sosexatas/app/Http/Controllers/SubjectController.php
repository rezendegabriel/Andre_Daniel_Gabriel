<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function show($id)
    {
        $disciplina = Disciplina::findOrFail($id);

        $topicos = [  ['a','b'], ['c'] ];

        return view('\subject', ['disciplina' => $disciplina, 'topicos' => $topicos]);
    }

    public function showQuizz()
    {
        return view('\quizz');
    }

    public function showQuizzResult()
    {
        return view('\result');
    }

    public function showSubjectRanking()
    {
        return view('\ranking');
    }
}
