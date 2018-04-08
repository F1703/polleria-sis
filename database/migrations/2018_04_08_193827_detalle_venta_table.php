<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function(Blueprint $table)
        {
            $table->increments('iddetalle_venta');
            $table->integer('cantidad');
            $table->integer('descuento');
            $table->float('precio_venta');
            $table->integer('idventa')->unsigned();
            $table->foreign('idventa')->references('idventa')->on('ventas')->ondelete('cascade');
            $table->integer('idarticulo')->unsigned();
            $table->foreign('idarticulo')->references('idarticulo')->on('articulos')->ondelete('cascade');            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_venta');
    }
}
