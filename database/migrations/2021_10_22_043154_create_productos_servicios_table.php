<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_servicios', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nombre");
            $table->integer("precio");
            
            $table->string("tipo");
            $table->string("duracion");

            $table->integer("stock");
            
            $table->integer("estatus");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_servicios');
    }
}
