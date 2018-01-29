<!-- notice modal -->
<div class="modal fade" id="add_question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>CONOCIMIENTOS PREVIOS</h6>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="form-question">
                            {{ csrf_field() }}
                            <input type="text" id="user_id" name="user_id">
                            <div class="row">
                                <h6 class="label-on-left"><b>1.  ¿Tiene experiencia en Trekking? </b></h6>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p1-si" name="p1" value="si"> Si </label>
                                            <label><input type="radio" id="p1-no" name="p1" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>2.  ¿Realiza Algún tipo de deporte?</b></h6>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" name="p2" value="si"> Si </label>
                                            <label><input type="radio" name="p2" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>3.  ¿Sufre algún tipo de lesión?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p3-si" name="p3"> Si </label>
                                            <label><input type="radio" id="p3-no" name="p3" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p3-text" name="p3" type="text" class="form-control" placeholder="Especifíque" disabled />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>4.  ¿Sufre de alguna enfermedad?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p4-si" name="p4" value="si"> Si </label>
                                            <label><input type="radio" id="p4-no" name="p4" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p4-text" name="p4" type="text" class="form-control" placeholder="¿Cuál?" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="col-sm-12 label-on-left"><b>5.  ¿Sufre de alérgias?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p5-si" name="p5" value="si"> Si </label>
                                            <label><input type="radio" id="p5-no" name="p5" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p5-text" name="p5" type="text" class="form-control" placeholder="¿Cuál?" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>6.  ¿Medicamentos contraindicados?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p6-si" name="p6" value="si"> Si </label>
                                            <label><input type="radio" id="p6-no" name="p6" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p6-text" name="p6" type="text" class="form-control" placeholder="¿Cuáles?" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>7.  ¿Operaciones recientes?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p7-si" name="p7" value="si"> Si </label>
                                            <label><input type="radio" id="p7-no" name="p7" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p7-text" name="p7" type="text" class="form-control" placeholder="Especifíque" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>8.  ¿Consume tabaco?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" name="p8" value="si"> Si </label>
                                            <label><input type="radio" name="p8" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <h6 class="label-on-left"><b>9. Debido a las inclemencias meteorológicas que se puedan presentar ¿tiene usted algún inconveniente en realizar la actividad con precipitaciones?</b></h6>
                                <div class="col-sm-3">
                                    <div class="form-group label-floating is-empty">
                                        <div class="radio">
                                            <label><input type="radio" id="p9-si" name="p9" value="si"> Si </label>
                                            <label><input type="radio" id="p9-no" name="p9" value="no"> No </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group label-floating is-empty">
                                        <input id="p9-text" name="p9" type="text" class="form-control" placeholder="¿Porqué?" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <a href="#" id="save-question" class="btn btn-primary pull-right">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->