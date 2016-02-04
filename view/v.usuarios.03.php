<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
		<tr>
			<th colspan="2">Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Tipo</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<th colspan="6">
				<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Administradores
			</th>
		</tr>
<?php

	$result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'administrador' ORDER BY nombre1 ASC limit 100");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
		if ($i > 0) {}

?>
		<tr>
			<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">
			<input type="hidden" value="<?= $row['id_usuario'] ?>" name="u_id_usuario">
			
			<td>
				<input type="text" class="form-control" name="u_nombre1" value="<?= $row['nombre1'] ?>">
				<input type="hidden" class="form-control" name="u_nombre2" value="<?= $row['nombre2'] ?>">
			</td>
			<td>
				<input type="text" class="form-control" name="u_apellido1" value="<?= $row['apellido1'] ?>">
				<input type="hidden" class="form-control" name="u_apellido2" value="<?= $row['apellido2'] ?>">
			</td>
			<td><input type="text" class="form-control" name="u_usuario" value="<?= $row['usuario'] ?>"></td>
			<td><input type="text" class="form-control" name="u_clave" value="<?= $row['clave'] ?>"></td>
			<td><input type="text" class="form-control" name="u_correo" value="<?= $row['correo'] ?>"></td>
			<td>
				<select name="u_tipo" class="form-control">
					<option value="administrador" selected>Administrador</option>
					<option value="vendedor">Vendedor</option>
					<option value="soporte">Soporte</option>
				</select>
			</td>
			<td align="center" style="vertical-align:middle;">
				<button class="btn btn-primary btn-xs" type="submit">Actualizar</button>
			</form>
		</td>
		</tr>

<?php

	$i++;
	
	}

?>
		<tr>
			<th colspan="6">
				<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Vendedores
			</th>
		</tr>
<?php

	$result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'vendedor' ORDER BY nombre1 ASC limit 100");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
		if ($i > 0) {}

?>
		<tr>
			<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">
			<input type="hidden" value="<?= $row['id_usuario'] ?>" name="u_id_usuario">
			
			<td>
				<input type="text" class="form-control" name="u_nombre1" value="<?= $row['nombre1'] ?>">
				<input type="hidden" class="form-control" name="u_nombre2" value="<?= $row['nombre2'] ?>">
			</td>
			<td>
				<input type="text" class="form-control" name="u_apellido1" value="<?= $row['apellido1'] ?>">
				<input type="hidden" class="form-control" name="u_apellido2" value="<?= $row['apellido2'] ?>">
			</td>
			<td><input type="text" class="form-control" name="u_usuario" value="<?= $row['usuario'] ?>"></td>
			<td><input type="text" class="form-control" name="u_clave" value="<?= $row['clave'] ?>"></td>
			<td><input type="text" class="form-control" name="u_correo" value="<?= $row['correo'] ?>"></td>
			<td>
				<select name="u_tipo" class="form-control">
					<option value="administrador">Administrador</option>
					<option value="vendedor" selected>Vendedor</option>
					<option value="soporte">Soporte</option>
				</select>
			</td>
			<td align="center" style="vertical-align:middle;"><button class="btn btn-primary btn-xs" type="submit">Actualizar</button></form></td>
		</tr>

<?php

	$i++;
	
	}

?>

<tr>
			<th colspan="5">
				<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Soporte
			</th>
		</tr>
<?php

	$result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'soporte' ORDER BY nombre1 ASC limit 100");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
	
		if ($i > 0) {}

?>
		<tr>
			<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">
			<input type="hidden" value="<?= $row['id_usuario'] ?>" name="u_id_usuario">
			
			<td>
				<input type="text" class="form-control" name="u_nombre1" value="<?= $row['nombre1'] ?>">
				<input type="hidden" class="form-control" name="u_nombre2" value="<?= $row['nombre2'] ?>">
			</td>
			<td>
				<input type="text" class="form-control" name="u_apellido1" value="<?= $row['apellido1'] ?>">
				<input type="hidden" class="form-control" name="u_apellido2" value="<?= $row['apellido2'] ?>">
			</td>
			<td><input type="text" class="form-control" name="u_usuario" value="<?= $row['usuario'] ?>"></td>
			<td><input type="text" class="form-control" name="u_clave" value="<?= $row['clave'] ?>"></td>
			<td><input type="text" class="form-control" name="u_correo" value="<?= $row['correo'] ?>"></td>
			<td>
				<select name="u_tipo" class="form-control">
					<option value="administrador">Administrador</option>
					<option value="vendedor">Vendedor</option>
					<option value="soporte" selected>Soporte</option>
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