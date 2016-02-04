<style>

table.menu-principal {
	background-color: #fff;
	margin:auto; 
	margin-bottom: 10px;
	width: 75%;
}

table.menu-principal td {
	width: 33%;
}

ul.menu-principal {
	list-style: none;
}

span.subtitulo {
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 10px;
}

</style>

<table class="table table-bordered table-striped table-condensed menu-principal">
	<tr>
		<th colspan="4">Administración</th>
	</tr>
	<tr>
		<td>
			<ul class="menu-principal">
				<li><span class="subtitulo"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</span></li>
				<li><a href="usuarios.php">Administrar Usuarios</a></li>
			</ul>
		</td>
		<td>
			<ul class="menu-principal">
				<li><span class="subtitulo"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Clientes</span></li>
				<li><a href="registrar_cliente">Agregar Cliente</a></li>
				<li><a href="import">Importar Base de Datos <span class="label label-danger">Nuevo</span></a></li>
			</ul>
		</td>
		<td>
			<ul class="menu-principal">
				<li><span class="subtitulo"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Reportes</span></li>
				<li><a href="if.consultas?iframe=02">Gráficas de Seguimientos y Asignaciones</a></li>
				<li><a href="history.php">Bitácoras de Seguimiento</a></li>
				<li><a href="reportes.php?idReporte=01">Exportar por rango de Fecha</a></li>
				<li><a href="reportes.php?idReporte=02">Exportar Facturados</a></li>
				<li><a href="reportes.php?idReporte=03">Reporte de ventas por producto </a></li>
				<li><a href="info">Datos del CRM</a></li>
			</ul>
		</td>
	</tr>
</table>


<!-- -->

<ul class="nav nav-tabs" role="tablist" style="width:75%; margin:auto;">
	<li class="active">
		<a href="#filtros" role="tab" data-toggle="tab">
			Filtros
		</a>
	</li>
</ul>
<div class="tab-content" style="width:75%; margin:auto;">
  	<div class="tab-pane active" id="filtros">
  		<?php include('modules/m.filtro.individual.php'); ?>
  	</div>
</div>

<!-- -->



<?php
	
	# Variables
	$h4 = $_SESSION["h4"];
	$id_view = $_SESSION["id_view"];

?>


<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<!-- Contenido Dinamico-->




<?php

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';

	$sql_asignacionesTotal = "SELECT * FROM contacto WHERE asignadoa = '$filtrarporvendedor' AND estadodeventa != 'descartado'";
  	$result_asignacionesTotal = mysql_query($sql_asignacionesTotal);
  	$numero_asignacionesTotal = mysql_num_rows($result_asignacionesTotal);

	$sql_asignacionesHoy = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$filtrarporvendedor' AND fechaproxima = '$fecha' AND horaasignacion != 'ok' ORDER BY fechaproxima";
  	$result_asignacionesHoy = mysql_query($sql_asignacionesHoy);
  	$numero_asignacionesHoy = mysql_num_rows($result_asignacionesHoy);

	$sql_pendientes = "SELECT * FROM ecrm_comentarios_v WHERE usuario = '$filtrarporvendedor' AND fechaproxima < '$fecha' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado'";
  	$result_pendientes = mysql_query($sql_pendientes);
  	$numero_pendientes = mysql_num_rows($result_pendientes);

	$_SESSION['filtrarporvendedor'];
  	$filtrarporvendedor;

?>

<div class="table-responsive">
	<table class="table table-bordered table-striped" style="width:75%; margin:auto;">
<?php

	# Incluir Filtros

	if ($id_view == 'diary' OR $id_view == 'late') {

	}

	else {

?>

		<tr>
			<td style="width:100%;" colspan="4">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<?php

							if ($_SESSION["tipo"] == 'administrador' || $_SESSION["tipo"] == 'programador') {

								 include('modules/m.filtro.vendedor.php');

							}
							else {

							}
						?>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						Hoy » <button type="button" class="btn btn-success btn-md"><?= $numero_asignacionesHoy ?></button>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						Asignaciones » <button type="button" class="btn btn-primary btn-md"><?= $numero_asignacionesTotal ?></button>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						Atrasados » <button type="button" class="btn btn-danger btn-md"><?= $numero_pendientes ?></button>
					</div>
				</div>
			</td>
		</tr>

<?php

		

	}

	
	# TR
	include('view/v.asignaciones-01.admin.php');

	$c = $mysql->query($select);

	while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

		# TD
		include('view/v.asignaciones-02.admin.php');

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

			if ($_GET['s'] == 'f') {
?>
			<li><a href='<?= $url ?>?s=f&pos=<?= $k ?>'><?= $k ?></a></li>
<?php
			}
			
			else {
?>
			<li><a href='<?= $url ?>?pos=<?= $k ?>'><?= $k ?></a></li>
<?php
			}
		
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