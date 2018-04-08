<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso', function (Blueprint $table) {
            //
            $table->increments('idingreso');
            $table->integer('idproveedor')->unsigned();
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->datetime('fecha_hora');
            $table->decimal('impuesto',4,2);
            $table->string('estado');
            $table->timestamps();

            $table->foreign('idproveedor')->references('idpersona')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::drop('ingreso');
    }
}
