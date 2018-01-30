<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="material-bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="material-bootstrap/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="material-bootstrap/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <link href="material-bootstrap/assets/css/style.css" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/toastr.css" rel="stylesheet" />


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 -->
</head>
<body style="background: url('material-bootstrap/assets/img/login.jpeg') fixed no-repeat 0 0;">
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form role="form" id="form_login">
                            {{ csrf_field() }}
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="purple">
                                        <h4 class="card-title">Iniciar Sesión</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button id="ingresar" class="btn btn-rose btn-simple btn-wd btn-lg">Entrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="material-bootstrap/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/material.min.js" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="material-bootstrap/assets/js/bootstrap-notify.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="material-bootstrap/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="material-bootstrap/assets/js/demo.js"></script>
<script src="material-bootstrap/assets/js/login.js"></script>
<script src="material-bootstrap/assets/js/toastr.js" type="text/javascript"></script>
<script type="text/javascript">
 
</script>

</body>
</html>
