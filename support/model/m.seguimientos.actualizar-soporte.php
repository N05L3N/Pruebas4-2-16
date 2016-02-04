<?php

# < Conexión

$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("$dbn", $conexion);
mysql_query("SET NAMES 'utf8'");

# > Conexión

if (isset($_POST["fechaproxima"])) {

	$id_soporte2_s = 0;
	$id_seguimiento = $_POST['id_seguimiento'];
	
	$fechaE = explode("-", $_POST['fecha']);
	$fecha = ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'';

	$asesor = $_POST['asesor'];
	$cliente = $_POST['cliente'];
	$concepto = $_POST['concepto'];
	$software = $_POST['software'];
	$horainicio1 = $_POST['horainicio1'];
	$horainicio2 = $_POST['horainicio2'];
	$horainicio3 = $_POST['horainicio3'];
	$horafin1 = $_POST['horafin1'];
	$horafin2 = $_POST['horafin2'];
	$horafin3 = $_POST['horafin3'];
	$categoria = $_POST['categoria'];
	$estado = $_POST['estado'];
	$medioutilizado1 = $_POST['medioutilizado1'];
	$medioutilizado2 = $_POST['medioutilizado2'];
	$medioutilizado3 = $_POST['medioutilizado3'];
	$medioutilizado4 = $_POST['medioutilizado4'];
	$medioutilizado5 = $_POST['medioutilizado5'];
	$comentarios = $_POST['comentarios'];
	$fecharespuesta = $_POST['fecharespuesta'];
	$horarespuesta = $_POST['horarespuesta'];

	/* NEW */

	/* Hora */

		if ($hora == '-5') {
			$hora = '7';
			$ampm = 'am';
		}

		else if ($hora == '-4') {
			$hora = '8';
			$ampm = 'am';
		}

		else if ($hora == '-3') {
			$hora = '9';
			$ampm = 'am';
		}

		else if ($hora == '-2') {
			$hora = '10';
			$ampm = 'am';
		}

		else if ($hora == '-1') {
			$hora = '11';
			$ampm = 'am';
		}

		else {
			
		}

		# $horarespuesta = ''.$hora.':'.$minuto.' '.$ampm.'';
	
		/* Hora */

		$id_comentarios_s = 0;
		$id_seguimiento = $_POST['id_seguimiento'];
		$usuario = $_POST['usuario'];
		$termometro = $_POST['termometro'];
		$estadodeventa = $_POST['estadodeventa'];
		$comentariovendedor = $_POST['comentariovendedor'];
		$factura = $_POST['factura'];
		$fechaasignacion = $_POST['fechaasignacion'];
		$horaasignacion = $_POST['horaasignacion'];
		$fecharespuesta = $_POST['fecharespuesta'];
		$horarespuesta = $_POST['horarespuesta'];

		$fechaproximaE = explode("-", $_POST['fechaproxima']);
		$fechaproxima = ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'';

		$comentariovendedor = $_POST['comentariovendedor'];

#		$sql = "INSERT INTO ecrm_soporte2_s (id_soporte2_s,id_seguimiento,fecha,asesor,cliente,concepto,software,horainicio1,horainicio2,horainicio3,horafin1,horafin2,horafin3,categoria,estado,medioutilizado1,medioutilizado2,medioutilizado3,medioutilizado4,medioutilizado5,comentarios,fecharespuesta,horarespuesta)";

		$sql = "INSERT INTO ecrm_comentarios_s (id_comentarios_s, id_seguimiento, usuario, termometro, estadodeventa, comentariovendedor, factura, fechaasignacion, horaasignacion, fecharespuesta, horarespuesta, fechaproxima)";
    		$sql.= "VALUES ('".$id_comentarios_s."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
		mysql_query($sql, $conexion);
		
		 header("Location: {$_SERVER['HTTP_REFERER']}".SID);
}
?>