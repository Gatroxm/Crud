<?php namespace Controllers;

	use Models\Usuarios as Usuarios;

	class usuariosController{

		#parametros
		protected $usuarios;

		#methodos
		public function __construct(){
			$this->usuarios = new Usuarios();
		}

		public function index(){
			$datos = $this->usuarios->listar();
			return $datos;
		}

		public function agregar(){
			if(!$_POST){
				$datos = $this->usuarios->listar();
				return $datos;
			}else{
				$extenciones = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 900;
				if(in_array($_FILES['imagen']['type'], $extenciones) && $_FILES['imagen']['size'] <= $limite * 1024){
					$nombre = date('is').$_FILES['imagen']['name'];
					$ruta = "Views".DS."template".DS."images".DS."avatar".DS.$nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->usuarios->set("name", $_POST['name']);
					$this->usuarios->set("lastname", $_POST['lastname']);
					$this->usuarios->set("address", $_POST['address']);
					$this->usuarios->set("email", $_POST['email']);
					$this->usuarios->set("phone", $_POST['phone']);
					$this->usuarios->set("admissiondate", $_POST['admissiondate']);
					$this->usuarios->set("image", $nombre);
					$this->usuarios->set("type", $_POST['type']);
					$this->usuarios->set("password", $_POST['password']);
					$this->add();
					header("location/usuarios");
				}
			}
		}

		public function editar($id){
			if (!$_POST){
				$this->usuarios->set("id", $id);
				$datos = $this->usuarios->view();
			}else{
				$this->usuarios->set("name", $_POST['name']);
				$this->usuarios->set("lastname", $_POST['lastname']);
				$this->usuarios->set("address", $_POST['address']);
				$this->usuarios->set("email", $_POST['email']);
				$this->usuarios->set("phone", $_POST['phone']);
				$this->usuarios->set("admissiondate", $_POST['admissiondate']);
				$this->usuarios->set("type", $_POST['type']);
				$this->usuarios->set("password", $_POST['password']);
				$this->edit();
				header("location/usuarios");
			}
		}

		public function ver($id){
			$this->usuarios->set("id", $id);
			$datos = $this->usuarios->view();
			return $datos;
		}

		public function eliminar($id){
			$this->usuarios->set("id", $id);
			$this->usuarios->delete();
			header("location/usuarios");
		}

	}

	$users = new usuariosController();
?>