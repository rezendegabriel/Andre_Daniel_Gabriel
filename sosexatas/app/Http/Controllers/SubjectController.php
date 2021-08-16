<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Topico;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class SubjectController extends Controller
{
    public function show($id)
    {
        $disciplina = Disciplina::findOrFail($id);


        //$topicos = Topico::where('idTop', 1);

        $topicos = $disciplina->topicos;
        $subtopicos = [];
        $materiais = [];
        $quizzes = [];

        $i = 0;
        foreach( $topicos as $top){
            $subtopicos[$i] = $top->subtopicos;
            $materiais[$i] = $top->materiais;
            $quizzes[$i] = $top->quizzes;
            $i++;
            //$subtopicos[$i] = $topicos[1]->subtopicos;
            //$i++;
        }

        //$topicos = [  ['a','b'], ['c'] ];

        return view('\subject', ['disciplina' => $disciplina, 'topicos' => $topicos,
                'subtopicos' => $subtopicos, 'materiais' => $materiais,
                'quizzes' => $quizzes ]);
    }

    public function showQuizz($idDisc, $idQuiz, Request $request)
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
