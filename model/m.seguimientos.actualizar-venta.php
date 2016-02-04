<?php

# < Conexión

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);
	mysql_query("SET NAMES 'utf8'");

# > Conexión

# < Fecha

	include('m.seguimientos.actualizar-venta.1.php');

	# < Conexión
	if (isset($_POST["estadodeventa"])) {

		# /* POSTS
		include('m.seguimientos.actualizar-venta.2.php');

		$sql = "INSERT INTO ecrm_comentarios_v (id_comentarios_v,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
    		$sql.= "VALUES ('".$id_comentarios_v."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
    		$_SESSION['testerboom'] = $sql;

    		$sql_hotcake = "INSERT INTO ecrm_seguimiento_tipo (id_seguimiento_tipo,id_seguimiento,usuario,tipo,t1,t2,t3,t4,t5,t6,t7,fecha)";
    		$sql_hotcake.= "VALUES (0,'".$id_seguimiento."','".$usuario."','".$hotcake."','".$t1."','".$t2."','".$t3."','".$t4."','".$t5."','".$t6."','".$t7."',now())";

    		# /* Asignar a Soporte los Facturados
		$sql_q4 = "INSERT INTO ecrm_asignacion (id_ecrm_asignacion,id_seguimiento,age,administrador,soporte,vendedor,dualcore,producto,status,licencia,dias,proxima_llamada,fecha_inicial,fecha_final,fecha_venta,monto_venta,fecha_asignacion,hora_asignacion,fecha)";
    		$sql_q4.= "VALUES (0,'".$q4_id_seguimiento."','".$q4_age."','".$q4_administrador."','".$q4_soporte."','".$q4_vendedor."','".$q4_dualcore."','".$q4_producto."','".$q4_status."','".$q4_licencia."','".$q4_dias."','".$q4_proxima_llamada."','".$q4_fecha_inicial."','".$q4_fecha_final."','".$q4_fecha_venta."','".$q4_monto_venta."','".$q4_fecha_asignacion."','".$q4_hora_asignacion."',now())";
		# $sql_q4.= "VALUES (0,'0','0','0','0','0','0','0','0','0','2015-04-01','2015-04-01','2015-04-01','2015-04-01','2015','2015-04-01','2015-04-01','2015-04-23 18:20:25')";

    		$sql_facturado = "INSERT INTO ecrm_seguimiento_facturado (id_seguimiento_facturado,id_seguimiento,usuario,montodeventa,softwarevendido,fechaventa,fecha)";
    		$sql_facturado.= "VALUES (0,'".$id_seguimiento."','".$usuario."','".$montodeventa."','".$softwarevendido."','".$fechaventa."',now())";
    		
    		# /* Facturado Datos
    		$sql_facturado_datos = "INSERT INTO ecrm_data_s (id_ecrm_data_s,id_seguimiento,usuario,software,version,numero_de_serie,codigos_de_activacion,precio_total,precio_sin_iva,forma_de_pago,cantidad_mensual,banco_,factura_avance,documentacion,razon_social,rfc,domicilio_fiscal,cp,ref_nombre1,ref_tel1,ref_mail1,ref_parentezco1,ref_nombre2,ref_tel2,ref_mail2,ref_parentezco2,nombre_de_usuario,email_de_usuario,tel_usuario,experiencia_en_software_cad,software_que_utiliza,nombre_de_pagos,tel_pagos,mail_pagos,notas,asesor,sistema_operativo,modelado_de_objetos,fecha_entrega_objetos,puntos_interimodel,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12,v13,v14,v15,v16,v17,v18,v19,v20,fecha,hora)";
    		$sql_facturado_datos.= "VALUES (0,'".$fd_id_seguimiento."','".$fd_usuario."','".$fd_software."','".$fd_version."','".$fd_numero_de_serie."','".$fd_codigos_de_activacion."','".$fd_precio_total."','".$fd_precio_sin_iva."','".$fd_forma_de_pago."','".$fd_cantidad_mensual."','".$fd_banco_."','".$fd_factura_avance."','".$fd_documentacion."','".$fd_razon_social."','".$fd_rfc."','".$fd_domicilio_fiscal."','".$fd_cp."','".$fd_ref_nombre1."','".$fd_ref_tel1."','".$fd_ref_mail1."','".$fd_ref_parentezco1."','".$fd_ref_nombre2."','".$fd_ref_tel2."','".$fd_ref_mail2."','".$fd_ref_parentezco2."','".$fd_nombre_de_usuario."','".$fd_email_de_usuario."','".$fd_tel_usuario."','".$fd_experiencia_en_software_cad."','".$fd_software_que_utiliza."','".$fd_nombre_de_pagos."','".$fd_tel_pagos."','".$fd_mail_pagos."','".$fd_notas."','".$fd_asesor."','".$fd_sistema_operativo."','".$fd_modelado_de_objetos."','".$fd_fecha_entrega_objetos."','".$fd_puntos_interimodel."','".$fd_v1."','".$fd_v2."','".$fd_v3."','".$fd_v4."','".$fd_v5."','".$fd_v6."','".$fd_v7."','".$fd_v8."','".$fd_v9."','".$fd_v10."','".$fd_v11."','".$fd_v12."','".$fd_v13."','".$fd_v14."','".$fd_v15."','".$fd_v16."','".$fd_v17."','".$fd_v18."','".$fd_v19."','".$fd_v20."','".$fd_fecha."','".$fd_hora."')";

    		# /* Datos de Facturación

    		$sql_datos_de_facturacion = "INSERT INTO datos_de_facturacion (id,id_seguimiento,razon_social,rfc,calle,num_exterior,num_interior,col,ciudad,estado,cp,email_para_facturacion)";
    		$sql_datos_de_facturacion.= "VALUES (0,'".$fd_id_seguimiento."','".$ddf_razon_social."','".$ddf_rfc."','".$ddf_calle."','".$ddf_num_exterior."','".$ddf_num_interior."','".$ddf_col."','".$ddf_ciudad."','".$ddf_estado."','".$ddf_cp."','".$ddf_email_para_facturacion."')";

    		# Inserts de control 
    		
		if ($_POST["tipodeseguimiento"] == 'admin') {

		}

		else {
			$sql2 = "UPDATE `crmk`.`ecrm_comentarios_v` SET `horaasignacion`='ok', `fechaproxima`='$fechaproxima' WHERE `id_seguimiento`='$id_seguimiento';";
			mysql_query($sql2, $conexion);

			$sql_q42 = "UPDATE `crmk`.`ecrm_asignacion` SET `age`=0 WHERE `id_seguimiento`='$id_seguimiento';";
			mysql_query($sql_q42, $conexion);

			$sql_facturado_datosClean = "UPDATE `crmk`.`ecrm_data_s` SET `v1`='0' WHERE `id_seguimiento`='$id_seguimiento';";
			mysql_query($sql_facturado_datosClean, $conexion);
		}

		if ($estadodeventa == 'facturado') {
			if ($q4_producto == '') {
				
			}
			else {
				mysql_query($sql_q4, $conexion);	
			}

			mysql_query($sql_facturado_datos, $conexion);
			mysql_query($sql_datos_de_facturacion, $conexion);
		}
		else {

		}

			mysql_query($sql, $conexion);
			mysql_query($sql_hotcake, $conexion);
			
		if ($montodeventa != '') {
			mysql_query($sql_facturado, $conexion);	
		}
		else {

		}

			$status = "ok";
			
			$_SESSION["titleMensaje"] = '22';
			$_SESSION["h4Mensaje"] = '22';

			/*AB*/
			if ($_POST["update"] == 'update') {
				$sql3 = "UPDATE `crmk`.`agenda` SET `fecha`='2015-01-08', `hora`='11:11:11' WHERE `id_seguimiento`='$id';";
			}
		
			else {
				$sql3 = "INSERT INTO agenda (id,id_seguimiento,fecha,hora)";
				$sql3.= "VALUES ('0','".$id_seguimiento."','".$fecharespuesta."','".$horarespuesta."')";	
			}
			/*AB*/
			mysql_query($sql3, $conexion);

			$_SESSION["titleMensaje"] = 'CRM';

			# /* Envio
			include('m.seguimientos.actualizar-venta.3.php');

			if ($tipo == 'administrador' OR $tipodeseguimiento == 'admin') {
				header("Location: modules/m.iframe-breaker.php?id=$id_seguimiento");
			}
			else {
			
				header("Location: {$_SERVER['HTTP_REFERER']}".SID);
			}

			$fcasignadoa = $_POST["fcasignadoa"];
	
		} # Cierra if del insert

# Variables
$status = "";
$im1 = $_SESSION["im1"];
$conf = 'test';

?>