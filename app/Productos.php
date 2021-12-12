<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps = false;
    protected $table = "productos";
    protected $fillable = [
        'nombre','precio','stock','estatus','id_categoria'
    ];
}
