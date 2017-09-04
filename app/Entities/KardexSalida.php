<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class KardexSalida extends Model
{
    protected $table = 'kardexsalidas';
    public $timestamps = false;

    public function articulo()
    {
        return $this->belongsTo(Material::class, 'id_material', 'id');
    }
}
