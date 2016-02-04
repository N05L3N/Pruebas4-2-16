<?php

# Hora del Sistema

	# $dte = date(ymdhis);
	# $dia = date(d);
	# $mes = date(m);
	# $ano = date(Y);
	# $horaServ = date(h);
	# $minuto = date(i);
	# $fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
	# $hora = $horaServ - 7;
	# $horarespuesta = ''.$hora.':'.$minuto.' pm';

	# $horarespuesta = ''.$hora.':'.$minuto.' '.$ampm.'';
		
	ini_set('date.timezone', 'America/Chihuahua');
	$horarespuesta = date('H:i a', gmdate('U'));
	$fecharespuesta = date('Y-m-d', gmdate('U'));
	
	

# Hora del Sistema

	$id_comentarios_v = 0;
	$id_seguimiento = $_POST["idedit"];
		
		if ($_SESSION["usuario"] == '') {

			$usuario = $_POST["vendedor"];

			$_SESSION["usuario"] = $_POST["vendedor"];

		}

		else {

			$usuario = $_SESSION["usuario"];

		}

		$termometro = $_POST["termometro"];
		$estadodeventa = $_POST["estadodeventa"];
		$comentariovendedor = $_POST["comentariovendedor"];
		$num_factura = $_POST["num_factura"];	

		$tipodeseguimiento = $_POST['tipodeseguimiento'];
		
		if ($tipodeseguimiento == 'admin') {
			$fechaasignacion = $_POST["fechaasignacion"];
		}
		else {
			$fechaasignacion = $_POST["fechaasignacion"];
		}

		$horaasignacion = 'a';
		$hotcake = $_POST['hotcake'];

		/* Facturado */
		$montodeventa = $_POST['montodeventa'];
		$softwarevendido = $_POST['softwarevendido'];
		$fechaventa = $_POST['fechaventa'];
		$fechaventaE = explode("-", $fechaventa);
		$fechaventa = ''.$fechaventaE[2].'-'.$fechaventaE[1].'-'.$fechaventaE[0].'';
		
		$t1 = $_POST['t1'];
		$t2 = $_POST['t2'];
		$t3 = $_POST['t3'];
		$t4 = $_POST['t4'];
		$t5 = $_POST['t5'];
		$t6 = $_POST['t6'];
		$t7 = $_POST['t7'];

		$fechaproxima = ''.$fechaanoprox.'-'.$fechamesprox.'-'.$fechadiaprox.'';

		/* Facturado */ 

		if ($softwarevendido == 'InteriCAD Lite' OR $softwarevendido == 'InteriCAD 8000' OR $softwarevendido == 'iScan') {
			$q4_soporte = 'psanora';
		}
		else if ($softwarevendido == 'KD MAX' OR $softwarevendido == 'Ceramic King' OR $softwarevendido == 'InteriCAD T6') {
			$q4_soporte = 'soporte2';
		}
		else {
			$q4_soporte = '';
		}

		$q4_id_ecrm_asignacion = 0;
		$q4_id_seguimiento = $id_seguimiento;
		$q4_age = 1;
		$q4_administrador = '0';
		$q4_soporte;
		$q4_vendedor = $usuario;
		$q4_dualcore = '';
		$q4_producto = $softwarevendido;
		$q4_status = $estadodeventa;
		$q4_licencia = $_POST['asignacion_licencia'];
		$q4_dias = '';
		$q4_proxima_llamada = $fechaproxima;
		
		$q4_fecha_inicialE = explode("-", $_POST['q4_fecha_inicial']);
		$q4_fecha_inicial = ''.$q4_fecha_inicialE[2].'-'.$q4_fecha_inicialE[1].'-'.$q4_fecha_inicialE[0].'';

		$q4_fecha_finalE = explode("-", $_POST['q4_fecha_final']);
		$q4_fecha_final = ''.$q4_fecha_finalE[2].'-'.$q4_fecha_finalE[1].'-'.$q4_fecha_finalE[0].'';
		
		$q4_fecha_venta = $fechaventa;
		$q4_monto_venta = $montodeventa;
		$q4_fecha_asignacion = $fecharespuesta;
		$q4_hora_asignacion = $horarespuesta;
		$q4_fecha;

		/* Facturados Datos */

		$fd_id_seguimiento = $id_seguimiento;
		$fd_usuario = $usuario;
		$fd_software = $softwarevendido;
		$fd_version = $_POST['fd_version'];
		$fd_numero_de_serie = $_POST['fd_numero_de_serie'];
		$fd_codigos_de_activacion = $_POST['fd_codigos_de_activacion'];
		$fd_precio_total = $_POST['fd_precio_total'];
		$fd_precio_sin_iva = $_POST['fd_precio_sin_iva'];
		$fd_forma_de_pago = $_POST['fd_forma_de_pago'];
		$fd_cantidad_mensual = $_POST['fd_cantidad_mensual'];
		$fd_banco_ = $_POST['fd_banco_'];
		$fd_factura_avance = $_POST['fd_factura_avance'];
		$fd_documentacion = $_POST['fd_documentacion'];
		$fd_razon_social = $_POST['fd_razon_social'];
		$fd_rfc = $_POST['fd_rfc'];
		$fd_domicilio_fiscal = $_POST['fd_domicilio_fiscal'];
		$fd_cp = $_POST['fd_cp'];
		$fd_ref_nombre1 = $_POST['fd_ref_nombre1'];
		$fd_ref_tel1 = $_POST['fd_ref_tel1'];
		$fd_ref_mail1 = $_POST['fd_ref_mail1'];
		$fd_ref_parentezco1 = $_POST['fd_ref_parentezco1'];
		$fd_ref_nombre2 = $_POST['fd_ref_nombre2'];
		$fd_ref_tel2 = $_POST['fd_ref_tel2'];
		$fd_ref_mail2 = $_POST['fd_ref_mail2'];
		$fd_ref_parentezco2 = $_POST['fd_ref_parentezco2'];
		$fd_nombre_de_usuario = $_POST['fd_nombre_de_usuario'];
		$fd_email_de_usuario = $_POST['fd_email_de_usuario'];
		$fd_tel_usuario = $_POST['fd_tel_usuario'];
		$fd_experiencia_en_software_cad = $_POST['fd_experiencia_en_software_cad'];
		$fd_software_que_utiliza = $_POST['fd_software_que_utiliza'];
		$fd_nombre_de_pagos = $_POST['fd_nombre_de_pagos'];
		$fd_tel_pagos = $_POST['fd_tel_pagos'];
		$fd_mail_pagos = $_POST['fd_mail_pagos'];
		$fd_notas = $_POST['fd_notas'];
		$fd_asesor = $q4_soporte;
		$fd_sistema_operativo = $_POST['fd_sistema_operativo'];
		$fd_modelado_de_objetos = $_POST['fd_modelado_de_objetos'];
		$fd_fecha_entrega_objetos = $_POST['fd_fecha_entrega_objetos'];
		$fd_puntos_interimodel = $_POST['fd_puntos_interimodel'];
		$fd_v1 = '1';
		$fd_fecha = $fecharespuesta;
		$fd_hora = $horarespuesta;

		/* Datos de Facturación */
		
		$ddf_razon_social = $_POST['ddf_razon_social'];
		$ddf_rfc = $_POST['ddf_rfc'];
		$ddf_calle = $_POST['ddf_calle'];
		$ddf_num_exterior = $_POST['ddf_num_exterior'];
		$ddf_num_interior = $_POST['ddf_num_interior'];
		$ddf_col = $_POST['ddf_col'];
		$ddf_ciudad = $_POST['ddf_ciudad'];
		$ddf_estado = $_POST['ddf_estado'];
		$ddf_cp = $_POST['ddf_cp'];
		$ddf_email_para_facturacion = $_POST['ddf_email_para_facturacion'];
?>