<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtopico extends Model
{
    use HasFactory;

    protected $table = "subtopico";
    protected $fillable =   [
                'idSubTop',
                'nomeSubTop',
                'fk_Topico_id',
                            ];
    protected $primaryKey = 'idSubTop';
    public $incrementing = true;

    public $timestamps = false;

    public function topico(){
        return $this->belongsTo('App\Models\Topico');
    }
}
