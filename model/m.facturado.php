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
	

$u_precio_total = $_POST['precio_total'];
$u_precio_sin_iva = $_POST['precio_sin_iva'];
$u_forma_de_pago = $_POST['forma_de_pago'];
$u_cantidad_mensual = $_POST['cantidad_mensual'];
$u_banco_ = $_POST['banco_'];
$u_factura_avance = $_POST['factura_avance'];
$u_documentacion = $_POST['documentacion'];

$u_nombre_de_usuario = $_POST['nombre_de_usuario'];
$u_email_de_usuario = $_POST['email_de_usuario'];
$u_tel_usuario = $_POST['tel_usuario'];
$u_puntos_interimodel = $_POST['puntos_interimodel'];
$u_experiencia_en_software_cad = $_POST['experiencia_en_software_cad'];
$u_software_que_utiliza = $_POST['software_que_utiliza'];
$u_sistema_operativo = $_POST['sistema_operativo'];
$u_modelado_de_objetos = $_POST['modelado_de_objetos'];
$u_fecha_entrega_objetos = $_POST['fecha_entrega_objetos'];

$u_razon_social = $_POST['razon_social'];
$u_rfc = $_POST['rfc'];
$u_domicilio_fiscal = $_POST['domicilio_fiscal'];
$u_cp = $_POST['cp'];
$u_nombre_de_pagos = $_POST['nombre_de_pagos'];
$u_tel_pagos = $_POST['tel_pagos'];
$u_mail_pagos = $_POST['mail_pagos'];
$u_notas = $_POST['notas'];

$u_ref_nombre1 = $_POST['ref_nombre1'];
$u_ref_tel1 = $_POST['ref_tel1'];
$u_ref_mail1 = $_POST['ref_mail1'];
$u_ref_parentezco1 = $_POST['ref_parentezco1'];
$u_ref_nombre2 = $_POST['ref_nombre2'];
$u_ref_tel2 = $_POST['ref_tel2'];
$u_ref_mail2 = $_POST['ref_mail2'];
$u_ref_parentezco2 = $_POST['ref_parentezco2'];

$u_v2 = $_POST['v2'];
$u_v3 = $_POST['v3'];

	$sql = "UPDATE `crmk`.`ecrm_data_s` SET `software`='$u_software', `version`='$u_version', `numero_de_serie`='$u_numero_de_serie', `codigos_de_activacion`='$u_codigos_de_activacion',`precio_total`='$u_precio_total',`precio_sin_iva`='$u_precio_sin_iva',`forma_de_pago`='$u_forma_de_pago',`cantidad_mensual`='$u_cantidad_mensual',`banco_`='$u_banco_',`factura_avance`='$u_factura_avance',`documentacion`='$u_documentacion',`nombre_de_usuario`='$u_nombre_de_usuario',`email_de_usuario`='$u_email_de_usuario',`tel_usuario`='$u_tel_usuario',`puntos_interimodel`='$u_puntos_interimodel',`experiencia_en_software_cad`='$u_experiencia_en_software_cad',`software_que_utiliza`='$u_software_que_utiliza',`sistema_operativo`='$u_sistema_operativo',`modelado_de_objetos`='$u_modelado_de_objetos',`fecha_entrega_objetos`='$u_fecha_entrega_objetos',`razon_social`='$u_razon_social',`rfc`='$u_rfc',`domicilio_fiscal`='$u_domicilio_fiscal',`cp`='$u_cp',`nombre_de_pagos`='$u_nombre_de_pagos',`tel_pagos`='$u_tel_pagos',`mail_pagos`='$u_mail_pagos',`notas`='$u_notas',`ref_nombre1`='$u_ref_nombre1',`ref_tel1`='$u_ref_tel1',`ref_mail1`='$u_ref_mail1',`ref_parentezco1`='$u_ref_parentezco1',`ref_nombre2`='$u_ref_nombre2',`ref_tel2`='$u_ref_tel2',`ref_mail2`='$u_ref_mail2',`ref_parentezco2`='$u_ref_parentezco2',`v2`='$u_v2',`v3`='$u_v3' WHERE `id_seguimiento`='$u_id_seguimiento';";

	mysql_query($sql, $conexion);


	$vendedor = $_GET['vendedor'];
	
	function dameURL(){
		$url = $_SERVER['REQUEST_URI'];
		return $url;
	}
	
	$url = dameURL();
	
	$Vendedor = $_POST['vendedor'];

	# header("Location: $url?id=$id&vendedor=$Vendedor");

	if ($id_view == 'cliente') {
		header("Location: cliente?id=$id&vendedor=$Vendedor");
	}
	else if ($id_view == 'iframe-cliente') {
		header("Location: iframe-cliente?id=$id&vendedor=$Vendedor");
	}
	else if ($id_view == 'iframe-facturado') {
		header("Location: iframe-facturado?id=$u_id_seguimiento&vendedor=$Vendedor");
	}
	else {
		
	}

	

	echo '('.$_POST["id"].')';
	echo '<div style="width:200px; height:200px; background-color:red;"></div>';

	
}

?>