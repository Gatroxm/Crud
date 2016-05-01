<?php namespace Models;

	use Config\Conexion;

	abstract class Modelo extends Conexion{

		#Parametros 

		protected $table;
		protected $clave;

		#methodos

		public function set($atributo, $contenido){

			$this->$atributo = $contenido;

		}

		public function listar(){

			$sql = $this->conexion->prepare("SELECT * FROM $this->table ORDER BY id DESC");
			if ($sql->execute()) {
				$data = $sql->fetchAll(\PDO::FETCH_OBJ);
				return $sql;
			}

		}

		public function delete(){
			$sql = $this->conexion->prepare("DELETE FROM $this->table WHERE id = :id");
			$sql->bindParam(":id", $this->clave, \PDO::PARAM_INT);
			$sql->execute();
		}

		public function view(){
			$sql = $this->conexion->prepare("SELECT * FROM $this->table WHERE id = :id");
			$sql->bindParam(":id", $this->clave, \PDO::PARAM_INT);
			if ($sql->execute()) {
				$campos = $sql->fetch(\PDO::FETCH_OBJ);
				return $campos;
			}
			
		}

	}

?>