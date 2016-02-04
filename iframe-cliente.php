<?php
session_start();
#local vars
	$id_view = 'iframe-cliente';
	$mt_title = 'iframe-cliente';
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["idedit"] = $_GET["id"];
	$id = $_SESSION["idedit"];
	
#global vars
	 
#inc
	include('inc/head.php');
#models
	include('model/m.cliente.php');
#views
	# include('view/v.cliente.php');
	include('view/v.iframe-cliente.php');
#controllers

#inc
	include('inc/footer.php');
?>