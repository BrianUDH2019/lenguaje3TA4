<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ["nombres","apellidos","pais"];
}