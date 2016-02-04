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
				<li><a href="registrar_cliente.php">Agregar Cliente</a></li>
			</ul>
		</td>
		<td>
			<ul class="menu-principal">
				<li><span class="subtitulo"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Reportes</span></li>
				<li><a href="history.php">Bitácoras de Seguimiento</a></li>
				<li><a href="reportes.php?idReporte=01">Exportar por rango de Fecha</a></li>
			</ul>
		</td>
	</tr>
</table>

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

	# Incluir Filtros

	if ($id_view == 'diary' OR $id_view == 'late') {

	}

	else {

		include('modules/m.filtros.php');

	}

?>

<div class="table-responsive">
	<table class="table table-bordered table-striped" style="width:90%; margin:auto;">
		<caption style="background-color:White;">
			<h4>Asignaciones</h4>
		</caption>

<?php
	
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