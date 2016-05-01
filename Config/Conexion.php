<?php namespace Config;

	abstract class Conexion{

		private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "",
			"db" => "crud"
		);
		private $conexion;

		public function __construct(){
			$this->conexion = new \PDO('mysql:host=' . $this->datos['host'] . ';dbname=' . $this->datos['db'] . ';charset=utf8', $this->datos['user'], $this->datos['pass']);
		}

	}
	

?>