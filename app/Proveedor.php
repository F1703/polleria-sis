<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table= "proveedors";
    protected $primaryKey ="idproveedor";

    protected $filable = [
      'razonsocial',
      'cuit',
      'direccion',
      'telefono',
      'email',
      'estado'
    ];
    public function ingreso()
    {
        return $this->belongsTo('App\Ingreso');
    }
}
