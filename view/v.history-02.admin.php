<?php
	
	if ($estadodeventa == 'Caliente' OR $estadodeventa == 'caliente') {
		$CRM_estadodeventa = 'danger';
	}
	else if ($estadodeventa == 'tibio') {
		$CRM_estadodeventa = 'warning';
	}
	else if ($estadodeventa == 'frio') {
		$CRM_estadodeventa = 'info';
	}
	else if ($estadodeventa == 'Facturado' OR $estadodeventa == 'facturado') {
		$CRM_estadodeventa = 'success';
	}
	else if ($estadodeventa == 'Pendiente') {
		$CRM_estadodeventa = 'default';
	}
	else  {
		$CRM_estadodeventa = 'default';
	}

?>
<tr>	
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
			<?= $id_seguimiento ?>
		</a>
	</td>
	<td>
		<?= $usuario ?>
	</td>
	<td>

<?php

	$result = mysql_query("SELECT * FROM contacto WHERE id = '$id_seguimiento' ORDER BY id desc limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result)) {
			if ($i_nombre > 0) {}

				$nombre_hora = $row_nombre['Hora'];
				
				echo $row_nombre['nombre'];

		$i_nombre++;

		}

?>

	</td>
	<td>
		<?php

			 $enc = mb_detect_encoding($comentariovendedor, "UTF-8,ISO-8859-1");

			 if ($enc == 'ISO-8859-1') {

				echo iconv("ISO-8859-1", "UTF-8", $comentariovendedor);

			 }

			 else {

			 	echo $comentariovendedor;

			 }

			  
		?>
	</td>
	<td>
		<div style="font-size:10px;">
<?php
	
	$result = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result)) {
			if ($i_nombre > 0) {}
				
				if ($row_nombre['t1'] != '') {
					echo '• ' . $row_nombre['t1'] . '<br>';
				}
				else {

				}

				if ($row_nombre['t2'] != '') {
					echo '• ' . $row_nombre['t2'] . '<br>';
				}
				else {

				}

				if ($row_nombre['t3'] != '') {
					echo '• ' . $row_nombre['t3'] . '<br>';
				}
				else {

				}

				if ($row_nombre['t4'] != '') {
					echo '• ' . $row_nombre['t4'] . '<br>';
				}
				else {

				}

				if ($row_nombre['t5'] != '') {
					echo '• ' . $row_nombre['t5'] . '<br>';
				}
				else {

				}

				if ($row_nombre['t6'] != '') {
					echo '• ' . $row_nombre['t6'] . '<br>';
				}
				else {

				}

				if ($row_nombre['t7'] != '') {
					echo '• ' . $row_nombre['t7'] . '<br>';
				}
				else {

				}
				

		$i_nombre++;

		}

?>		
		</div>
	</td>
	<td>
		<div style="width:75px;">
			<small>
				<?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?>
			</small>
		</div>
	</td>
	<td>
		<div style="width:75px;">
			<small>
				<?= ''.$nombre_hora.'' ?>
			</small>
		</div>
	</td>
	<td>
		<div style="width:75px;">
			<small>
				<?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?>
			</small>
		</div>
	</td>
	<td>
		<button type="button" class="btn btn-<?= $CRM_estadodeventa ?> btn-xs" style="width:80px;">
			<span style="text-transform:capitalize;">
				<?= $estadodeventa ?>
			</span>
		</button>
	</td>
</tr>