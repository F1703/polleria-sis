<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{

  protected $table= "articulo";
  protected $primaryKey ="idarticulo";

  protected $filable = ['idcategoria','codigo','nombre','stock','descripcion','imagen','estado'];

}
