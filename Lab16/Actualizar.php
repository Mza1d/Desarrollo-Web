<?php
	include("DB.php");
	include("Pagina.php");
	
	$obj = new DB();
	$pag = new Pagina();

	$pag->cabecera("Form. Persona");
	$pag->enlace("Listar.php","Volver");
	$pag->br();
	$Id	= $_POST["Id"];
	$Ci = $_POST["Ci"];
	$Apellidos = $_POST["Apellidos"];
	$Nombres = $_POST["Nombres"];
	$Direccion = $_POST["Direccion"];
	$Celular = $_POST["Celular"];
    $Email = $_POST["Email"];
	
	$sql = "UPDATE Cliente SET Ci='$Ci',Apellidos='$Apellidos',Nombres='$Nombres',Direccion='$Direccion',Celular='$Celular',Email='$Email' where Id=$Id;";
	$obj->crud($sql);
	$pag->h3("Registro Actualizado Correctamente");
	$pag->pie();
?>