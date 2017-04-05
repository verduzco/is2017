<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CRUD Trabajadores</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php/Crud_controller/agregar_Trabajador"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Agregar</a></li>
            <li><a href="index.php/Crud_controller/cargaVistaConsulta"><span class="glyphicon glyphicon-search"></span>&nbsp;Buscar</a></li>
            <li><a href="index.php/Crud_controller/cargarVistaCambiar"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Cambiar</a></li>
            <li><a href="index.php/Crud_controller/cargarVistaBorrar"><span class="glyphicon glyphicon-remove-sign"></span>&nbsp;Eliminar</a></li>
            <li><a href="index.php/Crud_controller/reporteTrabajadores"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Reportes</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


</body>
</html>