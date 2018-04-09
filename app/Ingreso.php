<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{ 
    //
    protected $table= "ingresos";
    protected $primaryKey ="idingreso";

    protected $filable = [
      'idproveedor',
      'fecha_hora',
      'total_ingreso',
      'estado'
    ];

    public function detalleIngreso()
    {
        return $this->hasMany('App\DetalleIngreso');
    }
    public function proveedor()
    {
        return $this->hasOne('App\Proveedor');
    }
}
