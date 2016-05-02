<div class="ed-container">
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
		  	<?php foreach ($datos as $dato){  ?>
		  	<tr>
		  			<td><?php echo $dato->name; ?></td>
					<td><?php echo $dato->lastname; ?></td>
			    	<td><?php echo $dato->address; ?></td>
			    	<td><?php echo $dato->email; ?></td>
			    	<td><?php echo $dato->phone; ?></td>
			    	<td><?php echo $dato->admissiondate; ?></td>
			    	<td><?php echo $dato->type; ?></td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
</div>