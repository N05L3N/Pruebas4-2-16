<?php

	$dbh = 'localhost';
	$dbu = 'ucrmk';
	$dbp = 'Pcrmk#2014';
	$dbn = 'crmk';

	$mysql_hostname = $dbh;
	$mysql_user = $dbu;
	$mysql_password = $dbp;
	$mysql_database = "$dbn";

	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
	mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
	mysql_set_charset('utf8', $link);

?>

<form method="post" id="form1" action="form-detalles-de-contacto.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">

<table class="table table-bordered table-striped table-condensed">
	<tr>
		<td>Fecha</td>
		<td>Asesor</td>
		<td>Cliente</td>
		<td>Concepto</td>
		<td>Software</td>
		<td>Horainicio1</td>
		<td>Horainicio2</td>
		<td>Horainicio3</td>
		<td>Horafin1</td>
		<td>Horafin2</td>
		<td>Horafin3</td>
		<td>Categoria</td>
		<td>Estado</td>
		<td>Correo</td>
		<td>Teléfono</td>
		<td>Webex</td>
		<td>Team Viewer</td>
		<td>Hangout</td>
		<td>Comentarios</td>
		<td>Fecharespuesta</td>
		<td>Horarespuesta</td>
	</tr>

<?php
		$busca =  $_GET['folio'];
		echo $busca;
		$result_nombre = mysql_query("SELECT * FROM crmk.ecrm_soporte2_s WHERE id_seguimiento = '$busca' ORDER BY id_soporte2_s DESC limit 0,999999");
		$i_nombre = 0;

		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				$id_soporte2_s = $row_nombre['id_soporte2_s'];
				$id_seguimiento = $row_nombre['id_seguimiento'];
				$fecha = $row_nombre['fecha'];
				$asesor = $row_nombre['asesor'];
				$cliente = $row_nombre['cliente'];
				$concepto = $row_nombre['concepto'];
				$software = $row_nombre['software'];
				$horainicio1 = $row_nombre['horainicio1'];
				$horainicio2 = $row_nombre['horainicio2'];
				$horainicio3 = $row_nombre['horainicio3'];
				$horafin1 = $row_nombre['horafin1'];
				$horafin2 = $row_nombre['horafin2'];
				$horafin3 = $row_nombre['horafin3'];
				$categoria = $row_nombre['categoria'];
				$estado = $row_nombre['estado'];

				$medioutilizado1 = $row_nombre['medioutilizado1'];
				$medioutilizado2 = $row_nombre['medioutilizado2'];
				$medioutilizado3 = $row_nombre['medioutilizado3'];
				$medioutilizado4 = $row_nombre['medioutilizado4'];
				$medioutilizado5 = $row_nombre['medioutilizado5'];

				if ($medioutilizado1 == 'on') {

					$medioutilizado1 = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';

				}

				else {

					$medioutilizado1 = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';

				}

				if ($medioutilizado2 == 'on') {

					$medioutilizado2 = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';

				}

				else {

					$medioutilizado2 = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';

				}

				if ($medioutilizado3 == 'on') {

					$medioutilizado3 = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';

				}

				else {

					$medioutilizado3 = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';

				}

				if ($medioutilizado4 == 'on') {

					$medioutilizado4 = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';

				}

				else {

					$medioutilizado4 = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';

				}

				if ($medioutilizado5 == 'on') {

					$medioutilizado5 = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';

				}

				else {

					$medioutilizado5 = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';

				}


				$comentarios = $row_nombre['comentarios'];
				$fecharespuesta = $row_nombre['fecharespuesta'];
				$horarespuesta = $row_nombre['horarespuesta'];

?>
	<tr>
		<td><?= $fecha ?></td>
		<td><?= $asesor ?></td>
		<td><?= $cliente ?></td>
		<td><?= $concepto ?></td>
		<td><?= $software ?></td>
		<td><?= $horainicio1 ?></td>
		<td><?= $horainicio2 ?></td>
		<td><?= $horainicio3 ?></td>
		<td><?= $horafin1 ?></td>
		<td><?= $horafin2 ?></td>
		<td><?= $horafin3 ?></td>
		<td><?= $categoria ?></td>
		<td><?= $estado ?></td>
		<td style="text-align:center;"><?= $medioutilizado1 ?></td>
		<td style="text-align:center;"><?= $medioutilizado2 ?></td>
		<td style="text-align:center;"><?= $medioutilizado3 ?></td>
		<td style="text-align:center;"><?= $medioutilizado4 ?></td>
		<td style="text-align:center;"><?= $medioutilizado5 ?></td>
		<td><?= $comentarios ?></td>
		<td><?= $fecharespuesta ?></td>
		<td><?= $horarespuesta ?></td>
	</tr>

<?php

		$i_nombre++;

		}

?>

</table>

		</div>
	</div>
</form>