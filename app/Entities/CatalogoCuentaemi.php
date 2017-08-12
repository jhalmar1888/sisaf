<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class CatalogoCuentaemi extends Model
{
    protected $table = 'catalogocuentasemi';
    public $timestamps = false;

    public function getEstadoAttribute()
    {
        if ($this->activo == true) return 'Activado';
        else return 'Inactivo';
    }
}
