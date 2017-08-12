<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Prcomprobante extends Model
{
    protected $table = 'prcomprobantes';
    public $timestamps = false;

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'id_unidad', 'id');
    }
}
