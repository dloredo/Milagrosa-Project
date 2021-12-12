<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nombre");
            $table->integer("precio");
            $table->integer("stock");

            
            $table->integer("estatus");

            $table->integer("id_categoria")->unsigned();
            $table->foreign("id_categoria")->references("id")->on("categorias");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}