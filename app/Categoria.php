<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table= "categoria";
    protected $primaryKey ="idcategoria";

    protected $filable = ['nombre','descripcion','condicion'];

}
