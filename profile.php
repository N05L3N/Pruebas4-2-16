<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
#local vars
	$id_view = 'profile';
	$mt_title = 'Profile';
	$_SESSION["h4"] = $mt_title;
	#profile
	$idedit = $_SESSION["idedit"];
	$usuario = $_SESSION["usuario"];
	$tipo = $_SESSION["tipo"];
	$_SESSION["id_view"] = $id_view;
	# Vista
	$_SESSION['dataview'] = $_GET["dataview"];

#inc
	include('inc/head.php');

#controllers
	include('controller/c.profile.php');

#models

#views
	include('view/v.profile.php');

#inc
	include('inc/footer.php');
?>