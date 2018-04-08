<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            //
            $table->increments('idventa');
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->datetime('fecha_hora');
            $table->decimal('impuesto',4,2);
            $table->decimal('total_venta',11,2);
            $table->string('estado');
            $table->integer('idpersona')->unsigned();

            $table->foreign('idpersona')->references('idpersona')->on('persona')->onDelete('cascade');
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


        Schema::drop('venta');
    }
}
