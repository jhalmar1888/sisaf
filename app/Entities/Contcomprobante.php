<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Contcomprobante extends Model
{
    protected $table = 'contcomprobantes';
    public $timestamps = false;

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'id_unidad', 'id');
    }
}
