<?php
	include("DB.php");
	include("Pagina.php");
	
	$obj = new DB();
	$Categoria = $obj->getRegistros("SELECT *FROM Categoria");
    $RegCliente = $obj->getRegistros("SELECT *FROM Cliente");
	$pag = new Pagina();

	$pag->cabecera("Registros");
	$pag->br();

    $pag->br();
    $pag->h1("LAB N° 16");
    $pag->divI();
    $pag->h3("DATOS DEL CLIENTE");
    $pag->parrafoI();
        foreach($RegCliente as $c){
            echo "C.I.: ".$c["Ci"]."<br>";
            echo "Apellidos: ".$c["Apellidos"]."<br>";
            echo "Nombre Completo: ".$c["Nombres"]."<br>";
            echo "Direccion: ".$c["Direccion"]."<br>";
            echo "Telefono/Celular: ".$c["Celular"]."<br>";
            echo "Correo electronico: ".$c["Email"]."<br>";
            $pag->enlaceEdit("FormEditar.php?Id=".$c["Id"], "Editar");
            $pag->enlaceEdit("Eliminar.php?Id=".$c["Id"], "Eliminar");
            $pag->br();$pag->br();
        }
    $pag->parrafoF();
    $pag->divF();
    $pag->br();
    $pag->enlace("Formulario.php","REGISTRAR");
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
        margin: 0 auto;
        border: 2px solid red;
        border-radius: 5px;
        width: 500px;
        height: auto;
    }
    p{
        color: #4bdbfc;
        margin-left: 25px;
    }
    .linkN{
        color: #62ff00;
        border: 2px solid white;
        border-radius: 10px;
        text-decoration: none;
        margin-left: 720px;
        padding: 8px;
        font-family: fantasy;
    }
    .linkE:hover{
        text-decoration: none;
        color: yellow;
    }
    footer{
        text-align: center;
    }
</style>