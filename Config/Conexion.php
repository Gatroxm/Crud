<?php namespace Config;

	abstract class Conexion{

		protected $conexion;

		public function __construct(){
			$this->conexion = new PDO('mysql:dbname=crud;host=localhos','root','');
		}

	}

?>