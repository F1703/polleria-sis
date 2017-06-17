@extends('layouts.admin')
@section('contenido')
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
      <h3>Nuevo Venta</h3>
      @if (count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
  </div>


  {!!Form::open(array('url'=>'ventas/venta','method'=>'POST','autocomplete'=>'off'))!!}
  {!!Form::token()!!}
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
          <label for="idpersona">Cliente</label>
          <select class="form-control selectpicker" data-live-search="true" name="idpersona" id="idpersona">
            @foreach ($personas as $persona)
              <option value="{{$persona->idpersona}}">{{$persona->nombre  }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label for="tipo_comprobante">Comprobante</label>
          <select class="form-control" name="tipo_comprobante">
            <option value="Boleta">Boleta</option>
            <option value="Factura">Factura</option>
            <option value="Tikect">Tikect</option>
          </select>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label for="serie_comprobante">Serie Comprobante</label>
          <input type="text" name="serie_comprobante" value="{{old('serie_comprobante')}}" class="form-control" placeholder="serie comprobante ...">
        </div>
      </div>


      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
          <label for="num_comprobante">Num Comprobante</label>
          <input type="text" name="num_comprobante" value="{{old('num_comprobante')}}" class="form-control" placeholder="num comprobante ..." required >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
              <label for="">Articulo</label>
              <select class="form-control selectpicker" data-live-search="true" name="pidarticulo" id="pidarticulo">
                @foreach ($articulos as $articulo)
                  <option value="{{$articulo->idarticulo}}_{{$articulo->stock}}_{{$articulo->precio_promedio}}">{{$articulo->articulo}}</option>
                @endforeach
              </select>
            </div>
          </div>
          {{-- cantidad --}}
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
              <label for="pcantidad">Cantidad</label>
              <input type="number" name="pcantidad" value="" id="pcantidad" class="form-control" placeholder="cantidad">
            </div>
          </div>
          {{-- stok --}}
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
              <label for="pstock">Stock</label>
              <input type="number" name="pstock" value="" id="pstock" class="form-control" placeholder="stock" disabled>
            </div>
          </div>
          {{-- precioventa --}}
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
              <label for="pprecio_venta">Precio Venta</label>
              <input type="number" disabled name="pprecio_venta" value="" id="pprecio_venta" class="form-control" placeholder="P. Venta">
            </div>
          </div>
          {{-- descuento --}}
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
              <label for="pdescuento">Descuento</label>
              <input type="number" name="pdescuento"  id="pdescuento" value="0" class="form-control" placeholder="Descuento">
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
              <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
            </div>
          </div>

          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <table class="table table-striped table-bordered table-condensed table-hover" id="detalles">
              <thead style="background-color:#A9D0F5">
                <th>Opciones</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio Venta</th>
                <th>Descuento</th>
                <th>Subtotal</th>
              </thead>
              <tfoot>
                <th>TOTAL</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><h4 id="total">$ 0.00</h4><input type="hidden" name="total_venta" id="total_venta" ></th>
              </tfoot>
              <tbody>

              </tbody>
            </table>
          </div>

        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="guardar">
        <div class="form-group">
          <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
          <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
          <button type="reset" name="cancelar" class="btn btn-danger">Cancelar</button>
        </div>
      </div>
    </div>
  {!!Form::close()!!}


  @push('scripts')
    <script>
      $(document).ready(function(){
        $('#bt_add').click(function(){
          agregar();
        })
      });

      total =0;
      var contador=0;
      subtotal=[];
      $("#guardar").hide();
      $("#pidarticulo").change(mostrarValores);

      function mostrarValores(){
        datosart=document.getElementById('pidarticulo').value.split('_');
        $("#pprecio_venta").val(datosart[2]);
        $("#pstock").val(datosart[1]);
      }

      function agregar(){
        datosart=document.getElementById('pidarticulo').value.split('_');

          idarticulo=datosart[0];
          articulo=$("#pidarticulo option:selected").text();
          cantidad=$("#pcantidad").val();
          descuento=$("#pdescuento").val();
          stock=$("#pstock").val();
          precio_venta=$("#pprecio_venta").val();
          if (idarticulo!="" && cantidad!="" && cantidad>0 && descuento!="" && precio_venta!="") {
            if (stock>=cantidad) {
              subtotal[contador]=(cantidad*precio_venta-descuento);
              total=total+subtotal[contador];
              var fila='<tr class="selected" id="fila'+contador+'"> '+
                          '<td><button type="button" class="btn btn-warning" onclick="eliminar('+contador+');">X</button> </td>'+
                          '<td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</input></td>'+
                          '<td><input type="number" name="cantidad[]" value="'+cantidad+'"></td>'+
                          '<td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td>'+
                          '<td><input type="number" name="descuento[]" value="'+descuento+'"></td>'+
                          '<td>'+subtotal[contador]+'</td>'+
                      '</tr>';
              contador++;
              limpiar();
              $("#total").html("$ "+total);
              $("#total_venta").val(total);
              evaluar();
              $("#detalles").append(fila);
            }else{
              alert('La cantidad a vender supera el stock.');
            }
          }
          else{
            alert("Error al ingresar el detalle de la venta.");
          }
      }

      function limpiar(){
        $("#pcantidad").val("");
        $("#pdescuento").val("");
        $("#pprecio_venta").val("");
      }
      function evaluar(){
        if(total>0){
          $("#guardar").show();
        }else{
          $("#guardar").hide();
        }
      }
      function eliminar(index){
        total=total-subtotal[index];
        $("#total").html("$ "+total);
        $("#total_venta").val(total);
        $("#fila"+index).remove();
        evaluar();
      }

    </script>
  @endpush
@endsection
