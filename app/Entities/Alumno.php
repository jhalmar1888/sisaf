<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    public $timestamps = false;

    public function beca()
    {
        return $this->belongsTo(Beca::class, 'id_beca', 'id');
    }
}
