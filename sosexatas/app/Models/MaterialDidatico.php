<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDidatico extends Model
{
    use HasFactory;

    protected $table = "materialdidatico";
    protected $fillable =   [
                'idMat',
                'nome',
                'endArq',
                'fk_Topico_id',
                            ];
    protected $primaryKey = 'idMat';
    public $incrementing = true;

    public $timestamps = false;

    public function material(){
        return $this->belongsTo('App\Models\Topico');
    }
}
