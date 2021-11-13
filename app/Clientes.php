<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $timestamps = false;
    protected $table = "clientes";
    protected $fillable = [
        'nombres' , 'edad' , 'fecha_nacimiento' , 'telefono','sexo','enfermedad','saldo'
    ];
}
