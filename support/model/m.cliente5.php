<?php

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);
	mysql_query("SET NAMES 'utf8'");

	$dte = date(ymdhia);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$ampm = date(a);


	if (isset($_POST["asignacion_fecha_final"])) {

		$id_seguimiento = $_POST["id_seguimiento"];

		$asignacion_fecha_finalE = explode("-", $_POST["asignacion_fecha_final"]);
		$asignacion_fecha_final = ''.$asignacion_fecha_finalE[2].'-'.$asignacion_fecha_finalE[1].'-'.$asignacion_fecha_finalE[0].'';

		$sql = "UPDATE crmk.ecrm_asignacion SET fecha_final='$asignacion_fecha_final' WHERE id_seguimiento='$id_seguimiento';";

		mysql_query($sql, $conexion);
	
		header("Location: cliente5?id=$id_seguimiento");

	}

?>