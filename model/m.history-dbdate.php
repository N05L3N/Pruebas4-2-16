<?php 

session_start();
$fecha = date(ymd);
$q = $_GET['q'];

$qE = explode("%20", $q);
$q1 = ''.$qE[2].''.$qE[1].''.$qE[0].'';

header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=dbdate($fecha).xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<style>
	tr {
		border: 1px solid #999;
	}
</style>

<table border="1" cellpadding="0"cellspacing="0" width="100%" style="font-size:12px;">
	<tr>
		<th align="left">Folio</th>
		<th align="left">Usuario</th>
		<th align="left">Nombre</th>
		<th align="left">Comentario</th>
		<th align="center" colspan="7">Acciones</th>
		<th align="left">Fecha</th>
		<th align="left">Hora</th>
		<th align="left">Próxima Llamada</th>
		<th align="left">Status</th>
	</tr>

<?php

	$dbh = 'localhost';
	$dbu = 'ucrmk';
	$dbp = 'Pcrmk#2014';
	$dbn = 'crmk';

	$mysql_hostname = $dbh;
	$mysql_user = $dbu;
	$mysql_password = $dbp;
	$mysql_database = "$dbn";
	$prefix = "";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
	mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
	mysql_set_charset('utf8', $link);

	$result = mysql_query("$q1");
		
			
		$i = 0;
		
		while ($row = mysql_fetch_array($result)) {
		
		if ($i > 0) { 
		
		}

		$id_seguimiento = $row['id_seguimiento'];

?>	
	<tr>
		<td align="left">
			<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
				<?= $id_seguimiento ?>
			</a>
		</td>
		<td align="left"><?= $row['usuario'] ?></td>
		<td align="left">
<?php

	$result_nombre = mysql_query("SELECT * FROM contacto WHERE id = '$id_seguimiento' ORDER BY id DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}
				
				$nombre_hora = $row_nombre['Hora'];
				echo $row_nombre['nombre'];

		$i_nombre++;

		}

?>
		</td>
		<td align="left"><?= $row['comentariovendedor'] ?></td>
<!-- -->
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t1 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t1'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t2 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t2'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t3 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t3'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t4 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t4'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t5 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t5'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t6 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t6'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t7 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t7'] . '';

		$i_nombre++;

		}

?>
</td>
<!-- -->
		<td align="left">
			<?php
				$fecharespuestaE = explode("-", $row['fecharespuesta']);
				$fecharespuesta = ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'';
			?>
			<?= $fecharespuesta ?>
		</td>
		<td align="left"><?= $nombre_hora ?></td>

		<td align="left">
			<?php
				$fechaproximaE = explode("-", $row['fechaproxima']);
				$fechaproxima = ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'';
			?>
			<?= $fechaproxima ?>
		</td>
<?php
	
	if ($row['estadodeventa'] == 'caliente') {

?>
		
		<td align="left" style="background-color:#ffc7ce; color:#9c0006;"><?= $row['estadodeventa'] ?></td>

<?php

	}

	else if ($row['estadodeventa'] == 'facturado') {

?>

		<td align="left" style="background-color:#006100; color:#c6efce;"><?= $row['estadodeventa'] ?></td>

<?php		

	}

	else if ($row['estadodeventa'] == 'tibio') {

?>

		<td align="left" style="background-color:#ffeb9c; color:#9c6500;"><?= $row['estadodeventa'] ?></td>

<?php

	}

	else if ($row['estadodeventa'] == 'frio') {

?>
		
		<td align="left" style="background-color:#dbeef3; color:#004456;"><?= $row['estadodeventa'] ?></td>

<?php

	}

	else {
?>

		<td align="center"><?= $row['estadodeventa'] ?></td>

<?php
	}

?>
	</tr>
<?php

			$i++;
					
		}

?>
</table>