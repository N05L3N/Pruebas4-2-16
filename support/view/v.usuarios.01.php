<style>	
	.pass {
		visibility: hidden;
	}
	
	.pass:before {
		content: '*********';
		display: inline-block;
		position: absolute;
		visibility: visible;
	}
	
	.pass.show:before {
		content: '*********';
		display: none;
		visibility: hidden;
	}
	.pass.show{
		visibility: visible;
		display: inline-block;
	}
</style>

<h4 class="sub-header">Consulta</h4>
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<tr>
			<th colspan="4">Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Tipo</th>
		</tr>
<?php

$result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'soporte' ORDER BY id_usuario ASC limit 100");

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

?>

		<tr>
			<td><?= $nombre1 ?></td>
			<td><?= $nombre2 ?></td>
			<td><?= $apellido1 ?></td>
			<td><?= $apellido2 ?></td>
			<td><?= $usuario ?></td>			
			<td onMouseOut="hidePassword<?= $id_usuario ?>();">
				<script type="text/javascript">
					function showPassword<?= $id_usuario ?>() {
						$("#demo<?= $id_usuario ?>").addClass("show");
					}
					function hidePassword<?= $id_usuario ?>() {
						$("#demo<?= $id_usuario ?>").removeClass("show");
					}
				</script>
				<span class="pass" id="demo<?= $id_usuario ?>" onClick="showPassword<?= $id_usuario ?>();" style="cursor:help;"><?= $clave ?></span>
			</td>
			<td><?= $correo ?></td>
			<td><?= $tipo ?></td>
		</tr>

<?php

	$i++;
}

?>

	</table>
</div>
