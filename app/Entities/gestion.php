<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class gestion extends Model
{
    protected $table = 'gestion';
    public $timestamps = false;

    public function getEstadosAttribute()
    {
//        dd($this->estado);
        if($this->estado == 0) return 'Pasado';
        else return 'Vigente';
    }
}
