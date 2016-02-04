<h4 class="sub-header">Actualizar</h4>

<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th colspan="4">Nombre</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th colspan="2">Correo</th>
				<th>Tipo</th>
			</tr>
		</thead>	
		<tbody>
<?php

	$result = mysql_query("SELECT * FROM usuarios_reclamaciones ORDER BY id_usuario ASC limit 100");
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}

?>

		<tr>
			<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">
				<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario_reclamaciones">
			<td><input type="text" class="form-control" name="u_nombre1_reclamaciones" value="'.$row['nombre1'].'"></td>
			<td><input type="text" class="form-control" name="u_nombre2_reclamaciones" value="'.$row['nombre2'].'"></td>
			<td><input type="text" class="form-control" name="u_apellido1_reclamaciones" value="'.$row['apellido1'].'"></td>
			<td><input type="text" class="form-control" name="u_apellido2_reclamaciones" value="'.$row['apellido2'].'"></td>
			<td><input type="text" class="form-control" name="u_usuario_reclamaciones" value="'.$row['usuario'].'"></td>
			<td><input type="text" class="form-control" name="u_clave_reclamaciones" value="'.$row['clave'].'"></td>
			<td colspan="2"><input type="text" class="form-control" name="u_correo_reclamaciones" value="'.$row['correo'].'"></td>
			<td>
				<select name="u_tipo_reclamaciones" class="form-control">
					<?php
							
						if ($row['tipo'] == 'administrador') {

					?>
						
						<option value="administrador" selected>Administrador</option>
						<option value="vendedor">Vendedor</option>
						<option value="soporte">soporte</option>
					
					<?php

						}
						
						else if ($row['tipo'] == 'vendedor') {

					?>
						
						<option value="administrador">Administrador</option>
						<option value="vendedor" selected>Vendedor</option>
						<option value="soporte">soporte</option>

					<?php


						}
						
						else if ($row['tipo'] == 'soporte') {

					?>
						
						<option value="administrador">Administrador</option>
						<option value="vendedor">Vendedor</option>
						<option value="soporte" selected>soporte</option>

					<?php

						}
						
						else {

					?>
						
						<option value="administrador">Administrador</option>
						<option value="vendedor">Vendedor</option>
						<option value="soporte">soporte</option>

					<?php

						}
					?>

				</select>
			</td>
			<td align="center" style="vertical-align:middle;"><button class="btn btn-primary btn-xs" type="submit">Actualizar</button></form></td>
		</tr>
<?php
	
	$i++;
	}

?>
		</tbody>
	</table>
</div>