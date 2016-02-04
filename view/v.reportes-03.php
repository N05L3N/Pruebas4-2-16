<?php

function vendedorXnombre($x) {

	if ($x == 'ccastillo') {
		$vendedor = 'Cesar';
	}
	else if ($x == 'sdelacruz') {
		$vendedor = 'Said';
	}
	else if ($x == 'dfernandez') {
		$vendedor = 'Daniel';
	}
	else {
	}
	echo $vendedor;
}

function conteoXventas($x) {

	$vendedor = $x;

	$result2 = mysql_query("SELECT DISTINCT(id_seguimiento) id_seguimiento, usuario, software, version FROM ecrm_data_s WHERE id_seguimiento IN 
		(SELECT id_seguimiento FROM ecrm_comentarios_v WHERE estadodeventa = 'facturado' AND usuario='$vendedor') ORDER BY `id_ecrm_data_s` DESC");

	$i2 = 1;
	
	$interiCADLite = 0;
	$KD = 0;
	$interiCADT6 = 0;
	$a8000 = 0;
	$CK = 0;
	$LiteEst = 0;
	$Curso = 0;
	$CuttingList = 0;
	$T5aT6 = 0;
	$a7000a8000 = 0;
	$Litea8000 = 0;
	$KDa8000 = 0;
	$LiteaT6 = 0;
	$KDaT6 = 0;

	while ($row2 = mysql_fetch_array($result2)) {
		
		if ($i2 > 0) {
		}
 
		# echo '#' . $i2 . ' id: ' . $row2['id_seguimiento'] . ', software: '. $row2['software'] . '';

		if ($row2['software'] == 'InteriCAD Lite') {$interiCADLite++; } else { }
		if ($row2['software'] == 'KD') {$KD++;} else { }
		if ($row2['software'] == 'InteriCAD T6') {$interiCADT6++; } else { }
		if ($row2['software'] == 'a8000') {$a8000++;} else { }
		if ($row2['software'] == 'CK') {$CK++;} else { }
		if ($row2['software'] == 'LiteEst') {$LiteEst++;} else { }
		if ($row2['software'] == 'Curso') {$Curso++;} else { }
		if ($row2['software'] == 'CuttingList') {$CuttingList++;} else { }
		if ($row2['software'] == 'T5aT6') {$T5aT6++;} else { }
		if ($row2['software'] == 'a7000a8000') {$a7000a8000++;} else { }
		if ($row2['software'] == 'Litea8000') {$Litea8000++;} else { }
		if ($row2['software'] == 'KDa8000') {$KDa8000++;} else { }
		if ($row2['software'] == 'LiteaT6') {$LiteaT6++;} else { }
		if ($row2['software'] == 'KDaT6') {$KDaT6++;} else { }
		
		# echo '<br>';

		$i2++;


	}

?>
	<tr>
		<td><?php vendedorXnombre($vendedor) ?></td>
		<td><?= $interiCADLite ?></td>
		<td><?= $KD ?></td>
		<td><?= $interiCADT6 ?></td>
		<td><?= $a8000 ?></td>
		<td><?= $CK ?></td>
		<td><?= $LiteEst ?></td>
		<td><?= $Curso ?></td>
		<td><?= $CuttingList ?></td>
		<td><?= $T5aT6 ?></td>
		<td><?= $a7000a8000 ?></td>
		<td><?= $Litea8000 ?></td>
		<td><?= $KDa8000 ?></td>
		<td><?= $LiteaT6 ?></td>
		<td><?= $KDaT6 ?></td>
	</tr>
<?php	

}

?>

<table class="table table-bordered">
	<tr>
		<th colspan="9">
		</th>
		<th colspan="6" style="text-align:center;">
			Actualización
		</th>
	</tr>
	<tr>
		<th></th>
		<th>Lite</th>
		<th>KD</th>
		<th>T6</th>
		<th>8000</th>
		<th>CK</th>
		<th>Lite Est</th>
		<th>Curso</th>
		<th>Cutting List</th>
		<th>T5 a T6</th>
		<th>7000 a 8000</th>
		<th>Lite a 8000</th>
		<th>KD a 8000</th>
		<th>Lite a T6</th>
		<th>KD a T6</th>
	</tr>
<?php

	conteoXventas('ccastillo');
	conteoXventas('sdelacruz');
	conteoXventas('dfernandez');

?>
</table>