<?php namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $table= "pagos";
    protected $primaryKey ="idpago";

    protected $filable = [
      'idcuenta',
      'fecha',
      'monto',
      'estado'
    ];

    public function cuenta()
    {
        return $this->hasMany('polleria\Cuenta');
    } 
}
