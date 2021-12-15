<?php
	class Pagina{
		
		public function __construct(){
		
		}
		
		public function cabecera($titulo="HTML"){
			echo "<!doctype html>
					<html>
						<head>
							<title>$titulo</title>
							<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js'></script>
							<script src='Operaciones.js'></script>
						</head>
						<body>";
		}
		public function pie(){
			echo "		</body>
					</html>";
		}
		
		public function formi($pagina,$id='enviar'){
			echo "<form action='$pagina' method='POST' id='$id'>\n";
		}
		
		public function formf(){
			echo "</form>";
		}
		
		public function submit($valor=">>"){
			echo "<input type='submit' value='$valor' class='btn'>\n";
		}
		
		public function text($label,$nombre){
			echo "$label:<input type='text' name='$nombre' id='$nombre'>\n";
		}
		
		public function textv($label,$nombre,$valor){
			echo "$label:<input type='text' name='$nombre' id='$nombre' value='$valor'>\n";
		}
		
		public function texth($nombre,$valor){
			echo "<input type='hidden' name='$nombre' id='$nombre' value='$valor'>\n";
		}
		
		public function h3($mensaje){
			echo "<h3>$mensaje</h3>\n";
		}
		public function enlace($nombre,$etiqueta="enlace"){
			echo "<a href='$nombre' class='link'>$etiqueta</a>\n";
		}
		public function br(){
			echo "<br>";
		}
		public function span($id){
			echo "<div id='$id'></div>";
		}
        public function footerI(){
            echo "<footer>";
        }

        public function footerF(){
            echo "</footer>";
        }
	}
?>