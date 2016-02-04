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
		
		$result_facturado = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'facturado' ORDER BY fecharespuesta desc limit 0,9999");
		$i_facturado = 0;
			while ($row_facturado = mysql_fetch_array($result_facturado)) {
				if ($i_facturado > 0) {}
					$i_facturado++;
			}

		$result_caliente = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'caliente' ORDER BY fecharespuesta desc limit 0,9999");$i_caliente = 0;while ($row_caliente = mysql_fetch_array($result_caliente)) { if ($i_caliente > 0) {}$i_caliente++;}
		$result_tibio = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'tibio' ORDER BY fecharespuesta desc limit 0,9999");$i_tibio = 0;while ($row_tibio = mysql_fetch_array($result_tibio)) { if ($i_tibio > 0) {}$i_tibio++;}
		$result_frio = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'frio' ORDER BY fecharespuesta desc limit 0,9999");$i_frio = 0;while ($row_frio = mysql_fetch_array($result_frio)) { if ($i_frio > 0) {}$i_frio++;}
		
		$result_pendiente = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'Pendiente' ORDER BY fecharespuesta desc limit 0,9999");$i_pendiente = 0;while ($row_pendiente = mysql_fetch_array($result_pendiente)) { if ($i_pendiente > 0) {}$i_pendiente++;}
		$result_descartado = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'descartado' ORDER BY fecharespuesta desc limit 0,9999");$i_descartado = 0;while ($row_descartado = mysql_fetch_array($result_descartado)) { if ($i_descartado > 0) {}$i_descartado++;}
		
		$result_seguimiento = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'seguimiento' ORDER BY fecharespuesta desc limit 0,9999");$i_seguimiento = 0;while ($row_seguimiento = mysql_fetch_array($result_seguimiento)) { if ($i_seguimiento > 0) {}$i_seguimiento++;}
		$result_postventa = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE $where estadodeventa = 'postventa' ORDER BY fecharespuesta desc limit 0,9999");$i_postventa = 0;while ($row_postventa = mysql_fetch_array($result_postventa)) { if ($i_postventa > 0) {}$i_postventa++;}
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
			<td colspan="6">
				<div class="row">
					<div class="col-md-2"></div>
  					<div class="col-md-2">
  						<div style="width:300px; height300px; margin:auto;">
							<canvas id="chart-area" width="125" height="125"/>
						</div>
  					</div>
  					<div class="col-md-2">
						<ul>
							<li>Facturado: <?= $i_facturado ?></li>
							<li>Caliente: <?= $i_caliente ?></li>
							<li>Tibio: <?= $i_tibio ?></li>
							<li>Frio: <?= $i_frio ?></li>
							<li>Pendiente: <?= $i_pendiente ?></li>
							<li>Descartado: <?= $i_descartado ?></li>
						</ul>
					</div>
					<div class="col-md-6"></div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="6">
				<div class="row">
  					<div class="col-md-3">
  						<?php
							# include('modules/m.filtros.php');
						?>
<?php

	$filtrarporvendedor = ''.$_SESSION["filtrarporvendedor"].'';

?>
		<h4>Filtrar por Vendedor</h4>
		<form action="controller/c.filtro.vendedor.php" method="post" id="filtrarporvendedor">
			<select name="filtrarporvendedor" class="form-control" onchange="this.form.submit()">
				<option value="">Todos</option>
				<?php 
					include('model/m.select.vendedores-actuales.php')
				?>
			</select>
		</form>						
  					</div>
  					<div class="col-md-3">
  						<h4>Filtrar por Status</h4>
  						<form action="history" method="post">
							<select name="filtrarStatus"class="form-control" onchange="this.form.submit()">
								<option value="">Todos</option>
								<option value="Caliente">Caliente</option>
								<option value="Descartado">Descartado</option>
								<option value="Facturado">Facturado</option>
								<option value="Frio">Frio</option>
								<option value="Pendiente">Pendiente</option>
								<option value="Tibio">Tibio</option>
							</select>
						</form>
  					</div>
  					<div class="col-md-6">
  						<h4>Filtrar por Fecha</h4>
  						<div class="input-group input-group-md" style="width:200px;">
  							<script>

function SubmitFiltrarporfecha() {
	document.getElementById("filtrarporfecha").submit();
}

</script>
  							<form action="history" method="post" id="filtrarporfecha">
  								<table style="width:100%;">
  									<tr>
  										<td style="width:75%;">
  											<div style="width:75px;">
  												<input type="text" id="datepicker" name="fechaprox" onlyread="onlyread" class="form-control">			
  											</div>
  										</td>
  										<td style="width:25%;">
  											<button type="button" class="btn btn-default" aria-label="Left Align" onclick="javascript:SubmitFiltrarporfecha();" style="margin-left:50px;">
												<span class="glyphicon glyphicon-user" aria-hidden="true"> <span style="font-family:calibri;">Filtrar</span></span>
											</button>			
  										</td>
  									</tr>
  								</table>
								
								
							</form>
						</div>
  					</div>
				</div>
			</td>
		</tr>

<?php
	
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
			
			<li><a href='<?= $url ?>?pos=<?= $k ?>'><?= $k ?></a></li>

<?php
		
		}

	}

?>
		</ul>
	</div>
</center>

	<!--/ Contenido Dinamico-->
	</div>
	<div class="col-md-1"></div>
</div>