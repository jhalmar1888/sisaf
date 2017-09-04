<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Rhplanilla extends Model
{
    protected $table = 'rhplanillas';
    public $timestamps = false;

    public function getNombrepersonaAttribute()
    {
        $persona = Persona::findOrFail($this->id_persona);
        return $persona->paterno . ' ' . $persona->materno . ' ' . $persona->nombres;
    }

    public function empleado()
    {
        $empleado = Empleado::where('id_persona', $this->id_persona)->first();
        return $empleado;
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'id');
    }

    public function getBonoantAttribute()
    {
        $anos = $this->fdia/360 + $this->fmes/12 + $this->fano;
        $bono = 0;
        if ($anos <= 2) $bono = 0;
        elseif ($anos>2 && $anos<=5)
        {
            $bono = 0.05 * $this->salariobasico;
        }
        elseif ($anos>5 && $anos<=8)
        {
            $bono = 0.11 * $this->salariobasico;
        }
        elseif ($anos>8 && $anos<=11)
        {
            $bono = 0.18 * $this->salariobasico;
        }
        elseif ($anos>11 && $anos<=15)
        {
            $bono = 0.26 * $this->salariobasico;
        }
        elseif ($anos>15 && $anos<=20)
        {
            $bono = 0.34 * $this->salariobasico;
        }
        elseif ($anos>20 && $anos<=25)
        {
            $bono = 0.42 * $this->salariobasico;
        }
        elseif ($anos>25)
        {
            $bono = 0.50 * $this->salariobasico;
        }

        return $bono;
    }

    public function getTotalganadoAttribute()
    {
        return $this->empleado()->hbasico + $this->getBonoantAttribute() + $this->reintegro;
    }

    public function getAportesolidarioAttribute()
    {
        return $this->getTotalganadoAttribute() * 0.005;
    }

    public function getCuentaindividualAttribute()
    {
        return $this->getTotalganadoAttribute() * 0.10;
    }

    public function getRiesgocompartidoAttribute()
    {
        return $this->getTotalganadoAttribute() * 0.0171;
    }

    public function getComisionafpAttribute()
    {
        return $this->getTotalganadoAttribute() * 0.005;
    }

    public function getTotalafpAttribute()
    {
        return $this->getAportesolidarioAttribute() +
            $this->getCuentaindividualAttribute() +
            $this->getRiesgocompartidoAttribute() +
            $this->getComisionafpAttribute();
    }

    public function getIvaAttribute()
    {
        $max = $this->salariobasico * 4;
        if ($this->getTotalganadoAttribute() > $max) return $this->getTotalganadoAttribute() * 0.13;
        else return 0;
    }

    public function getAportemugebushAttribute()
    {
        if ($this->prestamo > 0) return $this->getTotalganadoAttribute() * 0.0345;
        else return 0;
    }

    public function getDescuentoatrasoAttribute()
    {
        return $this->atrasos / $this->dias * $this->empleado()->hbasico;
    }

    public function getTotaldescuentosAttribute()
    {
        return $this->getIvaAttribute() +
            $this->getAportemugebushAttribute() +
            $this->prestamo +
            $this->getDescuentoatrasoAttribute() +
            $this->otros +
            $this->getTotalafpAttribute();
    }

    public function getLiquidopagableAttribute()
    {
        return $this->getTotalganadoAttribute() - $this->getTotaldescuentosAttribute();
    }
}
