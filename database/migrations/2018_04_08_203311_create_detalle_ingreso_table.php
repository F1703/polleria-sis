<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIngresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingreso', function (Blueprint $table) {
            //
            $table->increments('iddetalle_ingreso');
            $table->integer('idingreso')->unsigned();
            $table->integer('idarticulo')->unsigned();
            $table->string('cantidad');
            $table->decimal('precio_compra',11,2);
            $table->decimal('precio_venta',11,2);
            $table->timestamps();

            $table->foreign('idingreso')->references('idingreso')->on('ingreso')->onDelete('cascade');
            $table->foreign('idarticulo')->references('idarticulo')->on('articulo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::drop('detalle_ingreso');
    }
}
