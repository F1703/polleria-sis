<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            //
            $table->increments('idarticulo');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('stock');
            $table->string('descripcion');
            $table->string('estado');
            $table->string('imagen');
            $table->integer('idcategoria')->unsigned();
            $table->timestamps();

            $table->foreign('idcategoria')->references('idcategoria')->on('categoria')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {



        Schema::drop('articulo');
    }
}
