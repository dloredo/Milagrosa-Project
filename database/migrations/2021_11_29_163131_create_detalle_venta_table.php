<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_venta")->unsigned();
            $table->foreign("id_venta")->references("id")->on("ventas");

            $table->integer("id_producto_servicio")->unsigned();
            $table->foreign("id_producto_servicio")->references("id")->on("productos_servicios");

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
        Schema::dropIfExists('detalle_venta');
    }
}
