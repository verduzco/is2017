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
	
  <form class="form-inline" action="recibirDatosCambiar/" method="post">
		Clave:<input type="text" class="form-control"  placeholder="clave" size="10px" name="code" >
		<br/><br/>
        Nombre:<input type="text" class="form-control" placeholder="nombre" size="40px" name="name" >
		<br/><br/>
		Sueldo:<input type="text" class="form-control" placeholder="sueldo" size="12px" name="salary" >
		<br/><br/>

		 <input type="submit" class="btn btn-success" name="btnSave"  value="Modificar Trabajador">
    
</form>

</body>
</html>