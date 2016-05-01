<?php namespace Models;

	use Config\Conexion as Conexion;

	class Usuarios extends Conexion{

		#parametros 
		
		private $id;
		private $name;
		private $lastname;
		private $address;
		private $email;
		private $phone;
		private $admissiondate;
		private $image;
		private $type;
		private $password;

		#Methodos 

		public function set($atributo, $contenido){

			$this->$atributo = $contenido;

		}

		public function list(){

			$sql = $this->conexion->prepare("SELECT * FROM usuarios ORDER BY id DESC");
			if ($sql->execute();) {
				$data = $sql->fetchAll(\PDO::FETCH_OBJ);
				return $sql;
			}

		}

		public function add(){

			$sql = $this->conexion->prepare("INSERT INTO usuarios (name, lastname, address, email, phone, admissiondate, image, type, password) VALUES(:name, :lastname, :address, :email, :phone, :admissiondate, :image, :type, md5(:password))");
			$sql->bindParam(":name", $this->name, \PDO::PARAM_STR);
			$sql->bindParam(":lastname", $this->lastname, \PDO::PARAM_STR);
			$sql->bindParam(":address", $this->address, \PDO::PARAM_STR);
			$sql->bindParam(":email", $this->email, \PDO::PARAM_STR);
			$sql->bindParam(":phone", $this->phone, \PDO::);
			$sql->bindParam(":admissiondate", $this->admissiondate, \PDO::PARAM_DATE);
			$sql->bindParam(":image", $this->image, \PDO::PARAM_STR);
			$sql->bindParam(":type", $this->type, \PDO::PARAM_STR);
			$sql->bindParam(":password", $this->password, \PDO::PARAM_STR);
			$sql->execute();

		}

		public function edit(){

			if($this->password == ""){ 
				$sql = $this->conexion->prepare("UPDATE usuarios SET name = :name, lastname = :lastname, address = :address, email = :email, phone = :phone, admissiondate = :admissiondate, type = :type WHERE id = :id");
			}else{
				$sql = $this->conexion->prepare("UPDATE usuarios SET name = :name, lastname = :lastname, address = :address, email = :email, phone = :phone, admissiondate = :admissiondate, type = :type, password = md5(:password) WHERE id = :id");
				$sql->bindParam(":password", $this->password, \PDO::PARAM_STR);
			}
			$sql->bindParam(":name", $this->name, \PDO::PARAM_STR);
			$sql->bindParam(":lastname", $this->lastname, \PDO::PARAM_STR);
			$sql->bindParam(":address", $this->address, \PDO::PARAM_STR);
			$sql->bindParam(":email", $this->email, \PDO::PARAM_STR);
			$sql->bindParam(":phone", $this->phone, \PDO::);
			$sql->bindParam(":admissiondate", $this->admissiondate, \PDO::PARAM_DATE);
			$sql->bindParam(":type", $this->type, \PDO::PARAM_STR);
			$sql->bindParam(":id", $this->id, \PDO::PARAM_INT);
			if ($sql->execute()) {
				print_r($sql->eroroInfo());
				die();
			}

		}

		public function delete(){
			$sql = $this->conexion->prepare("DELETE FROM usuarios WHERE id = :id");
			$sql->bindParam(":id", $this->id, \PDO::PARAM_INT);
			$sql->execute();
		}

		public function view(){
			$sql = $this->conexion->prepare("SELECT * FROM usuarios WHERE id = :id");
			$sql->bindParam(":id", $this->id, \PDO::PARAM_INT);
			if ($sql->execute();) {
				$campos = $sql->fetch(\PDO::FETCH_OBJ);
				return $campos;
			}
			
		}

	}

?>