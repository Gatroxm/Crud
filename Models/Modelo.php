<?php namespace Models;

	use Config\Conexion as Conexion;

	abstract class Modelo extends Conexion{

		#Parametros 

		protected $table;
		protected $clave;

		#methodos

		public function set($atributo, $contenido){

			$this->$atributo = $contenido;

		}

		public function list(){

			$sql = $this->conexion->prepare("SELECT * FROM $this->tabla ORDER BY id DESC");
			if ($sql->execute()) {
				$data = $sql->fetchAll(\PDO::FETCH_OBJ);
				return $sql;
			}

		}

		public function delete(){
			$sql = $this->conexion->prepare("DELETE FROM $this->tabla WHERE id = :id");
			$sql->bindParam(":id", $this->clave, \PDO::PARAM_INT);
			$sql->execute();
		}

		public function view(){
			$sql = $this->conexion->prepare("SELECT * FROM $this->tabla WHERE id = :id");
			$sql->bindParam(":id", $this->clave, \PDO::PARAM_INT);
			if ($sql->execute()) {
				$campos = $sql->fetch(\PDO::FETCH_OBJ);
				return $campos;
			}
			
		}

	}

?>