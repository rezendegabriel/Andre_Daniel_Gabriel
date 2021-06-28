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

}


