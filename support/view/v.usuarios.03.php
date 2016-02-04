<h4 class="sub-header">Actualizar</h4>
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th colspan="2">Nombre</th>
				<th>Usuario</th>
				<th>Contraseña</th>
				<th colspan="2">Correo</th>
				<th>Tipo</th>
			</tr>
		</thead>
		<tbody>

<?php

	$result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'Soporte' ORDER BY id_usuario ASC limit 100");
	$i = 0;

		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {}
				
				$id_usuario = $row['id_usuario'];
				$nombre1 = $row['nombre1'];
				$nombre2 = $row['nombre2'];
				$apellido1 = $row['apellido1'];
				$apellido2 = $row['apellido2'];
				$usuario = $row['usuario'];
				$clave = $row['clave'];
				$correo = $row['correo'];
				$tipo = $row['tipo'];
				
				if ($tipo == 'administrador') {

					$_html_selected_01 = 'selected';

				}

				else if ($tipo == 'vendedor') {

					$_html_selected_02 = 'selected';
	
				}
	
				else if ($tipo == 'soporte') {
		
					$_html_selected_03 = 'selected';
				
				}

				else {

				}

?>

		<tr>
			<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">
			<td>
				<input type="hidden" value="<?= $id_usuario ?>" name="id_usuario">
				<input type="text" class="form-control" name="u_nombre1" value="<?= $nombre1 ?>">
			</td>
			<td>
				<input type="text" class="form-control" name="apellido1" value="<?= $apellido1 ?>">
			</td>
			<td><input type="text" class="form-control" name="usuario" value="<?= $usuario ?>"></td>
			<td><input type="text" class="form-control" name="clave" value="<?= $clave ?>"></td>
			<td colspan="2"><input type="text" class="form-control" name="correo" value="<?= $correo ?>"></td>
			<td>
				<select name="tipo" class="form-control">
					<option value="administrador" <?= $_html_selected_01 ?>>Administrador</option>
					<option value="vendedor" <?= $_html_selected_02 ?>>Vendedor</option>
					<option value="soporte" <?= $_html_selected_03 ?>>Soporte</option>
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