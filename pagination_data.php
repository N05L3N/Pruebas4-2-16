<?php
	
	session_start();
	
	$idedit = $_SESSION["idedit"];
	$id_view = $_SESSION["id_view"];
	
	include('controller/databases.php');

	$per_page = 30;

	if($_GET) {
		$page=$_GET['page'];
	}

	# get table contents
	$start = ($page-1)*$per_page;

	if ($_SESSION["tipo"] == 'administrador' || $_SESSION["tipo"] == 'programador'){

	}

	else if ($_SESSION["tipo"] == 'vendedor') {
		$usuario = $_SESSION["usuario"];

		# SELECT PARA MOSTRAR ADVERTENCIA
		$usuario = $_SESSION["usuario"];
		$dte = date(ymdhis);  
		$dia = date(d);
		$mes = date(m);
		$ano = date(Y);
		$fecha_actual = ''.$ano.''.$mes.''.$dia.'';
		$select_fechaproxima = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima = '$fecha_actual' ORDER BY id_comentarios_v desc limit $start,$per_page");

		$i = 0;

		while ($row_fechaproxima = mysql_fetch_array($select_fechaproxima)) {
			
			if ($i > 0) {}

			$control_fechaproxima = 'si';

		}
	$i++;

	# IF PARA MOSTRAR ADVERTENCIA
	if($control_fechaproxima == 'si') {
		if ($_SESSION["id_view"] == 'ryg' OR $_SESSION["id_view"] == 'diary' OR $_SESSION["id_view"] == 'late') {

	}
	else {

?>
		<div class="alert alert-warning alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>¡Atención!</strong> Tienes segumientos programados para el día de hoy. <a href="diary.php">Ver</a>
		</div>
<?php
	}
	}	

else {

}

} # Cierra el else if para el vendedor

else {

}


# Incluir Filtro por fecha


	if ($_SESSION["id_view"] == 'diary' OR $_SESSION["id_view"] == 'late') {

	}

	else {
		
		include('modules/m.filtros.php');

	}

?>




<div class="table-responsive">
<br>
	<table class="table table-bordered table-striped">
		<caption style="background-color:White;">
			 <h4><?= $_SESSION["h4"] ?></h4>
		</caption>
<?php

$usuario = $_SESSION["usuario"];

if($_SESSION["tipo"] == 'administrador' || $_SESSION["tipo"] == 'programador'){
if($_SESSION["id_view"] == 'ryg'){
include('model/m.panel.administrador.ryg.php'); 
# echo 'X';
}
else {

if ($_SESSION['dataview'] == '' OR $_SESSION['dataview'] == 'grid') {
include('model/m.panel.administrador.php');
}

else if ($_SESSION['dataview'] == 'list') {
include('model/m.panel.administrador-list.php'); 
}

else {
include('model/m.panel.administrador.php');
}


}

}

else if ($_SESSION["tipo"] == 'vendedor'){

# Verificamos si el usuario es un vendedor
# Posibles pantallas = 2
# Agenda y RYG

if($id_view == 'diary'){

	include('model/m.panel.diary.php');

}

else if ($id_view == 'ryg'){
	
	include('model/m.panel.ryg.php');

}

else if ($id_view == 'today'){
	
	include('model/m.panel.today.php');
#	echo '<div style="width:500px; height:500px;">today</div>';

}

else if ($id_view == 'late'){
	
	include('model/m.panel.late.php');

}

else if ($id_view == 'trash'){

	include('model/m.panel.trash.php');

}

else {

	include('model/m.panel.vendedor.php');

}

}



else {}

?>
</table>
</div>