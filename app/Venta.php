<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table= "ventas";
    protected $primaryKey ="idventa";

    protected $filable = [
      'idcliente',
      'fecha_hora',
      'total_venta',
      'estado'
    ];
}
