<div class="modal fade modal-slite-in-right" aria-hide="true" role="dialog" tabindex="-1" id="modal-delete-{{$categoria->idcategoria}}">
  {!!Form::open(array('action'=>array('CategoriaController@destroy',$categoria->idcategoria),'method'=>'delete'))!!}
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
        <h4>Eliminar Categoria</h4>
      </div>
      <div class="modal-body">
        <p>Confirme si desea Eliminar categoria</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" >Confirmar</button>
      </div>
    </div>
  </div>
  {!!Form::close()!!}

</div>
