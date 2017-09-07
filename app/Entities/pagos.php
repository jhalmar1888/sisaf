<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    protected $table='pagos';
    public $timestamps = false;

//    public function unidades()
//    {
//        return $this->belongsTo(unidades::class, 'id_unidad', 'id');
//    }

    public function getMonedasAttribute()
    {
        if ($this->nivel == 1) return 'Bolivianos';
        else return 'Dolares';
    }
    public function getNivelsAttribute()
    {
        if ($this->nivel == 1) return 'nivel Titulo';
        else return 'Nivel Registro';
    }
    public function getControlPagosAttribute()
    {
        if ($this->nivel == 1) return 'Fijo';
        else return 'Programado';
    }
    public function getAplicaBecasAttribute()
    {
        if ($this->nivel == 1) return 'Si';
        else return 'No';
    }
    public function getAplicaCantidadsAttribute()
    {
        if ($this->nivel == 1) return 'Si';
        else return 'No';
    }
    public function getAplicaMultasAttribute()
    {
        if ($this->nivel == 1) return 'Si';
        else return 'No';
    }
}
