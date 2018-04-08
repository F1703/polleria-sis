<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function(Blueprint $table)
        {
            $table->increments('idingreso');
            $table->float('total_ingreso');
            $table->date('fecha');
            $table->integer('idproveedor')->unsigned();
            $table->foreign('idproveedor')->references('idproveedor')->on('proveedors')->ondelete('cascade');
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
        Schema::drop('ingresos');
    }
}
