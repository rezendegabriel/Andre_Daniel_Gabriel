<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Disciplina;

class HomeController extends Controller
{
    public function index()
    {
        $disciplina = Disciplina::all();

        return view('\home', ['disciplina' => $disciplina]);
    }

    public function showLoginForm()
    {
        return view('\loginForm');
    }

    public function login(Request $request)
    {
        //var_dump( expression: $request->all());
    }


    public function showDisciplinas()
    {

        $disciplinas = Disciplina::all();


        return view('\home', ['disciplinas' => $disciplinas] );
    }

}
