<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    public $timestamps = false;

    public function nombreempleado()
    {
        $persona = Persona::findOrFail($this->id_persona);
        return $persona->paterno . ' ' . $persona->materno . ' ' . $persona->nombres;
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo', 'id');
    }

    public function getContratoAttribute()
    {
        if ($this->mcontrato = 'item') return 'Permanente';
        if ($this->mcontrato = 'eventual') return 'Eventual';
        if ($this->mcontrato = 'consultor') return 'Consultor en Linea';
    }

    public function getAfpespAttribute()
    {
        if ($this->afp == 'pre') return 'AFP Prevision';
        else return 'AFP Futuro';
    }
}
