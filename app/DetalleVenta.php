<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{ 
    //
    protected $table= "detalle_venta";
    protected $primaryKey ="iddetalle_venta";

    protected $filable = [
      'idventa',
      'idarticulo',
      'cantidad',
      'precio_venta',
      'descuento'
    ];

    public function articulo()
    {
        return $this->hasOne('App\Articulo');
    }
    public function venta()
    {
        return $this->belongsTo('App\Venta');
    }
}
