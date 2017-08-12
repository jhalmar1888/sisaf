<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Contobjeto extends Model
{
    protected $table = 'contobjetos';
    public $timestamps = false;

    public function getTipoespAttribute()
    {
        if ($this->tipo == '1') return 'REPARTICION';
        if ($this->tipo == '2') return 'CUENTA';
        if ($this->tipo == '3') return 'SUBCUENTA';
    }
}
