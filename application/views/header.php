<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elecciones 2023-2024</title>
  </head>
  <body>
    <!-- Importacion CDN-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrsdwYvTuKxgkmkZjme4WXEYTW1wRdEVI&callback=initMap" ></script>

    <style>
    .de-table{
    width: 100%;
    border-collapse: collapse;
    }
    .de-table td {
      padding: 10px;
      border: 2px solid black;
      background: linear-gradient(to bottom, #091E5F 0%, #f2f2f2 100%);
      color:black;
    }
    </style>

    <div class="row">
            <table class="de-table text-center">
        <tr>
          <td> <h1>  ELECCIONES ANTICIPADAS 2023</h1> </td>
        </tr>
        </table>
      </div>
      <br>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Elecciones 2023-2024 </a>
          <img src="<?php echo base_url();?>/assets/imagenes/elec.png" alt="Baner 1" height="45px" width="150px">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">MAPA GENERAL</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CANDIDATOS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="#">PRESIDENTE</a></li>
                <ul>
                  <li role="separator" class="divider"></li>
                    <li > <a href="<?php echo site_url();?>/presidentes/nuevo">Nuevo Candidato</a></li>
                    <li role="separator" class="divider"></li>

                </ul>
                <li role="separator" class="divider"></li>
                <li><a href="#">ASAMBLEISTAS NACIONALES</a></li>
                <ul>
                  <li role="separator" class="divider"></li>
                    <li > <a href="<?php echo site_url();?>/asambleistas/nuevo">Nuevo Candidato</a></li>
                    <li role="separator" class="divider"></li>
                </ul>
                <li role="separator" class="divider"></li>
                <li><a href="#">ASAMBLEISTAS PROVINCIALES</a></li>
                <ul>
                  <li role="separator" class="divider"></li>
                    <li > <a href="<?php echo site_url();?>/asambleistas_pro/nuevo">Nuevo Candidato</a></li>
                    <li role="separator" class="divider"></li>

                </ul>
                <li role="separator" class="divider"></li>
                <li><a href="#">ASAMBLEISTAS EXTRANJEROS</a></li>
                <ul>
                  <li role="separator" class="divider"></li>
                    <li > <a href="<?php echo site_url();?>/asambleistas_ext/nuevo">Nuevo Candidato</a></li>
                    <li role="separator" class="divider"></li>

                </ul>
                <li role="separator" class="divider"></li>
                <li><a href="#">CONSEJO ANDINO </a></li>
                <ul>
                  <li role="separator" class="divider"></li>
                    <li > <a href="<?php echo site_url();?>/consejeros/nuevo">Nuevo Candidato</a></li>
                    <li role="separator" class="divider"></li>
    
                </ul>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GEOLOCALIZACIÓN DE CANDIDATOS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url(); ?>/presidentes/index/">PRESIDENTE</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url(); ?>/asambleistas/index/">ASAMBLEISTAS NACIONALES</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url(); ?>/asambleistas_pro/index/">ASAMBLEISTAS PROVINCIALES</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url(); ?>/asambleistas_ext/index/">ASAMBLEISTAS EXTRANJEROS</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url(); ?>/consejeros/index/">CONSEJO ANDINO </a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
