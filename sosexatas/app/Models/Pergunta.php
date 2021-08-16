<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $table = "pergunta";
    protected $fillable =   [
                'idPerg',
                'enunciado',
                'opc1',
                'opc2',
                'opc3',
                'opc4',
                'opc5',
                'resposta',
                'fk_Quiz_id',
                            ];
    protected $primaryKey = 'idPerg';
    public $incrementing = true;

    public $timestamps = false;

    public function pertence(){
        return $this->belongsTo('App\Models\Quiz');
    }
}
