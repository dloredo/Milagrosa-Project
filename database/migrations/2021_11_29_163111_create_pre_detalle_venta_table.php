<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_detalle_venta', function (Blueprint $table) {
            $table->increments("id");

            $table->integer("id_producto")->unsigned();
            $table->foreign("id_producto")->references("id")->on("productos");

            $table->integer("id_servicio")->unsigned();
            $table->foreign("id_servicio")->references("id")->on("servicios");

            $table->integer("cantidad");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_detalle_venta');
    }
}
