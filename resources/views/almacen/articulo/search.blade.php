{!! Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" name="searchText" placeholder="buscar..." name="{{$searchText}}">
      <span class="input-group-btn">
        <button type="submit" name="button" class="btn btn-primary">Buscar</button>
      </span>
    </div>
  </div>
{!! Form::close()!!}
