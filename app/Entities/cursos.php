<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $table = 'cursotes';
    public $timestamps = false;

    public function carrera()
    {
        return $this->belongsTo(carrera::class, 'id_carrera', 'id');
    }
}
