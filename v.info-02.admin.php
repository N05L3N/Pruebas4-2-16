<tr>
	<td><?= $id ?></td>
	<td><?= $nombre ?></td>
	<td><?= $contacto2 ?></td>
	<td><?= $contacto3 ?></td>
	<td><?= $direccion ?></td>
	<td><?= $ciudad ?></td>
	<td><?= $pais ?></td>
	<td><?= $estado ?></td>
	<td><?= $lada ?></td>
	<td><?= $telefono ?></td>
	<td><?= $email ?></td>
	<td><?= $medio ?></td>
	<td><?= $giro ?></td>
	<td><?= $comentarios ?></td>
	<td><?= $fecha ?></td>
	<td><?= $Hora ?></td>
	<td><?= $formulario ?></td>
	<td><?= $equipodeinteres ?></td>
	<td><?= $comeqenatp ?></td>
	<td><?= $eqclosqcuenta ?></td>
	<td><?= $antacteq ?></td>
	<td><?= $escliente ?></td>
	<td><?= $numerodecliente ?></td>
	<td><?= $motivodeconsulta ?></td>
	<td><?= $empresa ?></td>
	<td><?= $nombre_recomendador ?></td>
	<td><?= $sucursal_recomendador ?></td>
	<td><?= $comentario_vendedor ?></td>
	<td><?= $asignadoa ?></td>
	<td><?= $fechadecontacto ?></td>
	<td><?= $fechaasignacion ?></td>
	<td><?= $fechaventa ?></td>
	<td><?= $estadodeventa ?></td>
	<td><?= $numerodefactura ?></td>
	<td><?= $usuario ?></td>
	<td>
		<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">

<?php

	$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_comentarios_v = '$id' ORDER BY id_comentarios_v DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result)) {
			if ($i_nombre > 0) {}

				$id_comentarios_v = $row_nombre['id_comentarios_v'];
				$id_seguimiento = $row_nombre['id_seguimiento'];
				$usuario = $row_nombre['usuario'];
				$termometro = $row_nombre['termometro'];
				$estadodeventa = $row_nombre['estadodeventa'];
				$comentariovendedor = $row_nombre['comentariovendedor'];
				$factura = $row_nombre['factura'];
				$fechaasignacion = $row_nombre['fechaasignacion'];
				$horaasignacion = $row_nombre['horaasignacion'];
				$fecharespuesta = $row_nombre['fecharespuesta'];
				$horarespuesta = $row_nombre['horarespuesta'];
				$fechaproxima = $row_nombre['fechaproxima'];
?>
	
	
	<tr>
		<td>Id_comentarios_v</td>
		<td>Id_seguimiento</td>
		<td>Usuario</td>
		<td>Termometro</td>
		<td>Estadodeventa</td>
		<td>Comentariovendedor</td>
		<td>Factura</td>
		<td>Fechaasignacion</td>
		<td>Horaasignacion</td>
		<td>Fecharespuesta</td>
		<td>Horarespuesta</td>
		<td>Fechaproxima</td>
	</tr>
	<tr>
		<td><?= $id_comentarios_v ?></td>
		<td><?= $id_seguimiento ?></td>
		<td><?= $usuario ?></td>
		<td><?= $termometro ?></td>
		<td><?= $estadodeventa ?></td>
		<td><?= $comentariovendedor ?></td>
		<td><?= $factura ?></td>
		<td><?= $fechaasignacion ?></td>
		<td><?= $horaasignacion ?></td>
		<td><?= $fecharespuesta ?></td>
		<td><?= $horarespuesta ?></td>
		<td><?= $fechaproxima ?></td>
	</tr>


<?php
		$i_nombre++;

		}

?>

		</table>
	</td>
	<td>
		<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">

<?php

	$result = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE id_seguimiento = '$id' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result)) {
			if ($i_nombre > 0) {}

				$id_seguimiento_tipo = $row_nombre['id_seguimiento_tipo'];
				$id_seguimiento = $row_nombre['id_seguimiento'];
				$usuario = $row_nombre['usuario'];
				$tipo = $row_nombre['tipo'];
				$t1 = $row_nombre['t1'];
				$t2 = $row_nombre['t2'];
				$t3 = $row_nombre['t3'];
				$t4 = $row_nombre['t4'];
				$t5 = $row_nombre['t5'];
				$t6 = $row_nombre['t6'];
				$t7 = $row_nombre['t7'];
				$fecha = $row_nombre['fecha'];
?>
	
	<tr>
		<th>Id_seguimiento_tipo</th>
		<th>Id_seguimiento</th>
		<th>Usuario</th>
		<th>Tipo</th>
		<th>T1</th>
		<th>T2</th>
		<th>T3</th>
		<th>T4</th>
		<th>T5</th>
		<th>T6</th>
		<th>T7</th>
		<th>Fecha</th>
	</tr>
	<tr>
		<td><?= $id_seguimiento_tipo ?></td>
		<td><?= $id_seguimiento ?></td>
		<td><?= $usuario ?></td>
		<td><?= $tipo ?></td>
		<td><?= $t1 ?></td>
		<td><?= $t2 ?></td>
		<td><?= $t3 ?></td>
		<td><?= $t4 ?></td>
		<td><?= $t5 ?></td>
		<td><?= $t6 ?></td>
		<td><?= $t7 ?></td>
		<td><?= $fecha ?></td>
	</tr>


<?php
		$i_nombre++;

		}

?>

		</table>
	</td>
</tr>