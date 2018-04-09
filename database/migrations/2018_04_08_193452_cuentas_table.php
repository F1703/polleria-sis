<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function(Blueprint $table)
        {
            $table->increments('idcuenta');
            $table->float('saldo');
            $table->integer('idcliente')->unsigned();
            $table->foreign('idcliente')->references('id')->on('clientes')->ondelete('cascade');
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
        Schema::drop('cuentas');
    }
}
