<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_cliente")->unsigned();
            $table->foreign("id_cliente")->references("id")->on("clientes");
            $table->integer("total");
            $table->integer("cantidad_pagada");
            $table->integer("adeudo");
            $table->string("forma_pago");
            $table->integer("estatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
