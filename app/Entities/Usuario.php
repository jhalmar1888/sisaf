<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    public $timestamps = false;

    public function rol()
    {
        return $this->hasOne(Rol::class, 'id', 'id_rol');
    }

    public function modulo()
    {
        return $this->hasOne(Modulo::class, 'id', 'id_modulo');
    }

    public function getEstadoAttribute()
    {
        if ($this->activo == true) return 'Activado';
        else return 'Inactivo';
    }

    public static function habilitacion($numero)
    {
        if ($numero == 1) return 'Activado';
        else return 'Inactivo';
    }
}
