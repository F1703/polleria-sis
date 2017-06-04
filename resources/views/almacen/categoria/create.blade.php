@extends('layouts.admin')
@section('contenido')
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <h3>Nueva Categoria</h3>
      @if (count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {!!Form::open(array('url'=>'almacen/categoria','method'=>'POST','autocomplete'=>'off'))!!}
      {!!Form::token()!!}
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="" class="form-control" placeholder="Nombre ...">
      </div>

      <div class="form-group">
        <label for="descripcion">Descripcon</label>
        <input type="text" name="descripcion" value="" class="form-control" placeholder="Descripcion ...">
      </div>
      <div class="form-group">
        <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
        <button type="reset" name="cancelar" class="btn btn-danger">Cancelar</button>
      </div>
      {!!Form::close()!!}
    </div>
  </div>
@endsection
