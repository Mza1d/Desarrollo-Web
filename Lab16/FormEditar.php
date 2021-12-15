<?php
	include("DB.php");
	include("Pagina.php");
	
	$obj = new DB();
	$pag = new Pagina();
	
	$Id = $_GET["Id"];
	
	$sql = "SELECT * FROM Cliente WHERE Id='$Id';";
	$datos = $obj->getRegistros($sql);

	$pag->cabecera("Form. Persona");
	$pag->enlace("Listar.php","Volver");
	$pag->br();
	
	$pag->formi("Actualizar.php");
	$pag->texth("Id",$Id);$pag->br();
	$pag->textv("C.I. ","Ci",$datos[0]["Ci"]);$pag->br();
	$pag->textv("Apellidos ","Apellidos",$datos[0]["Apellidos"]);$pag->br();
	$pag->textv("Nombres ","Nombres",$datos[0]["Nombres"]);$pag->br();
	$pag->textv("Direccion ","Direccion",$datos[0]["Direccion"]);$pag->br();
	$pag->textv("Telefono ","Celular",$datos[0]["Celular"]);$pag->br();
    $pag->textv("Correo ","Email",$datos[0]["Email"]);$pag->br();
	$pag->submit("ACTUALIZAR DATOS");
	$pag->formf();
	
	$pag->pie();
?>

<style>
        body{
        background-color: black;
        color: white;
    }
    h3,h1{
        text-align: center;
    }
    .contenido{
        margin: 0 25px;
        margin-top: 35px;
        width: 500px;
        height: auto;
    }
    input{
        margin-bottom: 15px;
        border: none;
        border-radius: 5px;
    }
    .link{
        color: #62ff00;
        text-decoration: none;
        padding: 5px;
        font-family: fantasy;
    }
    .btn{
        background-color: black;
        border: 1px solid blue;
        padding: 10px;
        margin-left: 50px;
        color: yellow;
        font-family: arial;
    }
    footer{
        text-align: center;
    }
</style>