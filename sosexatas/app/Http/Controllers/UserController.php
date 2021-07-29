<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

function validateUser($erros){
    return false;
}



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        //throw "entrei";
        $user = new User();

        //pegando os dados
        $user->nome = $request->name;
        $user->nick = $request->nick;
        $user->cpf = $request->cpf;
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->senha = $request->pass;
        $user->tipo = 1; // FIXO, SENDO USUARIO PADRAO / ALUNO
        $erros = [];

        //verificar todos os dados
        //$user->nomeDisc =$request->name;

        if(validateUser($erros)){ // passou nas verificações

            //$user->save();   //DESCOMENTAR
            return  redirect("/home/login");

        }else{ //não passou, colocar erro

            $values = [$request->name, $request->nick, $request->cpf, $request->tel,  $request->email, $request->pass];


            return  redirect("/cadastroUsuario")->with(['values' => $values, 'erros' =>  $erros]);

        }


        //se passou nas verificações, então salvar



    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
