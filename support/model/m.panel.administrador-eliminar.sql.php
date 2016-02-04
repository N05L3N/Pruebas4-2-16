<?php
	
	$usuario = $_SESSION["usuario"];
	$postFilter = $_POST["filter"];

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);

	if (isset($_POST["id_eliminar"])) {

		$id_eliminar = $_POST["id_eliminar"];
		$confirmarparaeliminar = $_POST["confirmarparaeliminar"];
		$dte = date(ymdhis);  
		$dia = date(d);
		$mes = date(m);
		$ano = date(Y);
		$hora = date(h);
		$minuto = date(i);
		$horaasignacion_eliminar = ''.$hora.':'.$minuto.'';
		$fechaasignacion_eliminar = ''.$ano.'-'.$mes.'-'.$dia.'';

		$sql_eliminar = "UPDATE crmk.contacto SET asignadoa='trash', fechaasignacion='$fechaasignacion_eliminar' WHERE id='$id_eliminar';";
		$sql_comentarios = "UPDATE crmk.ecrm_comentarios_s SET usuario = 'trash' WHERE id_seguimiento='$id_eliminar';";

		if ($confirmarparaeliminar != '') {

			mysql_query($sql_eliminar, $conexion);
			mysql_query($sql_comentarios, $conexion);

		}

		else {

		}
	
	}

	if (isset($postFilter)) {

		if ($postFilter == 'sinasignacion') {
		
			$_SESSION['filter'] = 'sinasignacion';

		}

		else if ($postFilter == 'quitarfiltro'){

			$_SESSION['filter'] = '';

		}

		else {

		}
		
	}

?>