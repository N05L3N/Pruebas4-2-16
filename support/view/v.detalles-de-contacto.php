<?php
	
	$folio = $_GET['folio'];
	$tab = $_GET['tab'];

	$asignacion_query = mysql_query("SELECT * FROM ecrm_asignacion WHERE id_seguimiento = $folio AND age = 1");

	$i = 0;
	while ($row = mysql_fetch_array($asignacion_query)) {
		if ($i > 0) {}
		$asignacion_id_ecrm_asignacion = $row['id_ecrm_asignacion'];
		$asignacion_id_seguimiento = $row['id_seguimiento'];
		$asignacion_age = $row['age'];
		$asignacion_administrador = $row['administrador'];
		$asignacion_soporte = $row['soporte'];
		$asignacion_vendedor = $row['vendedor'];
		$asignacion_dualcore = $row['dualcore'];
		$asignacion_producto = $row['producto'];
		$asignacion_status = $row['status'];
		$asignacion_licencia = $row['licencia'];
		$asignacion_dias = $row['dias'];
		$asignacion_proxima_llamada = $row['proxima_llamada'];
		$asignacion_fecha_inicial = $row['fecha_inicial'];
		$asignacion_fecha_final = $row['fecha_final'];
		$asignacion_fecha_venta = $row['fecha_venta'];
		$asignacion_monto_venta = $row['monto_venta'];
        	$i++; 
	}

	$contacto_query = mysql_query("SELECT * FROM contacto WHERE id = $folio");

	$i = 0;
	while ($row = mysql_fetch_array($contacto_query)) {
		if ($i > 0) {}
		$contacto_id = $row['id'];
		$contacto_nombre = $row['nombre'];
		$contacto_contacto2 = $row['contacto2'];
		$contacto_contacto3 = $row['contacto3'];
		$contacto_direccion = $row['direccion'];
		$contacto_ciudad = $row['ciudad'];
		$contacto_pais = $row['pais'];
		$contacto_estado = $row['estado'];
		$contacto_lada = $row['lada'];
		$contacto_telefono = $row['telefono'];
		$contacto_email = $row['email'];
		$contacto_medio = $row['medio'];
		$contacto_giro = $row['giro'];
		$contacto_comentarios = $row['comentarios'];
		$contacto_fecha = $row['fecha'];
		$contacto_Hora = $row['Hora'];
		$contacto_formulario = $row['formulario'];
		$contacto_equipodeinteres = $row['equipodeinteres'];
		$contacto_comeqenatp = $row['comeqenatp'];
		$contacto_eqclosqcuenta = $row['eqclosqcuenta'];
		$contacto_antacteq = $row['antacteq'];
		$contacto_escliente = $row['escliente'];
		$contacto_numerodecliente = $row['numerodecliente'];
		$contacto_motivodeconsulta = $row['motivodeconsulta'];
		$contacto_empresa = $row['empresa'];
		$contacto_nombre_recomendador = $row['nombre_recomendador'];
		$contacto_sucursal_recomendador = $row['sucursal_recomendador'];
		$contacto_comentario_vendedor = $row['comentario_vendedor'];
		$contacto_asignadoa = $row['asignadoa'];
		$contacto_fechadecontacto = $row['fechadecontacto'];
		$contacto_fechaasignacion = $row['fechaasignacion'];
		$contacto_fechaventa = $row['fechaventa'];
		$contacto_estadodeventa = $row['estadodeventa'];
		$contacto_numerodefactura = $row['numerodefactura'];
		$contacto_usuario= $row['usuario'];
        	$i++; 
	}

	$data_s_query = mysql_query("SELECT * FROM ecrm_data_s WHERE id_seguimiento = $folio AND v1 = 1");

	$i = 0;
	while ($row = mysql_fetch_array($data_s_query)) {
		if ($i > 0) {}
		$data_s_id_ecrm_data_s = $row['id_ecrm_data_s'];
		$data_s_id_seguimiento = $row['id_seguimiento'];
		$data_s_usuario = $row['usuario'];
		$data_s_software = $row['software'];
		$data_s_version = $row['version'];
		$data_s_numero_de_serie = $row['numero_de_serie'];
		$data_s_codigos_de_activacion = $row['codigos_de_activacion'];
		$data_s_precio_total = $row['precio_total'];
		$data_s_precio_sin_iva = $row['precio_sin_iva'];
		$data_s_forma_de_pago = $row['forma_de_pago'];
		$data_s_cantidad_mensual = $row['cantidad_mensual'];
		$data_s_banco_ = $row['banco_'];
		$data_s_factura_avance = $row['factura_avance'];
		$data_s_documentacion = $row['documentacion'];
		$data_s_razon_social = $row['razon_social'];
		$data_s_rfc = $row['rfc'];
		$data_s_domicilio_fiscal = $row['domicilio_fiscal'];
		$data_s_cp = $row['cp'];
		$data_s_ref_nombre1 = $row['ref_nombre1'];
		$data_s_ref_tel1 = $row['ref_tel1'];
		$data_s_ref_mail1 = $row['ref_mail1'];
		$data_s_ref_parentezco1 = $row['ref_parentezco1'];
		$data_s_ref_nombre2 = $row['ref_nombre2'];
		$data_s_ref_tel2 = $row['ref_tel2'];
		$data_s_ref_mail2 = $row['ref_mail2'];
		$data_s_ref_parentezco2 = $row['ref_parentezco2'];
		$data_s_nombre_de_usuario = $row['nombre_de_usuario'];
		$data_s_email_de_usuario = $row['email_de_usuario'];
		$data_s_tel_usuario = $row['tel_usuario'];
		$data_s_experiencia_en_software_cad = $row['experiencia_en_software_cad'];
		$data_s_software_que_utiliza = $row['software_que_utiliza'];
		$data_s_nombre_de_pagos = $row['nombre_de_pagos'];
		$data_s_tel_pagos = $row['tel_pagos'];
		$data_s_mail_pagos = $row['mail_pagos'];
		$data_s_notas = $row['notas'];
		$data_s_asesor = $row['asesor'];
		$data_s_sistema_operativo = $row['sistema_operativo'];
		$data_s_modelado_de_objetos = $row['modelado_de_objetos'];
		$data_s_fecha_entrega_objetos = $row['fecha_entrega_objetos'];
		$data_s_puntos_interimodel = $row['puntos_interimodel'];
		$data_s_v1 = $row['v1'];
		$data_s_v2 = $row['v2'];
		$data_s_v3 = $row['v3'];
		$data_s_v4 = $row['v4'];
		$data_s_v5 = $row['v5'];
		$data_s_v6 = $row['v6'];
		$data_s_v7 = $row['v7'];
		$data_s_v8 = $row['v8'];
		$data_s_v9 = $row['v9'];
		$data_s_v10 = $row['v10'];
		$data_s_v11 = $row['v11'];
		$data_s_v12 = $row['v12'];
		$data_s_v13 = $row['v13'];
		$data_s_v14 = $row['v14'];
		$data_s_v15 = $row['v15'];
		$data_s_v16 = $row['v16'];
		$data_s_v17 = $row['v17'];
		$data_s_v18 = $row['v18'];
		$data_s_v19 = $row['v19'];
		$data_s_v20 = $row['v20'];
		$data_s_fecha = $row['fecha'];
		$data_s_hora = $row['hora'];	
        	$i++; 
	}

	# Informacion de la tabla de Datos de Facturación
	$q4 = mysql_query("SELECT * FROM datos_de_facturacion WHERE id_seguimiento = '$asignacion_id_seguimiento' ORDER BY id DESC limit 0,1");
	$i4 = 0;
	while ($r4 = mysql_fetch_array($q4)) {
		if ($i4 > 0) { }

		$ddf_razon_social = $r4['razon_social'];
		$ddf_rfc = $r4['rfc'];
		$ddf_calle = $r4['calle'];
		$ddf_num_exterior = $r4['num_exterior'];
		$ddf_num_interior = $r4['num_interior'];
		$ddf_col = $r4['col'];
		$ddf_ciudad = $r4['ciudad'];
		$ddf_estado = $r4['estado'];
		$ddf_cp = $r4['cp'];
		$ddf_email_para_facturacion = $r4['email_para_facturacion'];


		$i4++; 
	} 

	if ($tab == 'general') {
	
		include('view/v.detalles-de-contacto-01.general.php');

	}

	else if ($tab == 'terminosDeVenta') {

		include('view/v.detalles-de-contacto-02.terminos.php');

	}

	else if ($tab == 'cobranza') {

		include('view/v.detalles-de-contacto-03.cobranza.php');

	}

	else if ($tab == 'usuarios') {

		include('view/v.detalles-de-contacto-04.usuarios.php');

	}

	else if ($tab == 'datosDeFacturacion') {

		include('view/v.detalles-de-contacto-05.datosDeFacturacion.php');

	}

	else if ($tab == 'referencias') {

		include('view/v.detalles-de-contacto-06.referencias.php');

	}

	else if ($tab == 'historial') {

		include('view/v.detalles-de-contacto-07.historial.php');

	}

	else {

		echo $tab;

	}
?>