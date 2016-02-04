<?php


$filterDate1 =  $_POST['filterDate1'];
$filterDate2 =  $_POST['filterDate2'];

$filterDate1E = explode("-", $filterDate1);
$filterDate1 = ''. $filterDate1E[2]. '-'. $filterDate1E[1] .'-'. $filterDate1E[0] . '';

$filterDate2E = explode("-", $filterDate2);
$filterDate2 = ''. $filterDate2E[2]. '-'. $filterDate2E[1] .'-'. $filterDate2E[0] . '';

if ($filterDate1 == '--') { $filterDate1 = ''; } else { }
if ($filterDate2 == '--') { $filterDate2 = ''; } else { }

if ($filterDate1 == '') {
	$whereDate2 = '(fecharespuesta >= \'2015-05-07\' AND fecharespuesta <= \'2015-05-07\') AND';
	$whereDate2 = '';	
}
else {
	$whereDate2 = "(fecharespuesta >= ' $filterDate1' AND fecharespuesta <= '$filterDate2') AND";
}

	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$fecha_pendientes = ''.$ano.'-'.$mes.'-'.$dia.'';
	$fecha_asignacionesHoy1 = ''.$ano.'-'.$mes.'-'.$dia.'';

/* Consumibles*/
  	$usuariosConsumibles = array(
		'1' => 'sdelacruz',
		'2' => 'ccastillo',
		'3' => 'dfernandez',
		'4' => 'aaranza',
		'5' => 'mario',
		'6' => 'rubi',
		'7' => 'ventascat05',
		'8' => 'ventascat13',
		'9' => 'gabriela',
		'10' => 'baragon',
	);

?>
<script src="js/Chart.min.js"></script>

<?php
	
	if ($filtrarporvendedor != '') {
		$where = "usuario = '$filtrarporvendedor' AND ";
	}

	else {
		$where = "";
	}

##############
	if ($filtrarporvendedor != '') {
##############

		if ($filterDate1 == '--' OR $filterDate1 == '') {
  			if ($filterDate2 == '--' OR $filterDate2 == '') {
    				$whereDate = '';
    				$whereUser = "(usuario = '$filtrarporvendedor') AND";
  			}
  			else {
    				$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    				$whereUser = "(usuario = '$filtrarporvendedor') AND";
  			}
		}
		else {
    			$whereDate = "(fecharespuesta >= '$filterDate1' AND fecharespuesta <= '$filterDate2') AND";
    			$whereUser = "(usuario = '$filtrarporvendedor') AND";
		}
	}
	else {
##############
		$whereUser = '';
		$whereDate = '';
##############
	}


$whereEquipo = '(usuario != '%equipo%') AND';

/* Reporte de Status Telemarketing POR Vendedor */

# sdelacruz Status
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'sdelacruz') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'sdelacruz') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'sdelacruz') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_sdelacruz = mysql_num_rows($result_interno);
$test_query_interno = $query_interno;

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'sdelacruz') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'sdelacruz') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_sdelacruz = mysql_num_rows($result_interno);

# sdelacruz Asignaciones

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_sdelacruz = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'sdelacruz') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_sdelacruz = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'sdelacruz') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_sdelacruz = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_sdelacruz = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'sdelacruz') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_sdelacruz = mysql_num_rows($result_interno);

# ccastillo
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ccastillo') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ccastillo') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ccastillo') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ccastillo') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ccastillo') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ccastillo = mysql_num_rows($result_interno);

#
$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ccastillo = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ccastillo') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ccastillo = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ccastillo') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ccastillo = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ccastillo = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ccastillo') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ccastillo = mysql_num_rows($result_interno);


# dfernandez
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'dfernandez') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'dfernandez') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'dfernandez') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'dfernandez') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'dfernandez') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_dfernandez = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND estadodeventa != 'descartado'";
$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (fecha >= '2014-08-28') AND (estadodeventa != 'descartado')";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_dfernandez = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'dfernandez') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_dfernandez = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'dfernandez') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_dfernandez = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_dfernandez = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'dfernandez') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_dfernandez = mysql_num_rows($result_interno);


# aaranza
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'aaranza') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'aaranza') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'aaranza') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'aaranza') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'aaranza') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_aaranza = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_aaranza = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'aaranza') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_aaranza = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'aaranza') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_aaranza = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_aaranza = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'aaranza') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_aaranza = mysql_num_rows($result_interno);


# mario
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'mario') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'mario') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'mario') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'mario') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'mario') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_mario = mysql_num_rows($result_interno);

# 

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_mario = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'mario') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_mario = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'mario') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_mario = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_mario = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'mario') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_mario = mysql_num_rows($result_interno);

# rubi
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'rubi') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'rubi') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'rubi') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'rubi') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'rubi') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_rubi = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'rubi') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_rubi = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'rubi') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_rubi = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_rubi = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'rubi') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_rubi = mysql_num_rows($result_interno);


# ventascat05
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat05') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat05') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat05') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat05') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat05') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventascat05 = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventascat05 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventascat05') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventascat05 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventascat05') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventascat05 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventascat05 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat05') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventascat05 = mysql_num_rows($result_interno);


# ventascat13
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat13') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat13') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat13') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat13') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'ventascat13') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_ventascat13 = mysql_num_rows($result_interno);

# 

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_ventascat13 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventascat13') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_ventascat13 = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'ventascat13') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_ventascat13 = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_ventascat13 = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'ventascat13') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_ventascat13 = mysql_num_rows($result_interno);


# gabriela
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'gabriela') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'gabriela') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'gabriela') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'gabriela') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'gabriela') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_gabriela = mysql_num_rows($result_interno);

#

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_gabriela = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'gabriela') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_gabriela = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'gabriela') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_gabriela = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_gabriela = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'gabriela') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_gabriela = mysql_num_rows($result_interno);



# baragon
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'baragon') AND (estadodeventa = 'tibio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_correos_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'baragon') AND (estadodeventa = 'descartado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_descartados_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'baragon') AND (estadodeventa = 'facturado') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_facturados_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'baragon') AND (estadodeventa = 'frio') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadas_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE $whereDate2 (usuario = 'baragon') AND (estadodeventa = 'caliente') AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal'";
$result_interno = mysql_query($query_interno);
$total_llamadasycorreos_baragon = mysql_num_rows($result_interno);
	
# 

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND estadodeventa != 'descartado'";
$result_interno = mysql_query($query_interno);
$asignacionesTotal_baragon = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'baragon') AND fechaproxima < '$fecha_pendientes' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND (estadodeventa != 'descartado' AND estadodeventa != 'facturado y clonado')";
$result_interno = mysql_query($query_interno);
$asignacionesAtrasados_baragon = mysql_num_rows($result_interno);
	
$query_interno = "SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'baragon') AND fechaproxima = '$fecha_asignacionesHoy1' AND horaasignacion != 'ok' ORDER BY fechaproxima";
$result_interno = mysql_query($query_interno);
$asignacionesHoy_baragon = mysql_num_rows($result_interno);

# Medio

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Facebook')";
$result_interno = mysql_query($query_interno);
$contactoMedio_01_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Google')";
$result_interno = mysql_query($query_interno);
$contactoMedio_02_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Email de Kumasoftware')";
$result_interno = mysql_query($query_interno);
$contactoMedio_03_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Exposicion comercial')";
$result_interno = mysql_query($query_interno);
$contactoMedio_04_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Correo Electronico')";
$result_interno = mysql_query($query_interno);
$contactoMedio_05_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Seccion amarilla')";
$result_interno = mysql_query($query_interno);
$contactoMedio_06_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Llamada del personal de ventas')";
$result_interno = mysql_query($query_interno);
$contactoMedio_07_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Visita del vendedor de campo')";
$result_interno = mysql_query($query_interno);
$contactoMedio_08_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'Twitter')";
$result_interno = mysql_query($query_interno);
$contactoMedio_09_baragon = mysql_num_rows($result_interno);

$query_interno = "SELECT * FROM contacto WHERE (asignadoa = 'baragon') AND (medio = 'YouTube')";
$result_interno = mysql_query($query_interno);
$contactoMedio_10_baragon = mysql_num_rows($result_interno);

?>
<script>
/* Inician 10 Consumbiles */
	var pieDataStatusTelemarketingsdelacruz = [
		{
			value: <?= $total_facturados_sdelacruz ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_sdelacruz ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_sdelacruz ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_sdelacruz ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_sdelacruz ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingccastillo = [
		{
			value: <?= $total_facturados_ccastillo ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ccastillo ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ccastillo ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ccastillo ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ccastillo ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingdfernandez = [
		{
			value: <?= $total_facturados_dfernandez ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_dfernandez ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_dfernandez ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_dfernandez ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_dfernandez ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingaaranza = [
		{
			value: <?= $total_facturados_aaranza ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_aaranza ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_aaranza ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_aaranza ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_aaranza ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingMario = [
		{
			value: <?= $total_facturados_mario ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_mario ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_mario ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_mario ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_mario ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingRubi = [
		{
			value: <?= $total_facturados_rubi ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_rubi ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_rubi ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_rubi ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_rubi ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingVentascat05 = [
		{
			value: <?= $total_facturados_ventascat05 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventascat05 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventascat05 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventascat05 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventascat05 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingVentascat13 = [
		{
			value: <?= $total_facturados_ventascat13 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_ventascat13 ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_ventascat13 ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_ventascat13 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_ventascat13 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingGabriela = [
		{
			value: <?= $total_facturados_gabriela ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_gabriela ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_gabriela ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_gabriela ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_gabriela ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];

	var pieDataStatusTelemarketingBaragon = [
		{
			value: <?= $total_facturados_baragon ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Facturados"
		},
		{
			value: <?= $total_correos_baragon ?>,
			color:"#f0ad4e",
			highlight: "#f0ad4e",
			label: "Correos"
		},
		{
			value: <?= $total_llamadas_baragon ?>,
			color: "#5bc0de",
			highlight: "#5bc0de",
			label: "Llamadas"
		},
		{
			value: <?= $total_llamadasycorreos_baragon ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Llamadas y Correos"
		},
		{
			value: <?= $total_descartados_baragon ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Descartados"
		},
	];
//
	var pieDataStatusTelemarketingsdelacruzBar = [
		{
			value: <?= $asignacionesTotal_sdelacruz ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_sdelacruz ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_sdelacruz ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];
	
	var pieDataStatusTelemarketingccastilloBar = [
		{
			value: <?= $asignacionesTotal_ccastillo ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ccastillo ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ccastillo ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

		var pieDataStatusTelemarketingdfernandezBar = [
		{
			value: <?= $asignacionesTotal_dfernandez ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_dfernandez ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_dfernandez ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingRubiBar = [
		{
			value: <?= $asignacionesTotal_rubi ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_rubi ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_rubi ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingMarioBar = [
		{
			value: <?= $asignacionesTotal_mario ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_mario ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_mario ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingBaragonBar = [
		{
			value: <?= $asignacionesTotal_baragon ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_baragon ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_baragon ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingGabrielaBar = [
		{
			value: <?= $asignacionesTotal_gabriela ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_gabriela ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_gabriela ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingVentascat05Bar = [
		{
			value: <?= $asignacionesTotal_ventascat05 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventascat05 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventascat05 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

	var pieDataStatusTelemarketingVentascat13Bar = [
		{
			value: <?= $asignacionesTotal_ventascat13 ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_ventascat13 ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_ventascat13 ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];
 
	var pieDataStatusTelemarketingaaranzaBar = [
		{
			value: <?= $asignacionesTotal_aaranza ?>,
			color: "#428bca",
			highlight: "#428bca",
			label: "Asignaciones"
		},
		{
			value: <?= $asignacionesAtrasados_aaranza ?>,
			color:"#F7464A",
			highlight: "#FF5A5E",
			label: "Atrasados"
		},
		{
			value: <?= $asignacionesHoy_aaranza ?>,
			color: "#5cb85c",
			highlight: "#5cb85c",
			label: "Hoy"
		},		
	];

// Medios
	var pieDataTelemarketingContactoMedio_sdelacruz = [
		{
			value: <?= $contactoMedio_01_sdelacruz ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_sdelacruz ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_sdelacruz ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_sdelacruz ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_sdelacruz ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_sdelacruz ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_sdelacruz ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_sdelacruz ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_sdelacruz ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_sdelacruz ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// ccastillo
	var pieDataTelemarketingContactoMedio_ccastillo = [
		{
			value: <?= $contactoMedio_01_ccastillo ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ccastillo ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_ccastillo ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_ccastillo ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_ccastillo ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_ccastillo ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_ccastillo ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_ccastillo ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_ccastillo ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ccastillo ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// dfernandez
	var pieDataTelemarketingContactoMedio_dfernandez = [
		{
			value: <?= $contactoMedio_01_dfernandez ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_dfernandez ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_dfernandez ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_dfernandez ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_dfernandez ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_dfernandez ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_dfernandez ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_dfernandez ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_dfernandez ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_dfernandez ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];

	// rubi
	var pieDataTelemarketingContactoMedio_rubi = [
		{
			value: <?= $contactoMedio_01_rubi ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_rubi ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_rubi ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_rubi ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_rubi ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_rubi ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_rubi ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_rubi ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_rubi ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_rubi ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// mario
	var pieDataTelemarketingContactoMedio_mario = [
		{
			value: <?= $contactoMedio_01_mario ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_mario ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_mario ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_mario ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_mario ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_mario ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_mario ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_mario ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_mario ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_mario ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// baragon
	var pieDataTelemarketingContactoMedio_baragon = [
		{
			value: <?= $contactoMedio_01_baragon ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_baragon ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_baragon ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_baragon ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_baragon ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_baragon ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_baragon ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_baragon ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_baragon ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_baragon ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// gabriela
	var pieDataTelemarketingContactoMedio_gabriela = [
		{
			value: <?= $contactoMedio_01_gabriela ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_gabriela ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_gabriela ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_gabriela ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_gabriela ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_gabriela ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_gabriela ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_gabriela ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_gabriela ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_gabriela ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// ventascat05
	var pieDataTelemarketingContactoMedio_ventascat05 = [
		{
			value: <?= $contactoMedio_01_ventascat05 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventascat05 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_ventascat05 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_ventascat05 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_ventascat05 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_ventascat05 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_ventascat05 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_ventascat05 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_ventascat05 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventascat05 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// ventascat13
	var pieDataTelemarketingContactoMedio_ventascat13 = [
		{
			value: <?= $contactoMedio_01_ventascat13 ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_ventascat13 ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_ventascat13 ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_ventascat13 ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_ventascat13 ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_ventascat13 ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_ventascat13 ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_ventascat13 ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_ventascat13 ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_ventascat13 ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	
	// aaranza
	var pieDataTelemarketingContactoMedio_aaranza = [
		{
			value: <?= $contactoMedio_01_aaranza ?>,
			color: "#111111",
			highlight: "#111111",
			label: "Facebook"
		},
		{
			value: <?= $contactoMedio_02_aaranza ?>,
			color: "#222222",
			highlight: "#222222",
			label: "Google"
		},
		{
			value: <?= $contactoMedio_03_aaranza ?>,
			color: "#333333",
			highlight: "#333333",
			label: "Email de Kumasoftware"
		},
		{
			value: <?= $contactoMedio_04_aaranza ?>,
			color: "#444444",
			highlight: "#444444",
			label: "Exposicion comercial"
		},
		{
			value: <?= $contactoMedio_05_aaranza ?>,
			color: "#555555",
			highlight: "#555555",
			label: "Correo Electronico"
		},
		{
			value: <?= $contactoMedio_06_aaranza ?>,
			color: "#666666",
			highlight: "#666666",
			label: "Seccion amarilla"
		},
		{
			value: <?= $contactoMedio_07_aaranza ?>,
			color: "#777777",
			highlight: "#777777",
			label: "Llamada del personal de ventas"
		},
		{
			value: <?= $contactoMedio_08_aaranza ?>,
			color: "#888888",
			highlight: "#888888",
			label: "Visita del vendedor de campo"
		},
		{
			value: <?= $contactoMedio_09_aaranza ?>,
			color: "#999999",
			highlight: "#999999",
			label: "Twitter"
		},
		{
			value: <?= $contactoMedio_10_aaranza ?>,
			color: "#000000",
			highlight: "#000000",
			label: "YouTube"
		},
	];
	

	window.onload = function(){

	var ctxStatusTelemarketingsdelacruz = document.getElementById("chart-Statussdelacruz").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingsdelacruz).Pie(pieDataStatusTelemarketingsdelacruz);

	var ctxStatusTelemarketingccastillo = document.getElementById("chart-Statusccastillo").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingccastillo).Pie(pieDataStatusTelemarketingccastillo);

	var ctxStatusTelemarketingdfernandez = document.getElementById("chart-Statusdfernandez").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingdfernandez).Pie(pieDataStatusTelemarketingdfernandez);

	var ctxStatusTelemarketingaaranza = document.getElementById("chart-Statusaaranza").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingaaranza).Pie(pieDataStatusTelemarketingaaranza);

	var ctxStatusTelemarketingMario = document.getElementById("chart-StatusMario").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingMario).Pie(pieDataStatusTelemarketingMario);

	var ctxStatusTelemarketingRubi = document.getElementById("chart-StatusRubi").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingRubi).Pie(pieDataStatusTelemarketingRubi);

	var ctxStatusTelemarketingVentascat05 = document.getElementById("chart-StatusVentascat05").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingVentascat05).Pie(pieDataStatusTelemarketingVentascat05);

	var ctxStatusTelemarketingVentascat13 = document.getElementById("chart-StatusVentascat13").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingVentascat13).Pie(pieDataStatusTelemarketingVentascat13);

	var ctxStatusTelemarketingGabriela = document.getElementById("chart-StatusGabriela").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingGabriela).Pie(pieDataStatusTelemarketingGabriela);

	var ctxStatusTelemarketingBaragon = document.getElementById("chart-StatusBaragon").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingBaragon).Pie(pieDataStatusTelemarketingBaragon);

	//Bar 

	var ctxStatusTelemarketingsdelacruzBar = document.getElementById("chart-StatussdelacruzBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingsdelacruzBar).Doughnut(pieDataTelemarketingContactoMedio_sdelacruz);

	var ctxStatusTelemarketingccastilloBar = document.getElementById("chart-StatusccastilloBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingccastilloBar).Doughnut(pieDataStatusTelemarketingccastilloBar);

	var ctxStatusTelemarketingdfernandezBar = document.getElementById("chart-StatusdfernandezBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingdfernandezBar).Doughnut(pieDataStatusTelemarketingdfernandezBar);

	var ctxStatusTelemarketingRubiBar = document.getElementById("chart-StatusRubiBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingRubiBar).Doughnut(pieDataStatusTelemarketingRubiBar);

	var ctxStatusTelemarketingMarioBar = document.getElementById("chart-StatusMarioBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingMarioBar).Doughnut(pieDataStatusTelemarketingMarioBar);

	var ctxStatusTelemarketingBaragonBar = document.getElementById("chart-StatusBaragonBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingBaragonBar).Doughnut(pieDataStatusTelemarketingBaragonBar);

	var ctxStatusTelemarketingGabrielaBar = document.getElementById("chart-StatusGabrielaBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingGabrielaBar).Doughnut(pieDataStatusTelemarketingGabrielaBar);

	var ctxStatusTelemarketingVentascat05Bar = document.getElementById("chart-StatusVentascat05Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingVentascat05Bar).Doughnut(pieDataStatusTelemarketingVentascat05Bar);

	var ctxStatusTelemarketingVentascat13Bar = document.getElementById("chart-StatusVentascat13Bar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingVentascat13Bar).Doughnut(pieDataStatusTelemarketingVentascat13Bar);
	
	var ctxStatusTelemarketingaaranzaBar = document.getElementById("chart-StatusaaranzaBar").getContext("2d");
	window.myPie = new Chart(ctxStatusTelemarketingaaranzaBar).Doughnut(pieDataStatusTelemarketingaaranzaBar);
	
};
/* Terminan 10 Consumibles */

</script>
<!--
<pre>
	<?= $test_query_interno ?>
</pre>
-->