<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\DB;

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
        $check = true;
         //verificar todos os dados
        //$user->nomeDisc =$request->name;



        //$erros[] = "Teste01";
       //$erros[] = "Teste02";
        //VALIDANDO USER


        if(DB::table('usuario')->where('cpf', $request->cpf)->count()){
            $erros[] = "CPF já cadastrado";
            $check = false;
        }

        if(DB::table('usuario')->where('nick', $request->nick)->count()){
            $erros[] = "Nick já cadastrado";
            $check = false;
        }

        if(DB::table('usuario')->where('email', $request->email)->count()){
            $erros[] = "E-mail já cadastrado";
            $check = false;
        }

        //throw " ";

        $firstMatchingStudent = DB::table('usuario')->where('cpf', $request->cpf);


        $check = false;

        if($check){ // passou nas verificações

            //$user->save();   //DESCOMENTAR //se passou nas verificações, então salvar
            return  redirect("/home/login");

        }else{ //não passou, colocar erro

            $values = [$request->name, $request->nick, $request->cpf, $request->tel,  $request->email, $request->pass];

            //return redirect()->route("/cadastroUsuario", [$values, $erros]);
            return  redirect("/cadastroUsuario")->with(['values' => $values, 'erros' =>  $erros]);

        }


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
