<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class KardexIngreso extends Model
{
    protected $table = 'kardexingresos';
    public $timestamps = false;

    public function articulo()
    {
        return $this->belongsTo(Material::class, 'id_material', 'id');
    }
}
