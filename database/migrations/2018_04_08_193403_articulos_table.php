<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('idarticulo');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('stock');
            $table->string('estado');
            $table->string('imagen');
            $table->integer('idcategoria')->unsigned();
            $table->foreign('idcategoria')->references('idcategoria')->on('categorias')->ondelete('cascade');
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
        Schema::drop('articulos');
    }
}
