<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentaVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_venta', function(Blueprint $table)
        {
            $table->increments('idCuenta_venta');
            $table->timestamps();
            $table->integer('idventa')->unsigned();
            $table->foreign('idventa')->references('idventa')->on('ventas')->ondelete('cascade');   
            $table->integer('idcuenta')->unsigned();
            $table->foreign('idcuenta')->references('idcuenta')->on('cuentas')->ondelete('cascade');         
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuenta_venta');
    }
}
