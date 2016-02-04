<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'asignaciones';
	$mt_title = 'Asignaciones';
	$_SESSION["h4"] = $mt_title;
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
	# Vista
	$_SESSION['dataview'] = $_GET["dataview"];
#controllers
	include('controller/databases.php');
	include('controller/dataview.php');

# Models

	if ($_POST['fecha_venta'] != '' AND $_POST['fecha_final'] != '' AND $_POST['fecha_id'] != '') {
		
		$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
		mysql_select_db("$dbn", $conexion);
		
		$fecha_ventaE = explode("-", $_POST['fecha_venta']);
            $fecha_venta = ''.$fecha_ventaE[2].'-'.$fecha_ventaE[1].'-'.$fecha_ventaE[0].'';

            $fecha_finalE = explode("-", $_POST['fecha_final']);
            $fecha_final = ''.$fecha_finalE[2].'-'.$fecha_finalE[1].'-'.$fecha_finalE[0].'';

		$fecha_id = $_POST['fecha_id'];

		$sql_venta = "UPDATE crmk.ecrm_asignacion SET fecha_venta = '$fecha_venta', fecha_final = '$fecha_final' WHERE id_seguimiento = '$fecha_id';";
		mysql_query($sql_venta, $conexion);

	}
	else {

	}

#inc
	include('inc/head.php');
#views
	# include('model/m.panel.administrador-eliminar.sql.php');
	if (isset($_GET['pos'])) {
		$ini=$_GET['pos'];
	}
	else {
		$ini=1; 
	}

	# Filtros
	$_SESSION['form-filters-status'] = $_POST['form-filters-status'];
	# $_SESSION['form-filters-status'] = 'Caliente';
	include('controller/c.asignaciones.php'); 
	include('view/v.asignaciones.php'); 
#models




#inc
	include('inc/footer.php');
?>