<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = "ventas";
    protected $fillable = [
        'id_cliente','total','cantidad_pagada','adeudo','forma_pago','estatus'
    ];
}
