<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    //
    protected $table= "detalle_ingreso";
    protected $primaryKey ="iddetalle_ingreso";

    protected $filable = [
       'cantidad',
      'idarticulo',
      'idingreso',
      'cantidad',
      'precio_compra',
      'precio_venta'
    ]; 
}
