<?php namespace template;
	
	$template = new Template();

	class Template{

		public function __construct(){

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proyecto de Crud | Gustavo Adolfo Muñoz Reyes</title>
	<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/ed-grid.css">
	<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/style.css">
</head>
<body>
	<div class="ed-container total fondo_menu">
		<div class="ed-container"> 
			<div class="caja movil-30"> 
				<h3 class="titulo_aplicacion">Panel de administraciòn</h3>
			</div>
			<div class="caja movil-40"> 
				<nav class="menu">
					<ul>
						<li><a href="<?php echo URL; ?>">Inico</a></li>
						<li><a href="<?php echo URL; ?>usuarios/">Usuarios</a></li>
						<li><a href="">Item</a></li>
						<li><a href="">Item</a></li>
						<li><a href="">Item</a></li>
					</ul>
				</nav>
			</div>
			<div class="caja movil-30">
				<h6 class="titulo_aplicacion texto_rigth">Gustavo Adolfo Muñoz Reyes</h6>
			</div>
		</div> 
	</div>
<?php 
		}
		
		public function __destruct(){
?>
	<footer class="total fondo_menu">
		Todos los derechos reservados &copy 2016 <br>
		Gustavo Muñoz ~ @GatroxM | <b>Gatroxm</b>
	</footer>
</body>
</html>
<?php 
		}

	}
?>