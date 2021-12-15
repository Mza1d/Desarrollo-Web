<?php
	include("Pagina.php");

	$pag = new Pagina();

	$pag->cabecera("Formulario Cliente");
	$pag->enlace("Listar.php","Volver");
	$pag->br();
    
	$pag->formi("");
	$pag->text("C.I.","Ci");$pag->br();
	$pag->text("Apellidos","Apellidos");$pag->br();
	$pag->text("Nombres","Nombres");$pag->br();
	$pag->text("Direccion","Direccion");$pag->br();
	$pag->text("Celular","Celular");$pag->br();
    $pag->text("Email","Email");$pag->br();
	$pag->submit("Guardar Datos");
	$pag->formf();
	
	$pag->pie();
?>

<style>
    body{
        background-color: black;
        font-family: arial;
        color: white;
    }
    input{
        margin-bottom: 15px;
        border: none;
        border-radius: 5px;
    }
    .btn{
        background-color: black;
        border: 1px solid blue;
        padding: 10px;
        margin-left: 50px;
        color: yellow;
        font-family: arial;
    }
</style>