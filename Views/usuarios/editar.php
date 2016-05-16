<div class="ed-container">
	<h3 class="titulo total">Editar Usuarios <?php echo $datos->name; ?><hr></h3>
	<div class="j-separator"></div>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="contenedor_formulario">
			<label for="">Nombres</label>
			<input type="text" name="name" class="campo-form" value="<?php echo $datos->name; ?>">
		</div>
		<div class="contenedor_formulario">
			<label for="">Apellidos</label>
			<input type="text" name="lastname" class="campo-form" value="<?php echo $datos->lastname; ?>">
		</div>
		<div class="contenedor_formulario">
			<label for="">Dirección</label>
			<input type="text" name="address" class="campo-form" value="<?php echo $datos->address; ?>">
		</div>
		<div class="contenedor_formulario">
			<label for="">Correo</label>
			<input type="email" name="email" class="campo-form" value="<?php echo $datos->email; ?>">
		</div>
		<div class="contenedor_formulario">
			<label for="">Teléfono</label>
			<input type="number" name="phone" class="campo-form" value="<?php echo $datos->phone; ?>">
		</div>
		<div class="contenedor_formulario">
			<label for="">Fecha Ingreso</label>
			<input type="date" name="admissiondate" class="campo-form" value="<?php echo $datos->admissiondate; ?>">
		</div>
		<div class="contenedor_formulario">
			<label for="">Tipo</label>
			<select  name="type" id="" class="campo-form">
				<option value="<?php echo $datos->type; ?>"><?php echo $datos->type; ?></option>
				<option value="Administrador">Administrador</option>
				<option value="Moderador">Moderador</option>
				<option value="Usuario">Usuario</option>
			</select>
		</div>
		<div class="contenedor_formulario">
			<label for="">Contraseña</label>
			<input type="password" name="password" value="<?php echo $datos->password; ?>"class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<button type="submit" class="boton-guardar">Registrar</button>
		</div>
	</form>
</div>