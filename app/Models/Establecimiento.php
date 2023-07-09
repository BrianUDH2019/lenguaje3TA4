<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Modelo
{
    use HasFactory;
    protected $fillable = ["nombreEst","direccionEst","fechaEst","_toquen"];
}
