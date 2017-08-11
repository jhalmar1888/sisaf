<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Prregistro extends Model
{
    protected $table = 'prregistros';
    public $timestamps = false;

    public function objeto()
    {
        return $this->belongsTo(Probjeto::class, 'id_probjeto', 'id');
    }
}
