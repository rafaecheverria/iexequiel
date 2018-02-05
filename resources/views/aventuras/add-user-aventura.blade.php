<!-- notice modal -->
<div class="modal fade" id="add-user-aventura-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>AGREGAR PERSONAS A LA AVENTURA</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" id="form-add-user-aventura">
                        {{ csrf_field() }}
                            <input id="id_av" name="id" hidden="true" />
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <select id="select-add-user-aventura" name="add_user_aventura[]" data-style="select-with-transition" class="form-control selectpicker" data-live-search="true" multiple="multiple">
                                                 @foreach($personas as $persona)
                                                    <option value="{{ $persona->id }}">{{ $persona->apellidos }} {{ $persona->nombres }}</option>
                                                @endforeach
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <a href="#" class="btn btn-warning pull-right" data-dismiss="modal">Cancelar</a>
                <a href="#" id="btn-add-user-aventura" class="btn btn-primary pull-right">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->