<?php
	class Pagina{
		
		public function __construct(){
		
		}
		
		public function cabecera($titulo="HTML"){
			echo "<!doctype html>
					<html>
						<head>
							<title>$titulo</title>
						</head>
						<body>";
		}
		
		public function pie(){
			echo "		</body>
					</html>";
		}
		
		public function formi($pagina){
			echo "<form action='$pagina' method='POST'>\n";
		}
		
		public function formf(){
			echo "</form>";
		}
		
		public function submit($valor=""){
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
        public function h1($mensaje){
			echo "<h1>$mensaje</h1>\n";
		}

        public function divI(){
            echo "<div class='contenido'>";
        }

        public function divF(){
            echo "</div>";
        }

        public function parrafoI(){
            echo "<p>";
        }

        public function parrafoF(){
            echo "</p>";
        }
        public function footerI(){
            echo "<footer>";
        }

        public function footerF(){
            echo "</footer>";
        }
		public function h3($mensaje){
			echo "<h3>$mensaje</h3>\n";
		}
		public function enlace($nombre,$etiqueta="enlace"){
			echo "<a href='$nombre' class='linkN'>$etiqueta</a>\n";
		}
		public function enlaceEdit($nombre,$etiqueta="enlace"){
			echo "<a href='$nombre' class='linkE'>$etiqueta</a>\n";
		}
		public function br(){
			echo "<br>";
		}
	}
?>