<!-- notice modal -->
<div class="modal fade" id="add-aventura-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>INGRESAR UNA AVENTURA</h6>
            </div>
            <div class="modal-body">
                <div class="row">
        <div class="col-md-12">
            <form role="form" id="form-aventura-add">
            {{ csrf_field() }}
                <input id="id" name="id" hidden="true" />
                <div class="content">
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="input-group">
                            <span class="input-group-addon">
                                
                            </span>
                            <input type="text" id="fecha_add" name="fecha" class="form-control" placeholder="Fecha">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                            <span class="input-group-addon">
                               
                            </span>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Lugar">
                        </div>
                        </div>                   
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
            <div class="modal-footer text-center">
                <a href="#" id="add-aventura" class="btn btn-primary pull-right">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->