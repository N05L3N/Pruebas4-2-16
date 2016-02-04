<?php
session_start();
# Corrige problemas con las variables en ie
header('P3P: CP="CAO PSA OUR"');
header('Content-Type: text/html;charset=utf-8');
#local vars
	$id_view = 'seguimientos.actualizar-venta';
	$mt_title = 'Seguimientos Actualizar Venta';
	$idedit = $_SESSION["idedit"];
	$termometro = $_SESSION["termometro"];
#inc
	include('inc/head.php');
#models
	include('model/m.detalles-de-contacto.php');
#views
	include('view/v.detalles-de-contacto.php');
#controllers

#inc
	include('inc/footer.php');
?>