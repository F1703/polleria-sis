<?php

namespace polleria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table= "categorias";
    protected $primaryKey ="idcategoria";

    protected $filable = ['nombre','descripcion','condicion'];


    public function articulo()
    {
        return $this->hasMany('App\Articulo');
    }
}
