<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreVenta extends Model
{
    public $timestamps = false;
    protected $table = "pre_detalle_venta";
    protected $fillable = [
        'id_producto_servicio','cantidad'
    ];
}
