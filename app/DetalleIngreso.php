<?php

namespace polleria;
// namespace App;
use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    //
    protected $table= "detalle_ingreso";
    protected $primaryKey ="iddetalle_ingreso";

    protected $fillable = [
      // 'nombre',
      'idarticulo',
      'idingreso',
      'cantidad',
      'precio_compra',
      'precio_venta'
    ];
}
