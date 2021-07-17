<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Disciplina;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('idUsuario')){
            return redirect("/home/" . $request->session()->get('idUsuario'));
        }else{
            return redirect("/home/login");
        }
        //$disciplina = Disciplina::all();
        //return view('\home', ['disciplina' => $disciplina]);

        //SEM LOGIN, PAGINA DE ERRO

    }

    public function indexUsuario($id, Request $request)
    {
       // $CodDisciplinasUser = DB::table('realiza')
        //->select('fk_Disciplina_id')->where('fk_Usuario_id', $id);

        //$disciplina = Disciplina::where('idDisc', $id);
        if ($request->session()->has('idUsuario')){

            if($id != $request->session()->get('idUsuario')){
                return redirect("/home/" . $request->session()->get('idUsuario'));
            }

                if($request->session()->get('tipoUsuario') == 1){

                $disciplina = DB::table('disciplina')
                    ->select('disciplina.*')->whereIn('idDisc', DB::table('realiza')
                    ->select('realiza.fk_Disciplina_id')->where('realiza.fk_Usuario_id', $request->session()->has('idUsuario')))
                    ->get();
                    return view('\home' ,['disciplina' => $disciplina]);
                }else{
                        $disciplina = Disciplina::all();

                        return view('\home' ,['disciplina' => $disciplina]);
                }
            //}else{
                //return redirect("/home/login");
            //}

                //return redirect("/home/" + $request->session()->get('idUsuario'));

        }

            return redirect("/home/login");

       }


        //return view('\home', ['disciplina' => $disciplina]);


    public function showLoginForm()
    {
        return view('\loginForm');
    }

    public function login(Request $request)
    {

        if ($request->session()->has('idUsuario')){

        }

        $allUsers = User::all();

        foreach($allUsers as $u){
            if( $request->email == $u->email && $request->pass == $u->senha){

                $_SESSION["idUsuario"] = $u->idUsuario;
                //Session::put('key', 'value');
                $request->session()->put('idUsuario', $u->idUsuario); //criando sessão com o idUsuário
                $request->session()->put('tipoUsuario', $u->tipo); //criando sessão com o tipoUsuario

                if($u->tipo == 1){
                    $disciplina = DB::table('disciplina')
                    ->select('disciplina.*')->whereIn('idDisc', DB::table('realiza')
                    ->select('realiza.fk_Disciplina_id')->where('realiza.fk_Usuario_id', $u->idUsuario))
                    ->get();
                    return view('\home' ,['disciplina' => $disciplina]);
                }else{
                    $disciplina = Disciplina::all();

                    return view('\home' ,['disciplina' => $disciplina]);
                }

            }else{
                //
            }
        }

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect("/home/login");
    }


    public function showDisciplinas()
    {

        $disciplinas = Disciplina::all();


        return view('\home', ['disciplinas' => $disciplinas] );
    }

}
