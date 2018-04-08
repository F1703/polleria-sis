<?php

namespace polleria;
// namespace App;


use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    //
    protected $table= "ingreso";
    protected $primaryKey ="idingreso";

    protected $fillable = [
      'idproveedor',
      'tipo_comprobante',
      'serie_comprobante',
      'num_comprobante',
      'fecha_hora',
      'impuesto',
      'estado'
    ];
}
