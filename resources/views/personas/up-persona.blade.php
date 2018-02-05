<!-- notice modal -->
<div class="modal fade" id="up-persona-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>DATOS PERSONALES</h6>
            </div>
            <div class="modal-body">
                <div class="row">
        <div class="col-md-12">
            <form role="form" id="form-user-up">
            {{ csrf_field() }}
                <input id="id" name="id" hidden="true" />
                <div class="content">
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="input-group">
                            <span class="input-group-addon">
                                
                            </span>
                            <input type="text" id="rut" name="rut" class="form-control" placeholder="Rut">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                            <span class="input-group-addon">
                               
                            </span>
                            <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Nombres">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                            <span class="input-group-addon">
                               
                            </span>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos">
                        </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="input-group">
                            <span class="input-group-addon">
                                
                            </span>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="input-group">
                            <span class="input-group-addon">
                               
                            </span>
                            <input type="number" id="peso" name="peso" class="form-control" placeholder="Peso">
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                            <span class="input-group-addon">
                               
                            </span>
                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="input-group">
                                <span class="input-group-addon">
                                    
                                </span>
                                <input type="text" id="nacimiento" name="nacimiento" class="form-control fecha-nacimiento" placeholder="Fecha de Nacimiento" readonly="true" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                            <span class="input-group-addon">
                                
                            </span>
                            <select id="nacionalidad" name="nacionalidad" data-style="select-with-transition" class="form-control selectpicker" data-live-search="true">
                                <option value="">-- Seleccione Nacionalidad --</option>
                                <option value="chileno">Chileno</option>
                                <option value="argentino">Argentino</option>
                                <option value="peruano">Peruano</option>
                                <option value="uruguayo">Uruguayo</option>
                                <option value="paraguayo">Paraguayo</option>
                                <option value="brasileno">Brasileño</option>
                                <option>Otro</option>
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
                <a href="#" id="update-user" class="btn btn-primary pull-right">Actualizar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->