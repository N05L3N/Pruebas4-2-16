<?php
	
	# Configuración de base de datos para la paginación
	include('controller/databases.php');


	$per_page = 10;

	#getting number of rows and calculating no of pages
	#$sql = "select * from maat.cliente_basico";
	$sql = "select * from contacto";
	$rsd = mysql_query($sql);
	$count = mysql_num_rows($rsd);
	$pages = ceil($count/$per_page);

	# echo $id_view;
	$titleMensaje = $_SESSION['titleMensaje'];
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CRM">
	<meta name="author" content="Armando Mariscal @ArmandoMariscal">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?= ''.$mt_title.'-'.$titleMensaje.''?><?= '('.$id_view.')' ?></title>

	<!-- Pagination -->
	<link href="css/pagination.css" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<!-- -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- -->

	<!-- Bootstrap theme -->
	
	<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<!-- 
	<link href="dist/css/bootstrap-theme.slate.css" rel="stylesheet">
	--> 	

<?php

	if ($id_view == 'login') {
		
		include('inc/i.head.login.php');

	}

	else if ($id_view == 'usuarios') {

		include('inc/i.head.usuarios.php');

	}

	else if ($id_view == 'cliente') {
		
		include('inc/i.head.cliente.php');
	}

	else if ($id_view == 'seguimientos.actualizar-venta') {
		
		include('inc/i.head.seguimientos.actualizar-venta.php');

	}

	else if ($id_view == 'seguimientos.actualizar-soporte') {
		
		include('inc/i.head.seguimientos.actualizar-soporte.php');

	}

	else if ($id_view == 'asignaciones' OR $id_view == 'diary' OR $id_view == 'late' OR $id_view == 'today') {

		include('inc/i.head.asignaciones.php');
	}

	else if ($id_view == 'panel') {
		
		include('inc/i.head.diary.php');

	}

	else if ($id_view == 'history') {
		
		include('inc/i.head.history.php');

	}

	else if ($id_view == 'cliente5') {
		
		include('inc/i.head.cliente5.php');

	}

	else {

?>        
	<link href="signin.css" rel="stylesheet">
	<link href="theme.css" rel="stylesheet">
<?php
	
	}

?>

</head>
<body>