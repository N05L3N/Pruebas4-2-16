<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
		<thead>
		<tr>
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Correo</th>
			<th>Tipo</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<th colspan="5">
				<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Administradores
			</th>
		</tr>
		<tr>
			<?php $result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'administrador' ORDER BY nombre1 ASC limit 100"); $i = 0; while ($row = mysql_fetch_array($result)) { if ($i > 0) {} ?>
			<td><?= $row['nombre1'] ?> <?= $row['apellido1'] ?></td>
			<td><?= $row['usuario'] ?></td>
			<td><?= $row['clave'] ?></td>
			<td><?= $row['correo'] ?></td>
			<td><?= $row['tipo'] ?></td>
		</tr>
			<?php $i++; } ?>
		<tr>
			<th colspan="5">
				<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Vendedores
			</th>
		</tr>
		<tr>
			<?php $result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'vendedor' ORDER BY nombre1 ASC limit 100"); $i = 0; while ($row = mysql_fetch_array($result)) { if ($i > 0) {} ?>
			<td><?= $row['nombre1'] ?> <?= $row['apellido1'] ?></td>
			<td><?= $row['usuario'] ?></td>
			<td><?= $row['clave'] ?></td>
			<td><?= $row['correo'] ?></td>
			<td><?= $row['tipo'] ?></td>
		</tr>
			<?php $i++; } ?>
		<tr>
			<th colspan="5">
				<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Soporte
			</th>
		</tr>
		<tr>
			<?php $result = mysql_query("SELECT * FROM usuarios WHERE tipo = 'soporte' ORDER BY nombre1 ASC limit 100"); $i = 0; while ($row = mysql_fetch_array($result)) { if ($i > 0) {} ?>
			<td><?= $row['nombre1'] ?> <?= $row['apellido1'] ?></td>
			<td><?= $row['usuario'] ?></td>
			<td><?= $row['clave'] ?></td>
			<td><?= $row['correo'] ?></td>
			<td><?= $row['tipo'] ?></td>
		</tr>
			<?php $i++; } ?>
		</tbody>
	</table>
</div>