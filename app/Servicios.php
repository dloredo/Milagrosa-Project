<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    public $timestamps = false;
    protected $table = "servicios";
    protected $fillable = [
        'nombre' , 'duracion' , 'precio', 'estatus'
    ];
}
