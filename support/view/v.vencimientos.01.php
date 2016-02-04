<table class="table table-striped table-bordered">
	<tr>
		<!-- <td>Id_ecrm_asignacion</td> -->
		<td>Folio</td>
		<td>Nombre</td>
		<!-- <td>Age</td> -->
		<!-- <td>Administrador</td> -->
		<td>Soporte</td>
		<td>Vendedor</td>
		<!-- <td>Dualcore</td> -->
		<td>Producto</td>
		<!-- <td>Status</td> -->
		<td>Licencia</td>
		<!-- <td>Dias</td> -->
		<td>Proxima_llamada</td>
		<td>Fecha_inicial</td>
		<td>Fecha_final</td>
		<td>Fecha_venta</td>
		<td>Monto_venta</td>
		<!-- <td>Fecha_asignacion</td> -->
		<!-- <td>Hora_asignacion</td> -->
		<!-- <td>Fecha</td> -->
	</tr>
<?php

	$asignacion_query = mysql_query("SELECT * FROM ecrm_asignacion WHERE $where age = 1 ORDER BY id_ecrm_asignacion DESC");

	$i = 0;
	while ($row = mysql_fetch_array($asignacion_query)) {
		if ($i > 0) {}
		
		$vencimientos_id_ecrm_asignacion = $row['id_ecrm_asignacion'];
		$vencimientos_id_seguimiento = $row['id_seguimiento'];
		$vencimientos_age = $row['age'];
		$vencimientos_administrador = $row['administrador'];
		$vencimientos_soporte = $row['soporte'];
		$vencimientos_vendedor = $row['vendedor'];
		$vencimientos_dualcore = $row['dualcore'];
		$vencimientos_producto = $row['producto'];
		$vencimientos_status = $row['status'];
		$vencimientos_licencia = $row['licencia'];
		$vencimientos_dias = $row['dias'];
		$vencimientos_proxima_llamada = $row['proxima_llamada'];

		$fecha_inicialE = explode("-", $row['fecha_inicial']);
		$vencimientos_fecha_inicial = ''.$fecha_inicialE[2].'-'.$fecha_inicialE[1].'-'.$fecha_inicialE[0].'';

		$fecha_finalE = explode("-", $row['fecha_final']);
		$vencimientos_fecha_final = ''.$fecha_finalE[2].'-'.$fecha_finalE[1].'-'.$fecha_finalE[0].'';

		$fecha_ventaE = explode("-", $row['fecha_venta']);
		$vencimientos_fecha_venta = ''.$fecha_ventaE[2].'-'.$fecha_ventaE[1].'-'.$fecha_ventaE[0].'';

		$vencimientos_monto_venta = $row['monto_venta'];
		
		$fecha_asignacionE = explode("-", $row['fecha_asignacion']);
		$vencimientos_fecha_asignacion = ''.$fecha_asignacionE[2].'-'.$fecha_asignacionE[1].'-'.$fecha_asignacionE[0].'';

		$vencimientos_hora_asignacion = $row['hora_asignacion'];

		$fechaE = explode("-", $row['fecha']);
		$vencimientos_fecha = ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'';

?>
			<tr>
				<!-- <td><?= $vencimientos_id_ecrm_asignacion ?></td> -->
				<td><?= $vencimientos_id_seguimiento ?></td>
				<td>
<?php
	
	$query = mysql_query("SELECT * FROM contacto WHERE id = '$vencimientos_id_seguimiento' limit 1");

	$i2 = 0;
	while ($r = mysql_fetch_array($query)) {
		
		if ($i2 > 0) {}
		
		$q_nombre = $r['nombre'];

		$i2++; 
	}

					

					$enc = mb_detect_encoding($q_nombre, "UTF-8,ISO-8859-1");

			 		if ($enc == 'ISO-8859-1') {
			 	
						echo iconv("ISO-8859-1", "UTF-8", $q_nombre);

			 		}

			 		else {

			 			echo $q_nombre;

			 		}

?>

				</td>
				<!-- <td><?= $vencimientos_age ?></td> -->
				<!-- <td><?= $vencimientos_administrador ?></td> -->
				<td><?= $vencimientos_soporte ?></td>
				<td><?= $vencimientos_vendedor ?></td>
				<!-- <td><?= $vencimientos_dualcore ?></td> -->
				<td><?= $vencimientos_producto ?></td>
				<!-- <td><?= $vencimientos_status ?></td> -->
				<td><?= $vencimientos_licencia ?></td>
				<!-- <td><?= $vencimientos_dias ?></td> -->
				<td><?= $vencimientos_proxima_llamada ?></td>
				<td><?= $vencimientos_fecha_inicial ?></td>
				<td><?= $vencimientos_fecha_final ?></td>
				<td><?= $vencimientos_fecha_venta ?></td>
				<td>

<?php 
	
	setlocale(LC_MONETARY, 'en_US'); 
	$vencimientos_monto_ventaS = money_format('%i', $vencimientos_monto_venta) . "\n"; 

	echo '$' . substr($vencimientos_monto_ventaS, 4) . ''; 

?>
				</td>

				<!-- <td><?= $vencimientos_fecha_asignacion ?></td> -->
				<!-- <td><?= $vencimientos_hora_asignacion ?></td> --
				<!-- <td><?= $vencimientos_fecha ?></td> -->
			</tr>
<?php

        	$i++; 
	}

?>	
</table>