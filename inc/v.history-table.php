<tr>
	<td colspan="9">
		<div class="row" >
			<div class="col-md-12 col-lg-12">
				<h4>Filtrar por Fecha</h4>
			</div>
		</div>
		<div class="row" >
			<form action="<?= $url ?>" method="post" id="filtrarporfecha">
				<div class="col-md-1 col-lg-1"></div>
				<div class="col-md-1 col-lg-1">
					<strong>Desde:</strong>
				</div>
				<div class="col-md-3 col-lg-3">
					<div class="input-group input-group-md vista" id="campoparafecha">
						<input type="text" name="filterDate1" onlyread="onlyread" class="form-control datepicker" id="datepickerDesde" placeholder="<?= $filterDate1 ?>" value="<?= $filterDate1 ?>">
					</div>
				</div>
				<div class="col-md-1 col-lg-1">
					<strong>Hasta:</strong>
				</div>
				<div class="col-md-3 col-lg-3">
					<div class="input-group input-group-md vista" id="campoparafecha">
						<input type="text" name="filterDate2" onlyread="onlyread" class="form-control datepicker" id="datepickerHasta" placeholder="<?= $filterDate2 ?>" value="<?= $filterDate2 ?>">
					</div>
				</div>
				<div class="col-md-2 col-lg-2">
					<button type="button" class="btn btn-default btn-md" onclick="document.getElementById('filtrarporfecha').submit();">
						<span class="glyphicon glyphicon-filter"></span> Filtrar
					</button>
				</div>
				<div class="col-md-1 col-lg-1"></div>
				<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
				<input type="hidden" name="filtrarStatus" value="<?= $filtrarStatus ?>">
			</form>
		</div>
	</td>
</tr>
<?php

	# echo '' .$r['id_seguimiento_tipo'] . '';
	# echo '' .$r['id_seguimiento'] . '';
	# echo '' .$r['usuario'] . '>';
	# echo '' .$r['tipo'] . '';
	# echo '' .$r['t1'] . ''; # No contesto
	# echo '' .$r['t2'] . ''; # Envío de correo
	# echo '' .$r['t3'] . ''; # Llamada Efectiva
	# echo '' .$r['t4'] . ''; # Demo Online
	# echo '' .$r['t5'] . ''; # Demo Presencial
	# echo '' .$r['t6'] . ''; # Visita
	# echo '' .$r['t7'] . '';
	# echo '' .$r['fecha'] . '';
	
		if ($_GET['dev'] == '1') {

			ini_set('date.timezone', 'America/Chihuahua');

			$time2 = date('Y-m-d', gmdate('U'));

			/**/

			$res = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE fecharespuesta = '$time2' ORDER BY usuario ASC LIMIT 0,1000");
			
			$i = 1;
			$seguimientosV1 = 0;
			$seguimientosV2 = 0;
			$seguimientosV3 = 0;
			$seguimientosV4 = 0;
			
			while ($r = mysql_fetch_array($res)) {
			
				if ($i > 0) {}

					if ($r['usuario'] == 'sdelacruz') {
						
						$seguimientosV1 = $seguimientosV1;
						$seguimientosV1++;

					}
					
					else if ($r['usuario'] == 'ccastillo') {

						$seguimientosV2 = $seguimientosV2;
						$seguimientosV2++;

					}

					else if ($r['usuario'] == 'dfernandez') {

						$seguimientosV3 = $seguimientosV3;
						$seguimientosV3++;

					}

					else if ($r['usuario'] == 'aaranza') {

						$seguimientosV4 = $seguimientosV4;
						$seguimientosV4++;

					}

					else {

					}

					$i++;

			}

			/**/

			$res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t2 = 'Envío de correo') ORDER BY id_seguimiento_tipo ASC LIMIT 0,9000");
			
			$i = 1;
			$correosV1 = 0;
			$correosV2 = 0;
			$correosV3 = 0;
			$correosV4 = 0;
			
			while ($r = mysql_fetch_array($res)) {
			
				if ($i > 0) {}

					if ($r['usuario'] == 'sdelacruz') {
						
						$correosV1 = $correosV1;
						$correosV1++;

					}
					
					else if ($r['usuario'] == 'ccastillo') {

						$correosV2 = $correosV2;
						$correosV2++;

					}

					else if ($r['usuario'] == 'dfernandez') {

						$correosV3 = $correosV3;
						$correosV3++;

					}

					else if ($r['usuario'] == 'aaranza') {

						$correosV4 = $correosV4;
						$correosV4++;

					}

					else {

					}

					$i++;

			}
			

			/**/

			$res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t4 = 'Demo Online' OR t5 = 'Demo Presencial') ORDER BY id_seguimiento_tipo ASC LIMIT 0,9000");
			
			$i = 1;
			$demosV1 = 0;
			$demosV2 = 0;
			$demosV3 = 0;
			$demosV4 = 0;
			
			while ($r = mysql_fetch_array($res)) {
			
				if ($i > 0) {}

					if ($r['usuario'] == 'sdelacruz') {
						
						$demosV1 = $demosV1;
						$demosV1++;

					}
					
					else if ($r['usuario'] == 'ccastillo') {

						$demosV2 = $demosV2;
						$demosV2++;

					}

					else if ($r['usuario'] == 'dfernandez') {

						$demosV3 = $demosV3;
						$demosV3++;

					}

					else if ($r['usuario'] == 'aaranza') {

						$demosV4 = $demosV4;
						$demosV4++;

					}

					else {

					}

					$i++;

			}

		/**/

		$res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t6 = 'Visita') ORDER BY id_seguimiento_tipo ASC LIMIT 0,9000");
			
			$i = 1;
			$visitasV1 = 0;
			$visitasV2 = 0;
			$visitasV3 = 0;
			$visitasV4 = 0;
			
			while ($r = mysql_fetch_array($res)) {
			
				if ($i > 0) {}

					if ($r['usuario'] == 'sdelacruz') {
						
						$visitasV1 = $visitasV1;
						$visitasV1++;

					}
					
					else if ($r['usuario'] == 'ccastillo') {

						$visitasV2 = $visitasV2;
						$visitasV2++;

					}

					else if ($r['usuario'] == 'dfernandez') {

						$visitasV3 = $visitasV3;
						$visitasV3++;

					}

					else if ($r['usuario'] == 'aaranza') {

						$visitasV4 = $visitasV4;
						$visitasV4++;

					}

					else {

					}

					$i++;

			}

		/**/


?>


			<tr>
				<td colspan="9">
						
						<h1>[<?= $time2 ?>]</h1>

						<hr>
						<br>

						<table class="table-bordered table-striped table-compact" style="width:100%;">
							<tr>
								<th></th>
								<th>VALOR MINIMO ACEPTABLE</th>
								<th>CESAR</th>
								<th>SAID</th>
								<th>DANIEL</th>
								<th>ALVARO</th>
							</tr>
							<tr>
								<td>SEGUIMIENTOS</td>
								<td>40</td>
								<td><?= $seguimientosV1 ?></td>
								<td><?= $seguimientosV2 ?></td>
								<td><?= $seguimientosV3 ?></td>
								<td><?= $seguimientosV4 ?></td>
							</tr>
							<tr>
								<td>CORREOS ENVIADOS</td>
								<td>15</td>
								<td><?= $correosV1 ?></td>
								<td><?= $correosV2 ?></td>
								<td><?= $correosV3 ?></td>
								<td><?= $correosV4 ?></td>
							</tr>
							<tr>
								<td>DEMOS</td>
								<td>1</td>
								<td><?= $demosV1 ?></td>
								<td><?= $demosV2 ?></td>
								<td><?= $demosV3 ?></td>
								<td><?= $demosV4 ?></td>
							</tr>
							<tr>
								<td>VISITA</td>
								<td>1</td>
								<td><?= $visitasV1 ?></td>
								<td><?= $visitasV2 ?></td>
								<td><?= $visitasV3 ?></td>
								<td><?= $visitasV4 ?></td>
							</tr>
						</table>

						<br>
						<hr>

				</td>
			</tr>


<?php

		}

		else {

		}