<?php
session_start();
#local vars
	$id_view = 'iframe-facturado';
	$mt_title = 'iframe-facturado';
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["idedit"] = $_GET["id"];
	$id = $_SESSION["idedit"];
	
#global vars
	 
#inc
	include('inc/head.php');
#models
	include('model/m.facturado.php');
#views
	# include('view/v.facturado.php');
	include('view/v.iframe-facturado.php');
#controllers

#inc
	include('inc/footer.php');
?>