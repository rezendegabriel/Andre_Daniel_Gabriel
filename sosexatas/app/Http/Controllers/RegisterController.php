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

    public function registerSubject()
    {
        return view('\registerSubject');
    }

    public function registerTopic($id)
    {
        return view('\registerTopic', ['disciplinaID' => $id] );
    }

    public function registerSubTopic($idDisciplina, $idTopico)
    {
        return view('\registerSubTopic', ['disciplinaID' => $idDisciplina, 'topicoId' => $idTopico]);
    }

    public function registerStudyMaterial($id)
    {
        return view('\registerStudyMaterial', ['disciplinaID' => $id]);
    }

    public function storeSubject(Request $request)
    {

        $disciplina = new Disciplina();

        $disciplina->nomeDisc =$request->name;

        $disciplina->save();

        return  redirect("/home")->with('msg', 'Disciplina Adicionada com sucesso!');
    }

    public function storeTopic( $id, Request $request)
    {
        $topico = new Topico();

        $topico->nomeTop =$request->name;
        $topico->fk_Disciplina_id =$id;

        $topico->save();

        return  redirect("/disciplinaShow/{$id}")->with('msg', 'Tópico Adicionado com sucesso!');
    }

    public function storeSubTopic( $idDisciplina, $idTopico, Request $request)
    {

        $subtopico = new Subtopico();

        $subtopico->nomeSubTop =$request->name;
        $subtopico->fk_Topico_id =$idTopico;

        $subtopico->save();

        return  redirect("/disciplinaShow/{$idDisciplina}")->with('msg', 'Subtopico Adicionado com sucesso!');
    }

    public function storeStudyMaterial( $id, Request $request)
    {
        $nameFile = null;
 
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {
            
            $name = uniqid(date('HisYmd'));
    
            $extension = $request->image->extension();

            $nameFile = "{$name}.{$extension}";

            $upload = $request->image->storeAs('storage', $nameFile);

            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
    
        }

        $materialDidatico = new MaterialDidatico();


        $materialDidatico->nome =$request->name;
        $materialDidatico->endArq =$request->name;
        $materialDidatico->fk_Topico_id =$id;

        //$materialDidatico->save();

        return  redirect("/disciplinaShow/{$id}")->with('msg', 'Material Didático Adicionado com sucesso!');
    }
}
