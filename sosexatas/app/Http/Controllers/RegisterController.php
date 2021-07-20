<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Topico;
use App\Models\Subtopico;
use App\Models\MaterialDidatico;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class RegisterController extends Controller
{
    public function registerUser()
    {
        return view('\registerUser');
    }

    public function registerSubject($id = 0)
    {
        if($id != 0){
            $disciplina = Disciplina::findOrFail($id);

            return view('\registerSubject', ['disciplina' => $disciplina]);
        }else{
            return view('\registerSubject', ['disciplina' => NULL]);
        }

    }

    public function storeSubject(Request $request)
    {

        $disciplina = new Disciplina();

        $disciplina->nomeDisc =$request->name;

        $disciplina->save();

        return  redirect("/home")->with('msg', 'Disciplina Adicionada com sucesso!');
    }

    public function updateSubject(Request $request, $id)
    {
        //Disciplina::findOrFail($id)->update($request->all());

        Disciplina::findOrFail($id)->update(['nomeDisc' => $request->name]);

        return  redirect("/home/" . $request->session()->get('idUsuario') )->with('msgEdit', 'Disciplina Editada com sucesso!');

    }


    public function registerTopic($id, $id2 = 0)
    {
        if($id2 != 0){
            $topico = Topico::findOrFail($id2);
            return view('\registerTopic', ['disciplinaID' => $id, 'topico' => $topico] );
        }else{
            return view('\registerTopic', ['disciplinaID' => $id, 'topico' => NULL] );
        }

    }

    public function storeTopic( $id, Request $request)
    {
        $topico = new Topico();

        $topico->nomeTop =$request->name;
        $topico->fk_Disciplina_id =$id;

        $topico->save();

        return  redirect("/disciplinaShow/{$id}")->with('msg', 'Tópico Adicionado com sucesso!');
    }

    public function updateTopic( $id, $id2, Request $request)
    {
        Topico::findOrFail($id2)->update(['nomeTop' => $request->name]);

        //return  redirect("/home/" . $request->session()->get('idUsuario') )->with('msgEdit', 'Disciplina Editada com sucesso!');

        return  redirect("/disciplinaShow/{$id}")->with('msgEdit', 'Tópico Editado com sucesso!');
    }

    public function registerSubTopic($idDisciplina, $idTopico, $idSubTopico = 0)
    {
        //return view('\registerSubTopic', ['disciplinaID' => $idDisciplina, 'topicoId' => $idTopico]);

        if($idSubTopico != 0){
            $subtopico = SubTopico::findOrFail($idSubTopico);
            return view('\registerSubTopic', ['disciplinaID' => $idDisciplina, 'topicoId' => $idTopico, 'subtopico' =>$subtopico] );
        }else{
            return view('\registerSubTopic', ['disciplinaID' => $idDisciplina, 'topicoId' => $idTopico, 'subtopico' =>NULL]);
        }

    }

    public function storeSubTopic( $idDisciplina, $idTopico, Request $request)
    {

        $subtopico = new Subtopico();

        $subtopico->nomeSubTop =$request->name;
        $subtopico->fk_Topico_id =$idTopico;

        $subtopico->save();

        return  redirect("/disciplinaShow/{$idDisciplina}")->with('msg2', 'Subtopico Adicionado com sucesso!');
    }

    public function updateSubTopico( $id, $id2, $id3, Request $request)
    {
        SubTopico::findOrFail($id3)->update(['nomeSubTop' => $request->name]);

        //return  redirect("/home/" . $request->session()->get('idUsuario') )->with('msgEdit', 'Disciplina Editada com sucesso!');

        return  redirect("/disciplinaShow/{$id}")->with('msg3', 'SubTópico Editado com sucesso!');
    }

    public function registerStudyMaterial($id, $id2 = 0)
    {
        if($id2 != 0){
            $material = MaterialDidatico::findOrFail($id2);
            return view('\registerStudyMaterial', ['disciplinaID' => $id, 'material' => $material]);
        }else{
            return view('\registerStudyMaterial', ['disciplinaID' => $id, 'material' => NULL]);
        }

        //return view('\registerStudyMaterial', ['disciplinaID' => $id]);
    }

    public function storeStudyMaterial( $id, Request $request)
    {

        // var_dump($request->all());

        // var_dump($request->arquivo);

        // var_dump($request->file('arquivo')->getClientOriginalName());


        $nameFile = null;

         if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {
             
             $nameFile = $request->file('arquivo')->getClientOriginalName();
             
            //var_dump($$request->file('arquivo'));

            $upload = $request->file('arquivo')->storeAs('public/arquivos', $nameFile);

            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();

       }

        $materialDidatico = new MaterialDidatico();


        $materialDidatico->nome =$request->name;
        $materialDidatico->endArq =$nameFile;
        $materialDidatico->fk_Topico_id =$id;

        $materialDidatico->save();

        return  redirect("/disciplinaShow/{$id}")->with('msg4', 'Material Didático Adicionado com sucesso!');
    }


    public function updateStudyMaterial( $id, $id2, Request $request)
    {
        //mudar parametros materialDidatico, nome e local

        //*******  FALTA LÓGICA E VALIDAÇÃO NOME **********************//
        MaterialDidatico::findOrFail($id2)->update(['nome' => $request->name, 'endArq' => $request->arquivo]);

        return  redirect("/disciplinaShow/{$id}")->with('msg5', 'Material Didático Editado com sucesso!');

        //return  redirect("/home/" . $request->session()->get('idUsuario') )->with('msgEdit', 'Disciplina Editada com sucesso!');


    }


}
