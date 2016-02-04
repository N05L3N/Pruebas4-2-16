<?php

	if ($usuario == 'areynoso' OR $usuario == 'amariscal' OR $usuario == 'Coordinador' OR $tipo == 'administrador') {
		$usuario = $_GET['vendedor'];
		$id = $_GET['id'];
		echo '<div>['.$id.']</div>';
	}
	
	else {

	}
	
	$id = $_GET['id'];

	mysql_query ("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '".$usuario."' AND id = ".$id." ORDER BY fecha desc, id desc limit 0,1");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
    
		if ($i > 0) {
		}

		$id = $row['id'];
		$nombre = $row['nombre'];
		$email = $row['email'];
		$email = $row['email'];
		$lada = $row['lada'];
		$telefono = $row['telefono'];
		$pais = $row['pais'];
		$fecha = $row['fecha'];
		$fechaasignacion = $row['fechaasignacion'];
		$comentarios = $row['comentarios'];
		$equipodeinteres = $row['equipodeinteres'];
		$formulario = $row['formulario'];
		$formulario = $row['formulario'];
		$numerodefactura = $row['numerodefactura'];
		$asignadoa = $row['asignadoa'];
		$_SESSION['asignadoa'] = $asignadoa;
		$comentariovendedor = $row['comentariovendedor'];
		$estadodeventa = $row['estadodeventa'];


		$id = $row['id'];
		$nombre = $row['nombre'];
		$contacto2 = $row['contacto2'];
		$contacto3 = $row['contacto3'];
		$direccion = $row['direccion'];
		$ciudad = $row['ciudad'];
		$pais = $row['pais'];
		$estado = $row['estado'];
		$lada = $row['lada'];
		$telefono = $row['telefono'];
		$email = $row['email'];
		$medio = $row['medio'];
		$giro = $row['giro'];
		$comentarios = $row['comentarios'];
		$fecha = $row['fecha'];
		$Hora = $row['Hora'];
		$formulario = $row['formulario'];
		$equipodeinteres = $row['equipodeinteres'];
		$comeqenatp = $row['comeqenatp'];
		$eqclosqcuenta = $row['eqclosqcuenta'];
		$antacteq = $row['antacteq'];
		$escliente = $row['escliente'];
		$numerodecliente = $row['numerodecliente'];
		$motivodeconsulta = $row['motivodeconsulta'];
		$empresa = $row['empresa'];
		$nombre_recomendador = $row['nombre_recomendador'];
		$sucursal_recomendador = $row['sucursal_recomendador'];
		$comentario_vendedor = $row['comentario_vendedor'];
		$asignadoa = $row['asignadoa'];
		$fechadecontacto = $row['fechadecontacto'];
		$fechaasignacion = $row['fechaasignacion'];
		$fechaventa = $row['fechaventa'];
		$estadodeventa = $row['estadodeventa'];
		$numerodefactura = $row['numerodefactura'];
		$usuario = $row['usuario'];
	}
	$i++;

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE usuario = '$asignadoa' AND id_seguimiento = '$id' ORDER BY id_comentarios_s desc limit 0,1");
	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		$fechaproxima = $row_result3['fechaproxima'];
		$estadodeventa = $row_result3['estadodeventa'];
		$i_result3++; 
	}

	$fechaproximaE = explode("-", $fechaproxima);
	
		if ($estadodeventa == 'Caliente' OR $estadodeventa == 'caliente') {
			$CRM_estadodeventa = 'danger';
		}
		else if ($estadodeventa == 'tibio') {
			$CRM_estadodeventa = 'warning';
		}
		else if ($estadodeventa == 'frio') {
			$CRM_estadodeventa = 'info';
		}
		else if ($estadodeventa == 'Facturado' OR $estadodeventa == 'facturado') {
			$CRM_estadodeventa = 'success';
		}
		else if ($estadodeventa == 'Pendiente') {
			$CRM_estadodeventa = 'default';
		}
		else  {
			$CRM_estadodeventa = 'default';
		}


	$result_data_s = mysql_query("SELECT * FROM ecrm_data_s WHERE id_seguimiento = '$id' ORDER BY id_ecrm_data_s desc limit 0,1");
	$i_data_s = 0;
	while ($row_data_s = mysql_fetch_array($result_data_s)) {
		if ($i_data_s > 0) { }

		$data_s_id_ecrm_data_s = $row_data_s['id_ecrm_data_s'];
		$data_s_id_seguimiento = $row_data_s['id_seguimiento'];
		$data_s_usuario = $row_data_s['usuario'];
		$data_s_software = $row_data_s['software'];
		$data_s_version = $row_data_s['version'];
		$data_s_numero_de_serie = $row_data_s['numero_de_serie'];
		$data_s_codigos_de_activacion = $row_data_s['codigos_de_activacion'];
		$data_s_precio_total = $row_data_s['precio_total'];
		$data_s_precio_sin_iva = $row_data_s['precio_sin_iva'];
		$data_s_forma_de_pago = $row_data_s['forma_de_pago'];
		$data_s_cantidad_mensual = $row_data_s['cantidad_mensual'];
		$data_s_banco_ = $row_data_s['banco_'];
		$data_s_factura_avance = $row_data_s['factura_avance'];
		$data_s_documentacion = $row_data_s['documentacion'];
		$data_s_razon_social = $row_data_s['razon_social'];
		$data_s_rfc = $row_data_s['rfc'];
		$data_s_domicilio_fiscal = $row_data_s['domicilio_fiscal'];
		$data_s_cp = $row_data_s['cp'];
		$data_s_ref_nombre1 = $row_data_s['ref_nombre1'];
		$data_s_ref_tel1 = $row_data_s['ref_tel1'];
		$data_s_ref_mail1 = $row_data_s['ref_mail1'];
		$data_s_ref_parentezco1 = $row_data_s['ref_parentezco1'];
		$data_s_ref_nombre2 = $row_data_s['ref_nombre2'];
		$data_s_ref_tel2 = $row_data_s['ref_tel2'];
		$data_s_ref_mail2 = $row_data_s['ref_mail2'];
		$data_s_ref_parentezco2 = $row_data_s['ref_parentezco2'];
		$data_s_nombre_de_usuario = $row_data_s['nombre_de_usuario'];
		$data_s_email_de_usuario = $row_data_s['email_de_usuario'];
		$data_s_tel_usuario = $row_data_s['tel_usuario'];
		$data_s_experiencia_en_software_cad = $row_data_s['experiencia_en_software_cad'];
		$data_s_software_que_utiliza = $row_data_s['software_que_utiliza'];
		$data_s_nombre_de_pagos = $row_data_s['nombre_de_pagos'];
		$data_s_tel_pagos = $row_data_s['tel_pagos'];
		$data_s_mail_pagos = $row_data_s['mail_pagos'];
		$data_s_notas = $row_data_s['notas'];
		$data_s_asesor = $row_data_s['asesor'];
		$data_s_sistema_operativo = $row_data_s['sistema_operativo'];
		$data_s_modelado_de_objetos = $row_data_s['modelado_de_objetos'];
		$data_s_fecha_entrega_objetos = $row_data_s['fecha_entrega_objetos'];
		$data_s_puntos_interimodel = $row_data_s['puntos_interimodel'];
		$data_s_v1 = $row_data_s['v1'];
		$data_s_v2 = $row_data_s['v2'];
		$data_s_v3 = $row_data_s['v3'];
		$data_s_v4 = $row_data_s['v4'];
		$data_s_v5 = $row_data_s['v5'];
		$data_s_v6 = $row_data_s['v6'];
		$data_s_v7 = $row_data_s['v7'];
		$data_s_v8 = $row_data_s['v8'];
		$data_s_v9 = $row_data_s['v9'];
		$data_s_v10 = $row_data_s['v10'];
		$data_s_v11 = $row_data_s['v11'];
		$data_s_v12 = $row_data_s['v12'];
		$data_s_v13 = $row_data_s['v13'];
		$data_s_v14 = $row_data_s['v14'];
		$data_s_v15 = $row_data_s['v15'];
		$data_s_v16 = $row_data_s['v16'];
		$data_s_v17 = $row_data_s['v17'];
		$data_s_v18 = $row_data_s['v18'];
		$data_s_v19 = $row_data_s['v19'];
		$data_s_v20 = $row_data_s['v20'];
		$data_s_fecha = $row_data_s['fecha'];
		$data_s_hora = $row_data_s['hora'];

		?>
		<!--
		<ul>
			<li><b>id_ecrm_data_s:</b> <?= $data_s_id_ecrm_data_s ?></li>
			<li><b>id_seguimiento:</b> <?= $data_s_id_seguimiento ?></li>
			<li><b>usuario:</b> <?= $data_s_usuario ?></li>
			<li><b>software:</b> <?= $data_s_software ?></li>
			<li><b>version:</b> <?= $data_s_version ?></li>
			<li><b>numero_de_serie:</b> <?= $data_s_numero_de_serie ?></li>
			<li><b>codigos_de_activacion:</b> <?= $data_s_codigos_de_activacion ?></li>
			<li><b>precio_total:</b> <?= $data_s_precio_total ?></li>
			<li><b>precio_sin_iva:</b> <?= $data_s_precio_sin_iva ?></li>
			<li><b>forma_de_pago:</b> <?= $data_s_forma_de_pago ?></li>
			<li><b>cantidad_mensual:</b> <?= $data_s_cantidad_mensual ?></li>
			<li><b>banco_:</b> <?= $data_s_banco_ ?></li>
			<li><b>factura_avance:</b> <?= $data_s_factura_avance ?></li>
			<li><b>documentacion:</b> <?= $data_s_documentacion ?></li>
			<li><b>razon_social:</b> <?= $data_s_razon_social ?></li>
			<li><b>rfc:</b> <?= $data_s_rfc ?></li>
			<li><b>domicilio_fiscal:</b> <?= $data_s_domicilio_fiscal ?></li>
			<li><b>cp:</b> <?= $data_s_cp ?></li>
			<li><b>ref_nombre1:</b> <?= $data_s_ref_nombre1 ?></li>
			<li><b>ref_tel1:</b> <?= $data_s_ref_tel1 ?></li>
			<li><b>ref_mail1:</b> <?= $data_s_ref_mail1 ?></li>
			<li><b>ref_parentezco1:</b> <?= $data_s_ref_parentezco1 ?></li>
			<li><b>ref_nombre2:</b> <?= $data_s_ref_nombre2 ?></li>
			<li><b>ref_tel2:</b> <?= $data_s_ref_tel2 ?></li>
			<li><b>ref_mail2:</b> <?= $data_s_ref_mail2 ?></li>
			<li><b>ref_parentezco2:</b> <?= $data_s_ref_parentezco2 ?></li>
			<li><b>nombre_de_usuario:</b> <?= $data_s_nombre_de_usuario ?></li>
			<li><b>email_de_usuario:</b> <?= $data_s_email_de_usuario ?></li>
			<li><b>tel_usuario:</b> <?= $data_s_tel_usuario ?></li>
			<li><b>experiencia_en_software_cad:</b> <?= $data_s_experiencia_en_software_cad ?></li>
			<li><b>software_que_utiliza:</b> <?= $data_s_software_que_utiliza ?></li>
			<li><b>nombre_de_pagos:</b> <?= $data_s_nombre_de_pagos ?></li>
			<li><b>tel_pagos:</b> <?= $data_s_tel_pagos ?></li>
			<li><b>mail_pagos:</b> <?= $data_s_mail_pagos ?></li>
			<li><b>notas:</b> <?= $data_s_notas ?></li>
			<li><b>asesor:</b> <?= $data_s_asesor ?></li>
			<li><b>sistema_operativo:</b> <?= $data_s_sistema_operativo ?></li>
			<li><b>modelado_de_objetos:</b> <?= $data_s_modelado_de_objetos ?></li>
			<li><b>fecha_entrega_objetos:</b> <?= $data_s_fecha_entrega_objetos ?></li>
			<li><b>puntos_interimodel:</b> <?= $data_s_puntos_interimodel ?></li>
			<li><b>v1:</b> <?= $data_s_v1 ?></li>
			<li><b>v2:</b> <?= $data_s_v2 ?></li>
			<li><b>v3:</b> <?= $data_s_v3 ?></li>
			<li><b>v4:</b> <?= $data_s_v4 ?></li>
			<li><b>v5:</b> <?= $data_s_v5 ?></li>
			<li><b>v6:</b> <?= $data_s_v6 ?></li>
			<li><b>v7:</b> <?= $data_s_v7 ?></li>
			<li><b>v8:</b> <?= $data_s_v8 ?></li>
			<li><b>v9:</b> <?= $data_s_v9 ?></li>
			<li><b>v10:</b> <?= $data_s_v10 ?></li>
			<li><b>v11:</b> <?= $data_s_v11 ?></li>
			<li><b>v12:</b> <?= $data_s_v12 ?></li>
			<li><b>v13:</b> <?= $data_s_v13 ?></li>
			<li><b>v14:</b> <?= $data_s_v14 ?></li>
			<li><b>v15:</b> <?= $data_s_v15 ?></li>
			<li><b>v16:</b> <?= $data_s_v16 ?></li>
			<li><b>v17:</b> <?= $data_s_v17 ?></li>
			<li><b>v18:</b> <?= $data_s_v18 ?></li>
			<li><b>v19:</b> <?= $data_s_v19 ?></li>
			<li><b>v20:</b> <?= $data_s_v20 ?></li>
			<li><b>fecha:</b> <?= $data_s_fecha ?></li>
			<li><b>hora:</b> <?= $data_s_hora ?></li>
		</ul>
	-->
		<?php
		$i_data_s++; 
	}


$result_asignacion = mysql_query("SELECT * FROM ecrm_asignacion WHERE id_seguimiento = '$id' ORDER BY id_ecrm_asignacion desc limit 0,1");
	$i_asignacion = 0;
	while ($row_asignacion = mysql_fetch_array($result_asignacion)) {
		if ($i_asignacion > 0) { }

		$asignacion_id_ecrm_asignacion = $row_asignacion['id_ecrm_asignacion'];
		$asignacion_id_seguimiento = $row_asignacion['id_seguimiento'];
		$asignacion_age = $row_asignacion['age'];
		$asignacion_administrador = $row_asignacion['administrador'];
		$asignacion_soporte = $row_asignacion['soporte'];
		$asignacion_vendedor = $row_asignacion['vendedor'];
		$asignacion_dualcore = $row_asignacion['dualcore'];
		$asignacion_producto = $row_asignacion['producto'];
		$asignacion_status = $row_asignacion['status'];
		$asignacion_licencia = $row_asignacion['licencia'];
		$asignacion_dias = $row_asignacion['dias'];
		$asignacion_proxima_llamada = $row_asignacion['proxima_llamada'];
		$asignacion_fecha_inicial = $row_asignacion['fecha_inicial'];
		$asignacion_fecha_final = $row_asignacion['fecha_final'];
		$asignacion_fecha_venta = $row_asignacion['fecha_venta'];
		$asignacion_monto_venta = $row_asignacion['monto_venta'];
		$asignacion_fecha_asignacion = $row_asignacion['fecha_asignacion'];
		$asignacion_hora_asignacion = $row_asignacion['hora_asignacion'];
		$asignacion_fecha = $row_asignacion['fecha'];
		?>
		<!--
		<ul>
			<li><b>id_ecrm_asignacion:</b> <?= $asignacion_id_ecrm_asignacion ?></li>
			<li><b>id_seguimiento:</b> <?= $asignacion_id_seguimiento ?></li>
			<li><b>age:</b> <?= $asignacion_age ?></li>
			<li><b>administrador:</b> <?= $asignacion_administrador ?></li>
			<li><b>soporte:</b> <?= $asignacion_soporte ?></li>
			<li><b>vendedor:</b> <?= $asignacion_vendedor ?></li>
			<li><b>dualcore:</b> <?= $asignacion_dualcore ?></li>
			<li><b>producto:</b> <?= $asignacion_producto ?></li>
			<li><b>status:</b> <?= $asignacion_status ?></li>
			<li><b>licencia:</b> <?= $asignacion_licencia ?></li>
			<li><b>dias:</b> <?= $asignacion_dias ?></li>
			<li><b>proxima_llamada:</b> <?= $asignacion_proxima_llamada ?></li>
			<li><b>fecha_inicial:</b> <?= $asignacion_fecha_inicial ?></li>
			<li><b>fecha_final:</b> <?= $asignacion_fecha_final ?></li>
			<li><b>fecha_venta:</b> <?= $asignacion_fecha_venta ?></li>
			<li><b>monto_venta:</b> <?= $asignacion_monto_venta ?></li>
			<li><b>fecha_asignacion:</b> <?= $asignacion_fecha_asignacion ?></li>
			<li><b>hora_asignacion:</b> <?= $asignacion_hora_asignacion ?></li>
			<li><b>fecha:</b> <?= $asignacion_fecha ?></li>
		</ul>
	-->
		<?php
		$i_asignacion++; 
	}


$diff = strtotime($asignacion_fecha_final) - strtotime($asignacion_fecha_inicial);
# echo "Difference is $diff seconds\n";
$days = floor($diff/(3600*24));
?>


<style>
body {
	overflow-x: hidden;
}
</style>