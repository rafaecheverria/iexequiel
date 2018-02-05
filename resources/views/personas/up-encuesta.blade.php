<!-- notice modal -->
<div class="modal fade" id="up-encuesta-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>CONOCIMIENTOS PREVIOS</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="form-up-encuesta">
                            {{ csrf_field() }}
                            <input type="text" id="id-encuesta" name="id" hidden="true">
                            <div class="row">
                                <h6 class="label-on-left"><b>1.  ¿Tiene experiencia en Trekking? </b></h6>
                                <div class="col-md-8">
                                    <div class="form-group label-floating is-empty">
                                             <input id="p1" name="p1" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>2.  ¿Realiza Algún tipo de deporte?</b></h6>
                                <div class="col-md-8">
                                    <div class="form-group label-floating is-empty">
                                             <input id="p2" name="p2" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>3.  ¿Sufre algún tipo de lesión?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <div class="form-group label-floating is-empty">
                                             <input id="p3" name="p3" type="text" class="form-control" />
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>4.  ¿Sufre de alguna enfermedad?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <div class="form-group label-floating is-empty">
                                             <input id="p4" name="p4" type="text" class="form-control" />
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="col-sm-12 label-on-left"><b>5.  ¿Sufre de alérgias?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p5" name="p5" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>6.  ¿Medicamentos contraindicados?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p6" name="p6" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>7.  ¿Operaciones recientes?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p7" name="p7" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>8.  ¿Consume tabaco?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p8" name="p8" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>9. Debido a las inclemencias meteorológicas que se puedan presentar ¿tiene usted algún inconveniente en realizar la actividad con precipitaciones?</b></h6>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p9" name="p9" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <a href="#" id="update-encuesta" class="btn btn-primary pull-right">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->