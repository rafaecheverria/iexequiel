<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="material-bootstrap/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="material-bootstrap/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Material Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link href="material-bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/material-kit.css" rel="stylesheet"/>
    <link href="material-bootstrap/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/demo.css" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/style.css" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/toastr.css" rel="stylesheet" />


</head>

<body class="index-page">
 <div class="section section-full-screen" style="background: url('material-bootstrap/assets/img/login.jpeg') fixed no-repeat 0 0;">
            <div class="container-fluid">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="card card-signup">
                            <form role="form" id="form-user">
                            {{ csrf_field() }}
                                <div class="header header-primary text-center">
                                    <h4>FORMULARIO DATOS PERSONALES</h4>
                                </div>
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
                                            <input type="text" id="nacimiento" name="nacimiento" class="form-control" placeholder="Fecha de Nacimiento" data-date-format="yyyy-mm-dd" readonly="true" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                            </span>
                                            <select id="nacionalidad" name="nacionalidad" class="form-control">
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
                            <div class="footer text-left">
                                <a href="#" id="enviar_datos" class="btn btn-simple btn-primary btn-md">Llenar Formulario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
    <script src="material-bootstrap/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="material-bootstrap/assets/js/material-kit.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/bootstrap-notify.js"></script>
    <script src="material-bootstrap/assets/js/ajax.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/toastr.js" type="text/javascript"></script>
    <script type="text/javascript">

    </script>
</html>
@include('principal.modal')