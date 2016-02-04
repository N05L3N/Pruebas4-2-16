<?php
session_start();
#local vars
	$id_view = 'import';
	$mt_title = 'Import';
	#Asignaciones
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
#inc
	include('inc/head.php');
#models
	include('model/m.import.php');
#controllers

#views
	include('view/v.import.php');

#inc
	include('inc/footer.php');
?>