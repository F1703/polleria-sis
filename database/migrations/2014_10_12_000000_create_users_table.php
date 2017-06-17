<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });



// TRIGGERS PARA LA DATABASE
// use polleriasis;
// DELIMITER //
// CREATE TRIGGER trigger_stockventa AFTER INSERT ON detalle_venta
// FOR EACH ROW BEGIN
// UPDATE articulo SET stock=stock-NEW.cantidad
// WHERE articulo.idarticulo=NEW.idarticulo;
// end

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
