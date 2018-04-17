<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function(Blueprint $table)
        {
            $table->increments('idpago');
            $table->float('monto');
            $table->date('fecha');
            $table->string('estado');
            $table->integer('idcuenta')->unsigned();
            $table->foreign('idcuenta')->references('idcuenta')->on('cuentas')->ondelete('cascade');          
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
        Schema::drop('pagos');
    }
}