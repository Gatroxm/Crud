<div class="ed-container">
	nombre: <?php echo $datos->name; ?><br>
	apellido: <?php echo $datos->lastname; ?><br>
	Dirección: <?php echo $datos->address; ?><br>
	Correo:	<?php echo $datos->email; ?><br>
	Teléfono: <?php echo $datos->phone; ?><br>
	Fecha Ingreso <?php echo $datos->admissiondate; ?><br>
	Tipo:<?php echo $datos->type; ?><br>
	<img src="<?php echo URL; ?>Views/template/images/avatar/<?php echo $datos->image; ?>" alt="">
</div>
