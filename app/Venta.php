<?php namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table= "ventas";
    protected $primaryKey ="idventa";

    protected $filable = [
     // 'idcliente',
      'fecha',
      'total_venta',
      'estado'
    ];
    public function detalleVenta()
    {
        return $this->hasMany('App\DetalleVenta');
    }
    public function cuenta()
    {

        return $this->belongsToMany('polleria\Cuenta');
    } 
}
