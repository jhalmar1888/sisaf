<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ComprobanteIngreso extends Model
{
    protected $table = 'compingresos';
    public $timestamps = false;

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor', 'id');
    }
}
