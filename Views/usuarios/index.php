<!-- <div class="ed-container">
	<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Apellido</th>
		      <th>Direcciòn</th>
		      <th>Correo</th>
		      <th>Telèfono</th>
		      <th>Fecha ingreso</th>
		      <th>Tipo</th>

		    </tr>
		  </thead>
		  <tbody>
		  	<?php while ($datos = $sql->fetch(\PDO::FETCH_OBJ)) {  ?>
		  	<tr>
		  			<td><?php echo $datos->name; ?></td>
					<td><?php echo $datos->lastname; ?></td>
			    	<td><?php echo $datos->address; ?></td>
			    	<td><?php echo $datos->email; ?></td>
			    	<td><?php echo $datos->phone; ?></td>
			    	<td><?php echo $datos->admissiondate; ?></td>
			    	<td><?php echo $datos->type; ?></td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
</div> -->