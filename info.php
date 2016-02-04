<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'info';
	$mt_title = 'info';
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
# models
	include('model/m.info.php');
#inc
	include('inc/head.php');
#views

	if (isset($_GET['pos'])) {
		$ini=$_GET['pos'];
	}
	else {
		$ini=1; 
	}

	include('controller/c.info.php'); 
	include('view/v.info.php');
#models

#inc
	include('inc/footer.php');
?>