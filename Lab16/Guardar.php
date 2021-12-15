<?php
	include("DB.php");
	include("Pagina.php");
	
	$obj = new DB();
	$pag = new Pagina();

	$pag->cabecera("Registro");
	$pag->enlace("Listar.php","Volver");
	$pag->br();
	$Ci = $_POST["Ci"];
	$Apellidos = $_POST["Apellidos"];
	$Nombres = $_POST["Nombres"];
	$Direccion = $_POST["Direccion"];
	$Celular = $_POST["Celular"];
	$Email = $_POST["Email"];
	
	$sql = "INSERT INTO Cliente(Ci,Apellidos,Nombres,Direccion,Celular,Email)VALUES('$Ci','$Apellidos','$Nombres','$Direccion','$Celular','$Email');";
	$obj->crud($sql);
	$pag->h3("REGISTRO EXITOSO");
	$pag->pie();
?>

