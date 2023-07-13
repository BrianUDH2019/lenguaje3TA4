<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Modelo
{
    use HasFactory;
    protected $fillable = ["nombreEst","direccionEst","fechaEst","responsable_id","_toquen"];

    public function responsables()
    {
        return $this->belongsTo(Responsable::class,'reponsable_id','id');
    }
}
