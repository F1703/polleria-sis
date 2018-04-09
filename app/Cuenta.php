<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{

  protected $table= "cuentas";
  protected $primaryKey ="idcuenta";
 
  protected $filable = [
  'idcliente',
  'saldo',
  'idventa'
  ];

}