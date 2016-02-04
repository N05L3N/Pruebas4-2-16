<?php
	$HTTP_HOST = $_SERVER['HTTP_HOST'];
	$REQUEST_URI = $_SERVER['REQUEST_URI'];

	$urlStrlen = strlen($REQUEST_URI);
	
	if ($urlStrlen == 18) {
		
		if ($usuario != '') {
			
			$url = 'http://' . $HTTP_HOST . $REQUEST_URI . '?';

		}
		
		else {
			
			$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '?';

		}

	}
	
	else {

		$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '';

	}

	

	
	$filtrarStatus = $_POST['filtrarStatus'];
	$filtrarporvendedor = $_POST["filtrarporvendedor"];

?>

<style>
    .hasDatepicker {
    	display: inline-block;
    }
    img.ui-datepicker-trigger {
    	cursor: pointer;
    	display: inline-block;
    	position: absolute;
    	width: 16%;
    }

</style>
<?php
	
	# Variables
	$h4 = $_SESSION["h4"];
	$id_view = $_SESSION["id_view"];

?>


<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">

	<script src="js/Chart.min.js"></script>
	
<?php
	
	if ($filtrarporvendedor != '') {
		$where = "usuario = '$filtrarporvendedor' AND ";
	}

	else {
		$where = "";
	}


##############
if ($filtrarporvendedor != '') {
##############


if ($filterDate1 == '--' OR $filterDate1 == '') {
  if ($filterDate2 == '--' OR $filterDate2 == '') {
    #echo '1';
    $whereDate = '';
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
  else {
    #echo '2';
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
  }
}
else {
  #echo '3';
    #$whereDate = "(fecharespuesta >= '$filterDate1')";
    $whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    $whereUser = "(usuario = '$filtrarporvendedor') AND";
}

#####################################
/*
$whereDate = "(fecharespuesta >= '$filterDate1')";
$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2')";
*/
  
  
}
else {
##############
$whereUser = '';
$whereDate = '';
#####################################  
}


$whereEquipo = '(usuario != '%equipo%') AND';
		
		$result_facturado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'facturado' ORDER BY fecharespuesta desc limit 0,9999");
		$i_facturado = 0;
			while ($row_facturado = mysql_fetch_array($result_facturado)) {
				if ($i_facturado > 0) {}
					$i_facturado++;
			}

		$result_caliente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'caliente' ORDER BY fecharespuesta desc limit 0,9999");$i_caliente = 0;while ($row_caliente = mysql_fetch_array($result_caliente)) { if ($i_caliente > 0) {}$i_caliente++;}
		$result_tibio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'tibio' ORDER BY fecharespuesta desc limit 0,9999");$i_tibio = 0;while ($row_tibio = mysql_fetch_array($result_tibio)) { if ($i_tibio > 0) {}$i_tibio++;}
		$result_frio = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'frio' ORDER BY fecharespuesta desc limit 0,9999");$i_frio = 0;while ($row_frio = mysql_fetch_array($result_frio)) { if ($i_frio > 0) {}$i_frio++;}
		
		$result_pendiente = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'Pendiente' ORDER BY fecharespuesta desc limit 0,9999");$i_pendiente = 0;while ($row_pendiente = mysql_fetch_array($result_pendiente)) { if ($i_pendiente > 0) {}$i_pendiente++;}
		$result_descartado = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'descartado' ORDER BY fecharespuesta desc limit 0,9999");$i_descartado = 0;while ($row_descartado = mysql_fetch_array($result_descartado)) { if ($i_descartado > 0) {}$i_descartado++;}
		
		$result_seguimiento = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'seguimiento' ORDER BY fecharespuesta desc limit 0,9999");$i_seguimiento = 0;while ($row_seguimiento = mysql_fetch_array($result_seguimiento)) { if ($i_seguimiento > 0) {}$i_seguimiento++;}
		$result_postventa = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE $where estadodeventa = 'postventa' ORDER BY fecharespuesta desc limit 0,9999");$i_postventa = 0;while ($row_postventa = mysql_fetch_array($result_postventa)) { if ($i_postventa > 0) {}$i_postventa++;}
?>
<script>
		var pieData = [
				{
					value: <?= $i_facturado ?>,
					color:"#5cb85c",
					highlight: "#5cb85c",
					label: "Facturado"
				},
				{
					value: <?= $i_caliente ?>,
					color: "#d9534f",
					highlight: "#d9534f",
					label: "Caliente"
				},
				{
					value: <?= $i_tibio ?>,
					color: "#f0ad4e",
					highlight: "#f0ad4e",
					label: "Tibio"
				},
				{
					value: <?= $i_frio ?>,
					color: "#5bc0de",
					highlight: "#5bc0de",
					link: "http://google.com",
					label: "Frio"
				},
				{
					value: <?= $i_pendiente ?>,
					color: "#222",
					highlight: "#222",
					label: "Pendiente"
				},
				{
					value: <?= $i_descartado ?>,
					color: "#eee",
					highlight: "#eee",
					label: "Descartado"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};

	</script>

<div class="table-responsive">
	<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">
		<caption style="background-color:White;">
			<h4>Historial</h4>
		</caption>
		<tr>
			<td colspan="9">
				<?php
					include('view/v.history.filtros.phtml');
				?>
			</td>
		</tr>
		<tr>
			<td colspan="9">
				<div class="row">
  					<div class="col-md-5">
  							<table class="table table-striped table-bordered" width="100%">
							<tr>
								<td width="30%" style="vertical-align:middle;">
									<div style="width:200px; height150px; margin:auto;">
										<canvas id="chart-area" width="200" height="150"/>
									</div>
								</td>
								<td width="70%">
									<ul>
										<!--
										<li>Caliente: <?= $i_caliente ?></li>
										<li>Tibio: <?= $i_tibio ?></li>
										<li>Frio: <?= $i_frio ?></li>
										-->
<!--										
										<li>Descartado: <?= $i_descartado ?></li>
										<li>Correo: <?= $i_correo ?></li>
										<li>Llamada: <?= $i_llamada ?></li>
										<li>Correo y Llamada: <?= $i_llamadaycorreo ?></li>
										<li>Facturado: <?= $i_facturado ?></li>
-->
									</ul>
									<table class="table table-bordered table-striped table-condensed table-hover" style="width:100%;">
										<tr>
											<tr>
												<th class=""><span class="label label-success"><?= $i_facturado ?></span></th><td>Facturado</td>
											</tr>
											<tr>
												<th class=""><span class="label label-danger"><?= $i_caliente ?></span></th><td>Caliente</td>
											</tr>
											<tr>
												<th class=""><span class="label label-warning"><?= $i_tibio ?></span></th><td>Tibio</td>
											</tr>
											<tr>
												<th class=""><span class="label label-info"><?= $i_frio ?></span></th><td>Frio</td>
											</tr>
											<tr>
												<th style="width:5%;"><span class="label label-default"><?= $i_descartado ?></span></th><td style="width:95%;">Descartado</td>
											</tr>
											<tr>
												<th class=""><span class="label label-primary"><?= $i_pendiente ?></span></th><td>Pendiente</td>
											</tr>
										</tr>
									</table>

								</td>
							</tr>
						</table>
  						
  					</div>

					<div class="col-md-7">
						<h4>Reporte de Asignaciones</h4>
						
						<?php

							if ($filtrarporvendedor != '') {
							
								$sql_asignacionesTotal1 = "SELECT * FROM contacto WHERE asignadoa = '$filtrarporvendedor' AND estadodeventa != 'descartado'";
  								$result_asignacionesTotal1 = mysql_query($sql_asignacionesTotal1);
  								$numero_asignacionesTotal1 = mysql_num_rows($result_asignacionesTotal1);

  								$dia = date(d);
								$mes = date(m);
								$ano = date(Y);
								$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';
								
								$sql_pendientes1 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$filtrarporvendedor' AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
								$result_pendientes1 = mysql_query($sql_pendientes1);
  								$numero_pendientes1 = mysql_num_rows($result_pendientes1);

								$hora24 = date(G);
								if ($hora24 == 0 OR $hora24 == 1 OR $hora24 == 2 OR $hora24 == 3 ) {
									$dia = $dia-1;
								}
								
								else {
								
								}
								
								$fecha_asignacionesHoy1 = ''.$ano.'-'.$mes.'-'.$dia.'';

								$sql_asignacionesHoy1 = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$filtrarporvendedor' AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
  								$result_asignacionesHoy1 = mysql_query($sql_asignacionesHoy1);
  								$numero_asignacionesHoy1 = mysql_num_rows($result_asignacionesHoy1);

						?>

						<div class="row">
							<div class="col-md-4">
								Seguimientos para Hoy »
								<button type="button" class="btn btn-success" aria-label="Left Align" style="width:100%; cursor:default;">
									<?= $numero_asignacionesHoy1 ?>
								</button>
							</div>
							<div class="col-md-4">
								Total de Asignaciones»
								<button type="button" class="btn btn-primary" aria-label="Left Align" style="width:100%; cursor:default;">
  									<?= $numero_asignacionesTotal1 ?>
								</button>
							</div>
							<div class="col-md-4">
								Seguimientos Atrasados »
								<button type="button" class="btn btn-danger" aria-label="Left Align" style="width:100%; cursor:default;">
  									<?= $numero_pendientes1 ?>
								</button>
							</div>
						</div>

						<?php

							}
							else {
						
						?>

						<div class="row">
							<div class="col-md-4">
								Seguimientos para Hoy »
								<button type="button" class="btn btn-success" aria-label="Left Align" style="width:100%; cursor:default;">
									<?= $_SESSION['numero_asignacionesHoy'] ?> 
								</button>
							</div>
							<div class="col-md-4">
								Total de Asignaciones»
								<button type="button" class="btn btn-primary" aria-label="Left Align" style="width:100%; cursor:default;">
  									<?= $_SESSION['numero_asignacionesTotal2'] ?>
								</button>
							</div>
							<div class="col-md-4">
								Seguimientos Atrasados »
								<button type="button" class="btn btn-danger" aria-label="Left Align" style="width:100%; cursor:default;">
  									<?= $_SESSION['numero_pendientes'] ?>
								</button>
							</div>
						</div>

						<?php
							
							}

						?>

						<br>
						<h4><!-- Filtrar por -->Status</h4>
						<div class="row">
							<div class="col-lg-3 col-md-3">
								 Facturado
								<button type="button" class="btn btn-success" aria-label="Left Align" style="width:100%; cursor:default;">
									<?= $i_facturado ?>
								</button>
							</div>
							<div class="col-lg-3 col-md-3">
								 Caliente
								<button type="button" class="btn btn-danger" aria-label="Left Align" style="width:100%; cursor:default;">
									<?= $i_caliente ?>
								</button>
							</div>
							<div class="col-lg-3 col-md-3">
								Tibio
								<button type="button" class="btn btn-warning" aria-label="Left Align" style="width:100%; cursor:default;">
									<?= $i_tibio ?>
								</button>
							</div>
							<div class="col-lg-3 col-md-3">
								 Frio
								<button type="button" class="btn btn-info" aria-label="Left Align" style="width:100%; cursor:default;">
									<?= $i_frio ?>
								</button>
							</div>
						</div>

					</div>
				</div>
			</td>
		</tr>
<?php

	if ($_SESSION['tipo'] == 'vendedor') {

	}

	else {

		include('view/v.history-table.php');

?>

		<tr>
			<td colspan="9" style="text-align:center;">
				<a href="model/m.history-dbdate.php?q=<?= $select ?>">
					<button type="button" class="btn btn-success btn-lg">
						<span class="glyphicon glyphicon-download" aria-hidden="true"></span> Exportar a Excel
					</button>
				</a>
			</td>
		</tr>

<?php

	}

	# TR
	include('view/v.history-01.admin.php');

	$c = $mysql->query($select);

	while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

		$fecharespuestaE = explode("-", $rows['fecharespuesta']);	
		$usuario = $rows['usuario'];
		$id_seguimiento = $rows['id_seguimiento'];
		$usuario = $rows['usuario'];
		$termometro = $rows['termometro'];
		$estadodeventa = $rows['estadodeventa'];
		$comentariovendedor = $rows['comentariovendedor'];
		$factura = $rows['factura'];
		$fechaasignacion = $rows['fechaasignacion'];
		$horaasignacion = $rows['horaasignacion'];
		$fecharespuesta = $rows['fecharespuesta'];
		$fechaproximaE = explode("-", $rows['fechaproxima']);	
		$horarespuesta = $rows['horarespuesta'];


		# TD
		include('view/v.history-02.admin.php');

	}

?>
	</table>
</div>

<center>
	<div style="margin:auto;">
		<ul class="pagination pagination-sm">

<?php

	for($k=1; $k <= $total; $k++) {
		
		if($ini == $k) {

?>

			<li class="active"><a href='#'><b><?= $k ?></b></a></li>

<?php

		}

		else {

?>
			
			<li>
				<!-- <a href='<?= $url ?>?pos=<?= $k ?>'>
					<?= $k ?>
				</a> -->
					<span style="cursor:pointer;" onclick="javascript:SubmitFiltrarporpaginacion();" onMouseOver="pagination('<?= $k ?>');"><?= $k ?></span>
			</li>

<?php
		
		}

	}

?>
		</ul>
	</div>


<script>

function SubmitFiltrarporpaginacion() {
	document.getElementById("filtrarporpaginacion").submit();
}

function pagination(lapag){
	var lapag;
	var url = document.url;
	document.getElementById ("pagination").value = lapag;
	$("#filtrarporpaginacion").attr("action", "?pos=" + lapag);
}

</script>
<!-- <?= $url ?> -->
	<form action="" method="post" id="filtrarporpaginacion">
		<input type="hidden" name="pagination" value="[" id="pagination">
		<input type="hidden" name="filtrarporvendedor" value="<?= $filtrarporvendedor ?>">
		<input type="hidden" name="filtrarStatus" value="<?= $filtrarStatus ?>">
		<input type="hidden" name="filterDate1" value="<?= $filterDate1 ?>">
		<input type="hidden" name="filterDate2" value="<?= $filterDate2 ?>">
	</form>

</center>

	<!--/ Contenido Dinamico-->
	</div>
	<div class="col-md-1"></div>
</div>