<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Disciplina;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $disciplina = Disciplina::all();

        return view('\home', ['disciplina' => $disciplina]);
    }

    public function indexUsuario($id)
    {
       // $CodDisciplinasUser = DB::table('realiza')
        //->select('fk_Disciplina_id')->where('fk_Usuario_id', $id);

        //$disciplina = Disciplina::where('idDisc', $id);

        $disciplina = DB::table('disciplina')
            ->select('disciplina.*')->whereIn('idDisc', DB::table('realiza')
            ->select('realiza.fk_Disciplina_id')->where('realiza.fk_Usuario_id', $id))
            ->get();

        return view('\home', ['disciplina' => $disciplina]);
    }

    public function showLoginForm()
    {
        return view('\loginForm');
    }

    public function login(Request $request)
    {
        $allUsers = User::all();

        foreach($allUsers as $u){
            if( $request->email == $u->email && $request->pass == $u->senha){
                $disciplina = DB::table('disciplina')
                ->select('disciplina.*')->whereIn('idDisc', DB::table('realiza')
                ->select('realiza.fk_Disciplina_id')->where('realiza.fk_Usuario_id', $u->idUsuario))
                ->get();
                return view('\home' ,['disciplina' => $disciplina]);
            }else{
                //
            }
        }

    }


    public function showDisciplinas()
    {

        $disciplinas = Disciplina::all();


        return view('\home', ['disciplinas' => $disciplinas] );
    }

}
