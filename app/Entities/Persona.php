<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    public $timestamps = false;

    public function grado()
    {
        return $this->belongsTo(Grado::class, 'id_grado', 'id');
    }

    public function arma()
    {
        return $this->belongsTo(Arma::class, 'id_arma', 'id');
    }

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'id_especialidad', 'id');
    }

    public function sangre()
    {
        return $this->belongsTo(Sangre::class, 'id_sangre', 'id');
    }

    public function estadocivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'id_estadocivil', 'id');
    }

    public function getGeneroespAttribute()
    {
        if ($this->genero == 'masculino') return 'Masculino';
        else return 'Femenino';
    }
}
