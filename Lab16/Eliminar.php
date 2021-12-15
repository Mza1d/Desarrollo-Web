<?php
	include("DB.php");
	include("Pagina.php");
	
	$obj = new DB();
	$pag = new Pagina();
	
	$Id = $_GET["Id"];
	
	$pag->cabecera("Eliminar");
	$pag->enlace("Listar.php","Volver");
	$pag->br();
	
	$sql = "DELETE FROM Cliente WHERE Id ='$Id';";
	$obj->crud($sql);
	$pag->h3("REGISTRO BORRADO CORRECTAMENTO");
	
	$pag->pie();
?>