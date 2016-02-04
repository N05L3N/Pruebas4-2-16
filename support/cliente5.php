<?php
session_start();
#local vars
	$id_view = 'cliente5';
	$mt_title = 'Cliente';
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["idedit"] = $_GET["id"];
	$id = $_SESSION["idedit"];
	
#global vars
	 
#inc
	include('inc/head.php');
#models
	# include('model/m.cliente.php');
	include('model/m.cliente5.php');
#views
	include('view/v.cliente5.php');
#controllers

#inc
	include('inc/footer.php');
?>