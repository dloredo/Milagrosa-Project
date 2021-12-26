<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosServicios extends Model
{
    public $timestamps = false;
    protected $table = "productos_servicios";
    protected $fillable = [
        'nombre','precio','tipo', 'duracion' ,'stock','estatus'
    ];
}
