<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = "disciplina";
    protected $fillable =   [
                                'idDisc',
                                'nomeDisc'
                            ];
    protected $primaryKey = 'idDisc';
    public $incrementing = true;
//    public $keyType = 'int';

    public $timestamps = false;

    use HasFactory;

    public function topicos(){
        return $this->hasMany('App\Models\Topico', 'fk_Disciplina_id');
    }

    public function disciplina(){
        return $this->belongsTo('App\Models\User');
    }

    public function disciplinas(){
        return $this->belongsToMany('App\Models\User');
    }
}


