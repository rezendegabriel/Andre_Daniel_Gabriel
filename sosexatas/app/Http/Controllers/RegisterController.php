<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerUser()
    {
        return view('\registerUser');
    }

    public function registerSubject()
    {
        return view('\registerSubject');
    }

    public function store(Request $request)
    {

        $disciplina = new Disciplina();

        $disciplina->nomeDisc =$request->name;

        $disciplina->save();

        return  redirect("/home")->with('msg', 'Disciplina Adicionada com sucesso!');
    }
}
