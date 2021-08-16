<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = "quiz";
    protected $fillable =   [
                'idQuiz',
                'nome',
                'fk_Topico_id',
                            ];
    protected $primaryKey = 'idQuiz';
    public $incrementing = true;

    public $timestamps = false;

    public function pertence(){
        return $this->belongsTo('App\Models\Topico');
    }

    public function perguntas(){
        return $this->hasMany('App\Models\Pergunta', 'fk_Quiz_id');
    }
}
