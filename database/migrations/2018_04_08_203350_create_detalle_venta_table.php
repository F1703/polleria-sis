<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            //
            $table->increments('id');
            $table->integer('idarticulo');
            $table->integer('idventa');
            $table->string('cantidad');
            $table->decimal('precio_venta',11,2);
            $table->decimal('descuento',11,2);
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



        Schema::drop('detalle_venta');

    }
}
