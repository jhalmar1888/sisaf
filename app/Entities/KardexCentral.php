<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class KardexCentral extends Model
{
    protected $table = 'kardexcentral';
    public $timestamps = false;

    public function articulo()
    {
        return $this->hasOne(Material::class, 'id', 'id_material');
    }
}
