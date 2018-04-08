<?php

namespace polleria;
// namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table= 'venta';
    protected $primaryKey ='idventa';

    protected $fillable = [
      'idcliente',
      'tipo_comprobante',
      'serie_comprobante',
      'num_comprobante',
      'fecha_hora',
      'impuesto',
      'total_venta',
      'estado'
    ];
}
