<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function showSubject()
    {
        return view('\subject');
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
