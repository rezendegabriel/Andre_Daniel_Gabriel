<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{   
    protected $table = "avatar";
    protected $fillable =   [
                                'idAvatar',
                                'nome',
                                'endImg'
                            ];
    protected $primaryKey = 'idAvatar';
    public $incrementing = true;

    public $timestamps = false;

    use HasFactory;

    public function avatar(){
        return $this->belongsTo('App\Models\User');
    }
}
