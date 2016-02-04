<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'panel';
	$mt_title = 'Panel';
	$_SESSION["h4"] = 'Asignaciones';
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
#inc
	include('inc/head.php');
#views
	include('model/m.panel.administrador-eliminar.sql.php');
	include('view/v.panel.php');
#models


#inc
	include('inc/footer.php');
?>