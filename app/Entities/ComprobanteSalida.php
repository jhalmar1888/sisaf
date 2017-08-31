<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ComprobanteSalida extends Model
{
    protected $table = 'compsalidas';
    public $timestamps = false;

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'id_unidad', 'id');
    }
}
