<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table = "topico";
    protected $fillable =   [
                                'idTop',
                                'nomeTop',
                                'fk_Disciplina_id'
                            ];
    protected $primaryKey = 'idTop';
    public $incrementing = true;
//    public $keyType = 'int';

    public $timestamps = false;

    use HasFactory;

    public function topico(){
        return $this->belongsTo('App\Models\Disciplina');
    }

    public function subtopicos(){
        return $this->hasMany('App\Models\Subtopico', 'fk_Topico_id');
    }

    public function materiais(){
        return $this->hasMany('App\Models\MaterialDidatico', 'fk_Topico_id');
    }

    public function quizzes(){
        return $this->hasMany('App\Models\Quiz', 'fk_Topico_id');
    }

}


