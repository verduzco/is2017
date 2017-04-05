<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Mi Calculadora</title>
	<link rel="stylesheet" href="css/estilo.css" type="text/css" media="all">
</head>
<body>
<form class="" action="index.php/Peludo/recibirDatos/" method="post">
		Teclea primer número:<input type="text" name="num1" 
		placeholder="Número entero" style="width:100px; heigth:15px">
		<br/><br/>
		Teclea segundo número:<input type="text" name="num2" 
		placeholder="Número entero"  style="width:100px; heigth:15px">
	    <br/><br/>
	  <input type="submit" name="btnSuma"  value="Sumar">
	  <input type="submit" name="btnResta"  value="Restar">
	  <input type="submit" name="btnMultiplica"  value="Multiplicar">
	  <input type="submit" name="btnDivide"  value="Dividir">
</form>

</body>
</html>
