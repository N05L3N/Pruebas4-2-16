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

if (isset($_POST["id_seguimiento"])) {
	
	$u_id_seguimiento = $_POST['id_seguimiento'];
	$u_software = $_POST['software'];
	$u_version = $_POST['version'];
	$u_numero_de_serie = $_POST['numero_de_serie'];
	$u_codigos_de_activacion = $_POST['codigos_de_activacion'];
	# $u_asignacion_fecha_inicial = $_POST['asignacion_fecha_inicial'];
	# $u_asignacion_fecha_final = $_POST['asignacion_fecha_final'];
	
	$sql = "UPDATE `crmk`.`ecrm_data_s` SET `software`='$u_software', `version`='$u_version', `numero_de_serie`='$u_numero_de_serie', `codigos_de_activacion`='$u_codigos_de_activacion' WHERE `id_seguimiento`='$u_id_seguimiento';";

	mysql_query($sql, $conexion);


	$vendedor = $_GET['vendedor'];
	
	function dameURL(){
		$url = $_SERVER['REQUEST_URI'];
		return $url;
	}
	
	$url = dameURL();
	
	# header("Location: $url?id=$id&vendedor=$Vendedor");

	if ($id_view == 'cliente') {
		header("Location: cliente?id=$id&vendedor=$Vendedor");
	}
	else if ($id_view == 'iframe-cliente') {
		header("Location: iframe-cliente?id=$id&vendedor=$Vendedor");
	}
	else if ($id_view == 'iframe-facturado') {
		header("Location: iframe-facturado?id=$u_id_seguimiento&vendedor=$_POST['vendedor']");
	}
	else {
		
	}

	

	echo '('.$_POST["id"].')';
	echo '<div style="width:200px; height:200px; background-color:red;"></div>';

	
}

?>