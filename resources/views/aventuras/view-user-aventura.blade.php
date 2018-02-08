<!-- notice modal -->
<div class="modal fade" id="view-user-aventura-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>LISTA DE PERSONAS DE LA AVENTURA</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                      <div class="material-datatables">
                            <table id="userAventuras" class="table table-responsive table-striped table-no-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apeliidos</th>
                                        <th>Teléfono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
                        </div>
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