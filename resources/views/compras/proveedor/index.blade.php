@extends('layouts.admin')
@section('contenido')

  <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Proveedor <a href="proveedor/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('compras.proveedor.search')
      </div>
  </div>

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table responsibe">
        <table class="table table-striped table-condensed table-hover table-bordered">
          <thead>
            <th>Id</th>
            <th>Razon Social</th>
            <th>CUIT.</th>
            <th>Telefono</th>
            <th>Email</th>

            <th>Opciones</th>
          </thead>
          @foreach ($personas as $per)
            <tr>
              <td>{{$per->idproveedor}}</td>
              <td>{{$per->razonsocial}}</td>
              <td>{{$per->cuit}}</td>
              <td>{{$per->telefono}}</td>
              <td>{{$per->email}}</td>
              <td>
                <a href="{{URL::action('ProveedorController@edit',$per->idproveedor)}}"><button class="btn btn-info">Editar</button></a>
                <a href="" data-target="#modal-delete-{{$per->idproveedor}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
              </td>
            </tr>
            @include('compras.proveedor.modal')
          @endforeach
        </table>
      </div>
      {{$personas->render()}}
    </div>
  </div>
@endsection
