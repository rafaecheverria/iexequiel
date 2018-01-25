<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="material-bootstrap/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="material-bootstrap/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Material Kit by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="material-bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/material-kit.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="material-bootstrap/assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
 <div class="section section-full-screen" style="background-image: url('material-bootstrap/assets/img/fondo.jpg'); background-size: cover; min-height: 700px;">
            <div class="container-fluid">
                    <div class="col-md-4 col-md-offset-7">
                        <div class="card card-signup">
                            <form role="form" id="form_user">
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
                                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                            </span>
                                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
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
                                            <input type="text" id="peso" name="peso" class="form-control" placeholder="Peso">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                            </span>
                                            <input type="text" id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Nacionalidad">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"> 
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                            </span>
                                            <input type="text" id="nacimiento" name="nacimiento" class="form-control" placeholder="Fecha de Nacimiento">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                            </span>
                                            <input type="text" id="edad" name="edad" class="form-control" placeholder="Edad">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="footer text-left">
                                <a href="#" id="enviar_datos" class="btn btn-simple btn-primary btn-md">Enviar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
    <!--   Core JS Files   -->
    <script src="material-bootstrap/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="material-bootstrap/assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="material-bootstrap/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="material-bootstrap/assets/js/material-kit.js" type="text/javascript"></script>
    <script src="material-bootstrap/assets/js/ajax.js" type="text/javascript"></script>

    <script type="text/javascript">

    </script>
</html>
