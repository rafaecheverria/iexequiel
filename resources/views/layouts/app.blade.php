<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <title>Material Dashboard by Creative Tim</title>
    
    <meta name="viewport" content="width=device-width" />
    <link href="material-bootstrap/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="material-bootstrap/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link href="material-bootstrap/assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            @include('layouts.navbar')
            @yield('content')
        </div>
    </div>
</body>
<script src="material-bootstrap/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/material.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="material-bootstrap/assets/js/material-dashboard.js?v=1.2.0"></script>
<script src="material-bootstrap/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/bootstrap-notify.js"></script>
<script src="material-bootstrap/assets/js/jquery.datatables.js"></script>
<script src="material-bootstrap/assets/js/toastr.js" type="text/javascript"></script>
<script src="material-bootstrap/assets/js/listas.js"></script>
<script src="material-bootstrap/assets/js/ajax.js" type="text/javascript"></script>
<script type="text/javascript">

</script>
</html>