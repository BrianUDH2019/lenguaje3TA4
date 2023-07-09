<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ["nombreEst","direccionEst","fechaEst","_token"];
    
}