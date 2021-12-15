<?php
	class DB{
		private $objPDO;
		private $flag = false;
		
		public function __construct(){
			try{
				$this->objPDO = new PDO("mysql:host=localhost;dbname=Sistema_Facturacion","Mario","2021");
				$this->flag = true;
			}catch(PDOException $e){
				$this->flag = false;
				echo "Error de conexion: ".$e->getMessage();
			}
		}
		
		public function getRegistros($sql){
			if($this->flag){
				try{
					$estamento = $this->objPDO->query($sql);
					return $estamento->fetchAll();
				}catch(PDOException $e){
					$this->flag = false;
					echo "Error en las tablas ".$e->getMessage();
				}
			}
			return $this->flag;
		}
		
		public function crud($sql){
			if($this->flag){
				try{
					$estamento = $this->objPDO->query($sql);
					return true;
				}catch(PDOException $e){
					echo "Error de instruccion SQL ".$e->getMessage();
					return true;
				}
			}
			return false;
		}
		
	}
?>