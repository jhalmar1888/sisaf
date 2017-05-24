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
}
