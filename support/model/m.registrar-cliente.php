<?php

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);
	# mysql_query("SET NAMES 'utf8'");

	$dte = date(ymdhia);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$ampm = date(a);

	if (isset($_POST["nombre"])) {

		$id = 0;
		#$id = $_POST["id"];
		$nombre = $_POST["nombre"];
		$contacto2 = $_POST["contacto2"];
		$contacto3 = $_POST["contacto3"];
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["ciudad"];
		$pais = $_POST["pais"];
		$estado = $_POST["estado"];
		$lada = $_POST["lada"];
		$telefono = $_POST["telefono"];
		$email = $_POST["email"];
		$medio = $_POST["medio"];
		$giro = $_POST["giro"];
		$comentarios = $_POST["comentarios"];
		$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';
		$Hora = ''.$hora.':'.$minuto.' '.$ampm.'';
		$formulario = 'CRM';
		$equipodeinteres = $_POST["equipodeinteres"];
		$comeqenatp = $_POST["comeqenatp"];
		$eqclosqcuenta = $_POST["eqclosqcuenta"];
		$antacteq = $_POST["antacteq"];
		$escliente = $_POST["escliente"];
		$numerodecliente = $_POST["numerodecliente"];
		$motivodeconsulta = $_POST["motivodeconsulta"];
		$empresa = $_POST["empresa"];
		$nombre_recomendador = $_POST["nombre_recomendador"];
		$sucursal_recomendador = $_POST["sucursal_recomendador"];
		$comentario_vendedor = $_POST["comentario_vendedor"];
		$asignadoa = $_POST["usuario"];
		$fechadecontacto = $_POST["fechadecontacto"];
		$fechaasignacion = ''.$ano.'-'.$mes.'-'.$dia.'';
		$fechaventa = $_POST["fechaventa"];
		$estadodeventa = $_POST["estadodeventa"];
		$numerodefactura = $_POST["numerodefactura"];
		$usuario = $_POST["usuario"];

		if ($usuario  == 'directo') {
			
			$formulario = 'CRM-DIRECTO';
		}
		
		else {

		}

		$formulario = 'CRM';

		$sql = "INSERT INTO contacto (id,nombre,contacto2,contacto3,direccion,ciudad,pais,estado,lada,telefono,email,medio,giro,comentarios,fecha,Hora,formulario,equipodeinteres,comeqenatp,eqclosqcuenta,antacteq,escliente,numerodecliente,motivodeconsulta,empresa,nombre_recomendador,sucursal_recomendador,comentario_vendedor,asignadoa,fechadecontacto,fechaasignacion,fechaventa,estadodeventa,numerodefactura,usuario) ";
		$sql.= "VALUES ('".$id."', '".$nombre."', '".$contacto2."', '".$contacto3."', '".$direccion."', '".$ciudad."', '".$pais."', '".$estado."', '".$lada."', '".$telefono."', '".$email."', '".$medio."', '".$giro."', '".$comentarios."', '".$fecha."', '".$Hora."', '".$formulario."', '".$equipodeinteres."', '".$comeqenatp."', '".$eqclosqcuenta."', '".$antacteq."', '".$escliente."', '".$numerodecliente."', '".$motivodeconsulta."', '".$empresa."', '".$nombre_recomendador."', '".$sucursal_recomendador."', '".$comentario_vendedor."', '".$asignadoa."', '".$fechadecontacto."', '".$fechaasignacion."', '".$fechaventa."', '".$estadodeventa."', '".$numerodefactura."', '".$usuario."')";

		mysql_query($sql, $conexion);

		/* */

		$result_registrar_cliente = mysql_query("SELECT id FROM contacto ORDER BY id desc limit 0,1");
		mysql_query ("SET NAMES 'utf8'");
  
		$i = 0;
			
		while ($row_registrar_cliente = mysql_fetch_array($result_registrar_cliente)) {
			
			if ($i > 0) {
			
			}
				
			$id = $row_registrar_cliente['id'];
			
			$i++;
		
		}

		/* */

		/* Soporte */

			$id_ecrm_data_s = 0;
			$id_seguimiento = $id;
			$usuario = $_POST['Susuario'];
			$software = $_POST['Ssoftware'];
			$version = $_POST['Sversion'];
			$numero_de_serie = $_POST['Snumero_de_serie'];
			$codigos_de_activacion = $_POST['Scodigos_de_activacion'];
			$precio_total = $_POST['Sprecio_total'];
			$precio_sin_iva = $_POST['Sprecio_sin_iva'];
			$forma_de_pago = $_POST['Sforma_de_pago'];
			$cantidad_mensual = $_POST['Scantidad_mensual'];
			$banco_ = $_POST['Sbanco_'];
			$factura_avance = $_POST['Sfactura_avance'];
			$documentacion = $_POST['Sdocumentacion'];
			$razon_social = $_POST['Srazon_social'];
			$rfc = $_POST['Srfc'];
			$domicilio_fiscal = $_POST['Sdomicilio_fiscal'];
			$cp = $_POST['Scp'];
			$ref_nombre1 = $_POST['Sref_nombre1'];
			$ref_tel1 = $_POST['Sref_tel1'];
			$ref_mail1 = $_POST['Sref_mail1'];
			$ref_parentezco1 = $_POST['Sref_parentezco1'];
			$ref_nombre2 = $_POST['Sref_nombre2'];
			$ref_tel2 = $_POST['Sref_tel2'];
			$ref_mail2 = $_POST['Sref_mail2'];
			$ref_parentezco2 = $_POST['Sref_parentezco2'];
			$nombre_de_usuario = $_POST['Snombre_de_usuario'];
			$email_de_usuario = $_POST['Semail_de_usuario'];
			$tel_usuario = $_POST['Stel_usuario'];
			$experiencia_en_software_cad = $_POST['Sexperiencia_en_software_cad'];
			$software_que_utiliza = $_POST['Ssoftware_que_utiliza'];
			$nombre_de_pagos = $_POST['Snombre_de_pagos'];
			$tel_pagos = $_POST['Stel_pagos'];
			$mail_pagos = $_POST['Smail_pagos'];
			$notas = $_POST['Snotas'];
			$asesor = $_POST['Sasesor'];
			$sistema_operativo = $_POST['Ssistema_operativo'];
			$modelado_de_objetos = $_POST['Smodelado_de_objetos'];
			$fecha_entrega_objetos = $_POST['Sfecha_entrega_objetos'];
			$puntos_interimodel = $_POST['Spuntos_interimodel'];
			$v1 = $_POST['v1'];
			$v2 = $_POST['v2'];
			$v3 = $_POST['v3'];
			$v4 = $_POST['v4'];
			$v5 = $_POST['v5'];
			$v6 = $_POST['v6'];
			$v7 = $_POST['v7'];
			$v8 = $_POST['v8'];
			$v9 = $_POST['v9'];
			$v10 = $_POST['v10'];
			$v11 = $_POST['v11'];
			$v12 = $_POST['v12'];
			$v13 = $_POST['v13'];
			$v14 = $_POST['v14'];
			$v15 = $_POST['v15'];
			$v16 = $_POST['v16'];
			$v17 = $_POST['v17'];
			$v18 = $_POST['v18'];
			$v19 = $_POST['v19'];
			$v20 = $_POST['v20'];
			$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';
			$hora = ''.$hora.':'.$minuto.' '.$ampm.'';

			$sqlSoporte = "INSERT INTO ecrm_data_s (id_ecrm_data_s,id_seguimiento,usuario,software,version,numero_de_serie,codigos_de_activacion,precio_total,precio_sin_iva,forma_de_pago,cantidad_mensual,banco_,factura_avance,documentacion,razon_social,rfc,domicilio_fiscal,cp,ref_nombre1,ref_tel1,ref_mail1,ref_parentezco1,ref_nombre2,ref_tel2,ref_mail2,ref_parentezco2,nombre_de_usuario,email_de_usuario,tel_usuario,experiencia_en_software_cad,software_que_utiliza,nombre_de_pagos,tel_pagos,mail_pagos,notas,asesor,sistema_operativo,modelado_de_objetos,fecha_entrega_objetos,puntos_interimodel,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12,v13,v14,v15,v16,v17,v18,v19,v20,fecha,hora)";
			$sqlSoporte.= "VALUES ('".$id_ecrm_data_s."','".$id_seguimiento."','".$usuario."','".$software."','".$version."','".$numero_de_serie."','".$codigos_de_activacion."','".$precio_total."','".$precio_sin_iva."','".$forma_de_pago."','".$cantidad_mensual."','".$banco_."','".$factura_avance."','".$documentacion."','".$razon_social."','".$rfc."','".$domicilio_fiscal."','".$cp."','".$ref_nombre1."','".$ref_tel1."','".$ref_mail1."','".$ref_parentezco1."','".$ref_nombre2."','".$ref_tel2."','".$ref_mail2."','".$ref_parentezco2."','".$nombre_de_usuario."','".$email_de_usuario."','".$tel_usuario."','".$experiencia_en_software_cad."','".$software_que_utiliza."','".$nombre_de_pagos."','".$tel_pagos."','".$mail_pagos."','".$notas."','".$asesor."','".$sistema_operativo."','".$modelado_de_objetos."','".$fecha_entrega_objetos."','".$puntos_interimodel."','".$v1."','".$v2."','".$v3."','".$v4."','".$v5."','".$v6."','".$v7."','".$v8."','".$v9."','".$v10."','".$v11."','".$v12."','".$v13."','".$v14."','".$v15."','".$v16."','".$v17."','".$v18."','".$v19."','".$v20."','".$fecha."','".$hora."')";
			mysql_query($sqlSoporte, $conexion);

	}

?>