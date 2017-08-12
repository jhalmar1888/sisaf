<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Co_Subcuenta extends Model
{
    protected $table = 'co_subcuentas';
    public $timestamps = false;

    public function getEstadoAttribute()
    {
        if ($this->activo == true) return 'Activado';
        else return 'Inactivo';
    }
}
