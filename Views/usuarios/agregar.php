<div class="ed-container">
	<h3 class="titulo total">Agregar Usuarios<hr></h3>
	<div class="j-separator"></div>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="contenedor_formulario">
			<label for="">Nombres</label>
			<input type="text" name="name" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Apellidos</label>
			<input type="text" name="lastname" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Dirección</label>
			<input type="text" name="address" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Correo</label>
			<input type="email" name="email" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Teléfono</label>
			<input type="number" name="phone" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Fecha Ingreso</label>
			<input type="date" name="admissiondate" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Tipo</label>
			<select  name="type" id="" class="campo-form">
				<option value="Administrador">Administrador</option>
				<option value="Moderador">Moderador</option>
				<option value="Usuario">Usuario</option>
			</select>
		</div>
		<div class="contenedor_formulario">
			<label for="">Contraseña</label>
			<input type="password" name="password" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<label for="">Avatar</label>
			<input type="file" name="imagen" class="campo-form">
		</div>
		<div class="contenedor_formulario">
			<button type="submit" class="boton-guardar">Registrar</button>
			<button type="reset" class="boton-borrar">Borrar</button>
		</div>
	</form>
</div>