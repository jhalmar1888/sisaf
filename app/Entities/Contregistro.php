<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Contregistro extends Model
{
    protected $table = 'contregistros';
    public $timestamps = false;

    public function objeto()
    {
        return $this->belongsTo(Contobjeto::class, 'id_contobjeto', 'id');
    }
}
