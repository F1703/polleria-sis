<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    //
    protected $table= "ingreso";
    protected $primaryKey ="idingreso";

    protected $filable = [
      'idproveedor',
      'tipo_comprobante',
      'serie_comprobante',
      'num_comprobante',
      'fecha_hora',
      'impuesto',
      'estado'
    ];
}
