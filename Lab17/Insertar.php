<?php
	header('Content-type: application/json');
	include("DB.php");

	$obj = new DB();
	
	$operacion = $_GET["operacion"];
	
	if($operacion=='r'){
		$registros = $obj->getRegistros("SELECT * FROM Cliente;");
		echo json_encode($registros);
	}
	if($operacion=='n'){
		$Ci = $_POST["Ci"];
		$Apellidos = $_POST["Apellidos"];
		$Nombres = $_POST["Nombres"];
		$Direccion = $_POST["Direccion"];
		$Celular = $_POST["Celular"];
		$Email = $_POST["Email"];
		
		$sql = "INSERT INTO Cliente(Ci,Apellidos,Nombres,Direccion,Celular,Email)VALUES('$Ci','$Apellidos','$Nombres','$Direccion','$Celular','$Email');";
		$obj->crud($sql);
		echo json_encode(array('status'=>true));
	}
?>