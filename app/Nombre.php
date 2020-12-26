<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombre extends Model
{
    protected $fillable = 
    [
   'nombre',
   'apellido1',
   'apellido2',
   'papa',
   'mama',
   'hermano',
   'amigo',
   'amiga',
    ];
}
