<h1 style="color: yellow; text-align:center;">LAB N° 17</h1>
<?php
	include("Pagina.php");
	
	$pag = new Pagina();

	$pag->cabecera("Lista clientes");
	$pag->br();
	$pag->span("datos");
    $pag->enlace("Formulario.php","REGISTRAR");
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
        font-family: arial;
    }
    #datos{
        margin: 0 auto;
        border: 3px solid #59ff00;
        border-radius: 5px;
        margin-bottom: 25px;
        width: 450px;
        height: auto;
    }
    .link{
        color: #62ff00;
        border: 2px solid white;
        border-radius: 10px;
        text-decoration: none;
        margin-left: 720px;
        padding: 8px;
        font-family: fantasy;
    }
    footer{
        text-align: center;
        margin-top: 25px;
    }
</style>