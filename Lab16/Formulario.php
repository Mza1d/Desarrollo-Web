<?php
	include("Pagina.php");

	$pag = new Pagina();

	$pag->cabecera("Registro");
	$pag->enlace("Listar.php","Volver");
	$pag->br();
	$pag->divI();
    $pag->h3("REGISTRAR DATOS DEL CLIENTE");
        $pag->formi("Guardar.php");
        $pag->text("C.I.","Ci");$pag->br();
        $pag->text("Apellidos","Apellidos");$pag->br();
        $pag->text("Nombres","Nombres");$pag->br();
        $pag->text("Direccion","Direccion");$pag->br();
        $pag->text("Celular","Celular");$pag->br();
        $pag->text("Email","Email");$pag->br();
        $pag->submit("GUARDAR");
        $pag->formf();
    $pag->divF();
	
    $pag->br();
    $pag->footerI();
    $pag->br();
        echo "Universitario: Anarata Diaz Mario";
        $pag->br();
        echo "&copy2021";
    $pag->footerF();

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