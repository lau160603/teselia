<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../admin/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="../admin/public/css/blue.css">
    <link rel="stylesheet" href="../admin/public/img/Teselia.png">
    <link rel="stylesheet" href="../admin/public/css/_all-skins.min.css">
    <style>
        #preview {
            width: 70%;
            /* height: 15rem; */
            margin: auto;
        }

        .main-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>Asisitencia</title>
</head>

<body class="hold-transition skin-green layout-top-nav">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../../index2.html" class="navbar-brand"><b>SIS</b>ASISTENCIA</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="../admin/">ADMIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container text-center">
        <div class="row">
            <div class="col -lg -12 col-md-12 col-xs-12">
                <h1>Registro de Asistencia</h1>
            </div>
            <div id="camara">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div id="cuadro">
                        <video class="border border-primary" id="preview"></video>
                    </div>
                </div>
            </div>
            <div class="col -log-12 col-md-12 col-xs-12">
                <button type="button" id="btnIngreso" onclick="iniciaCamara()" class="btn btn-success">Iniciar Cámara</button>
                <button type="button" id="btnSalida" onclick="apagarCamara()" class="btn btn-warning">Apagar Cámara</button>
            </div>
        </div>
    </div>

    

    <script src="../admin/public/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="../admin/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/asistencia.js?<?php echo time(); ?>"></script>

</body>

</html>