<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Probjeto extends Model
{
    protected $table = 'probjetos';
    public $timestamps = false;

    public function getTipoespAttribute()
    {
        if ($this->tipo == '1') return 'REPARTICION';
        if ($this->tipo == '2') return 'CATPROG';
        if ($this->tipo == '3') return 'PARTIDA';
    }
}
