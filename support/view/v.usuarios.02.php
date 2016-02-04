<h4 class="sub-header">Agregar</h4>
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

	$result = mysql_query("SELECT * FROM usuarios ORDER BY id_usuario ASC limit 100");
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}

		$i++;

	}

	$keygen = 'C'.rand(1000,10000).'';

?>	
		<form class="form-signin" action="usuarios.php" name="registrar_usuario" method="post">
		<tr>
			<td>
				<input type="text" name="nombre1" class="form-control" placeholder="Nombre(s)">
				<input type="hidden" name="nombre2" class="form-control" placeholder="2do Nombre">
			</td>
			<td>
				<input type="text" name="apellido1" class="form-control" placeholder="Apellido(s)">
				<input type="hidden" name="apellido2" class="form-control" placeholder="Apellido Materno">
			</td>
			<td><input type="text" name="usuario" class="form-control" placeholder="Usuario"></td>
			<td><input type="text" name="clave" readonly="readonly" value="<?= $keygen ?>" class="form-control" placeholder="Contraseña"></td>
			<td colspan="2"><input type="text" name="correo" class="form-control" placeholder="Correo"></td>
			<td>
				<select name="tipo" class="form-control">
					<option value=""></option>
					<option value="administrador">Administrador</option>
					<option value="soporte" selected>Soporte</option>
					<option value="vendedor">Vendedor</option>
				</select>
			</td>
			<td>
				<button class="btn btn-success btn-xs" type="submit" onfocus="javascript:this.form.d_confirmar.value =\'confirm\';">
					Agregar Usuario
				</button>
			</td>
		</tr>
		</form>
		</tbody>
	</table>
</div>