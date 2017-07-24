<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $table = 'materiales';

    public function partida()
    {
        return $this->belongsTo(Partida::class,'id_partida', 'id');
    }

    public function tipounidad()
    {
        return $this->belongsTo(TipoUnidad::class, 'id_tipounidad', 'id');
    }
}
