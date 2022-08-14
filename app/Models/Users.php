<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $fillable = [
        'correo',
        'clave',
        'cedula',
        'role',
        'edad',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'diagnosticado',
        'sintomasAdicionales',
        'fiebre',
        'erupciones',
        'tos',
        'doloresMusculares',
        'dolorCabeza',
        'vomito'
    ];
}
