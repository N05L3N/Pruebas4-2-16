<?php
	
	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM ecrm_data_s WHERE id_ecrm_data_s = ".$id." ORDER BY id_ecrm_data_s desc limit 0,1");
	mysql_query ("SET NAMES 'utf8'");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
    
		if ($i > 0) {
		}

		$id_seguimiento = $row['id_seguimiento'];
		$usuario = $row['usuario'];
		$software = $row['software'];
		$version = $row['version'];
		$numero_de_serie = $row['numero_de_serie'];
		$codigos_de_activacion = $row['codigos_de_activacion'];
		$precio_total = $row['precio_total'];
		$precio_sin_iva = $row['precio_sin_iva'];
		$forma_de_pago = $row['forma_de_pago'];
		$cantidad_mensual = $row['cantidad_mensual'];
		$banco_ = $row['banco_'];
		$factura_avance = $row['factura_avance'];
		$documentacion = $row['documentacion'];
		$razon_social = $row['razon_social'];
		$rfc = $row['rfc'];
		$domicilio_fiscal = $row['domicilio_fiscal'];
		$cp = $row['cp'];
		$ref_nombre1 = $row['ref_nombre1'];
		$ref_tel1 = $row['ref_tel1'];
		$ref_mail1 = $row['ref_mail1'];
		$ref_parentezco1 = $row['ref_parentezco1'];
		$ref_nombre2 = $row['ref_nombre2'];
		$ref_tel2 = $row['ref_tel2'];
		$ref_mail2 = $row['ref_mail2'];
		$ref_parentezco2 = $row['ref_parentezco2'];
		$nombre_de_usuario = $row['nombre_de_usuario'];
		$email_de_usuario = $row['email_de_usuario'];
		$tel_usuario = $row['tel_usuario'];
		$experiencia_en_software_cad = $row['experiencia_en_software_cad'];
		$software_que_utiliza = $row['software_que_utiliza'];
		$nombre_de_pagos = $row['nombre_de_pagos'];
		$tel_pagos = $row['tel_pagos'];
		$mail_pagos = $row['mail_pagos'];
		$notas = $row['notas'];
		$asesor = $row['asesor'];
		$sistema_operativo = $row['sistema_operativo'];
		$modelado_de_objetos = $row['modelado_de_objetos'];
		$fecha_entrega_objetos = $row['fecha_entrega_objetos'];
		$puntos_interimodel = $row['puntos_interimodel'];

	}

?>
	<table width="100%">
		<tr><td><b>Id_seguimiento:</b></td><td><input type="text" name="id_seguimiento" class="form-control" placeholder="id_seguimiento" value="<?= $id_seguimiento ?>"></td></tr>
		<tr><td><b>Usuario:</b></td><td><input type="text" name="usuario" class="form-control" placeholder="usuario" value="<?= $usuario ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Info de Compra</th></tr>
		<tr><td><b>Software:</b></td><td><input type="text" name="software" class="form-control" placeholder="software" value="<?= $software ?>"></td></tr>
		<tr><td><b>Version:</b></td><td><input type="text" name="version" class="form-control" placeholder="version" value="<?= $version ?>"></td></tr>
		<tr><td><b>Numero de serie:</b></td><td><input type="text" name="numero_de_serie" class="form-control" placeholder="numero_de_serie" value="<?= $numero_de_serie ?>"></td></tr>
		<tr><td><b>Codigos de activacion:</b></td><td><input type="text" name="codigos_de_activacion" class="form-control" placeholder="codigos_de_activacion" value="<?= $codigos_de_activacion ?>"></td></tr>
		<tr><td><b>Precio Total:</b></td><td><input type="text" name="precio_total" class="form-control" placeholder="precio_total" value="<?= $precio_total ?>"></td></tr>
		<tr><td><b>Precio sin IVA:</b></td><td><input type="text" name="precio_sin_iva" class="form-control" placeholder="precio_sin_iva" value="<?= $precio_sin_iva ?>"></td></tr>
		<tr><td><b>Forma de pago:</b></td><td><input type="text" name="forma_de_pago" class="form-control" placeholder="forma_de_pago" value="<?= $forma_de_pago ?>"></td></tr>
		<tr><td><b>Cantidad mensual:</b></td><td><input type="text" name="cantidad_mensual" class="form-control" placeholder="cantidad_mensual" value="<?= $cantidad_mensual ?>"></td></tr>
		<tr><td><b>Banco:</b></td><td><input type="text" name="banco_" class="form-control" placeholder="banco_" value="<?= $banco_ ?>"></td></tr>
		<tr><td><b>Factura Avance:</b></td><td><input type="text" name="factura_avance" class="form-control" placeholder="factura_avance" value="<?= $factura_avance ?>"></td></tr>
		<tr><td><b>Documentacion:</b></td><td><input type="text" name="documentacion" class="form-control" placeholder="documentacion" value="<?= $documentacion ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Datos de Facturación</th></tr>
		<tr><td><b>Razon Social:</b></td><td><input type="text" name="razon_social" class="form-control" placeholder="razon_social" value="<?= $razon_social ?>"></td></tr>
		<tr><td><b>RFC:</b></td><td><input type="text" name="rfc" class="form-control" placeholder="rfc" value="<?= $rfc ?>"></td></tr>
		<tr><td><b>Domicilio Fiscal:</b></td><td><input type="text" name="domicilio_fiscal" class="form-control" placeholder="domicilio_fiscal" value="<?= $domicilio_fiscal ?>"></td></tr>
		<tr><td><b>CP:</b></td><td><input type="text" name="cp" class="form-control" placeholder="cp" value="<?= $cp ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Referencias</th></tr>
		<tr><td><b>Nombre 1:</b></td><td><input type="text" name="ref_nombre1" class="form-control" placeholder="ref_nombre1" value="<?= $ref_nombre1 ?>"></td></tr>
		<tr><td><b>Tel 1:</b></td><td><input type="text" name="ref_tel1" class="form-control" placeholder="ref_tel1" value="<?= $ref_tel1 ?>"></td></tr>
		<tr><td><b>Mail 1:</b></td><td><input type="text" name="ref_mail1" class="form-control" placeholder="ref_mail1" value="<?= $ref_mail1 ?>"></td></tr>
		<tr><td><b>Parentezco 1:</b></td><td><input type="text" name="ref_parentezco1" class="form-control" placeholder="ref_parentezco1" value="<?= $ref_parentezco1 ?>"></td></tr>
		<tr><td><b>Nombre 2:</b></td><td><input type="text" name="ref_nombre2" class="form-control" placeholder="ref_nombre2" value="<?= $ref_nombre2 ?>"></td></tr>
		<tr><td><b>Tel 2:</b></td><td><input type="text" name="ref_tel2" class="form-control" placeholder="ref_tel2" value="<?= $ref_tel2 ?>"></td></tr>
		<tr><td><b>Mail 2:</b></td><td><input type="text" name="ref_mail2" class="form-control" placeholder="ref_mail2" value="<?= $ref_mail2 ?>"></td></tr>
		<tr><td><b>Parentezco 2:</b></td><td><input type="text" name="ref_parentezco2" class="form-control" placeholder="ref_parentezco2" value="<?= $ref_parentezco2 ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Usuario del Programa</th></tr>
		<tr><td><b>Nombre de Usuario:</b></td><td><input type="text" name="nombre_de_usuario" class="form-control" placeholder="nombre_de_usuario" value="<?= $nombre_de_usuario ?>"></td></tr>
		<tr><td><b>Email de Usuario:</b></td><td><input type="text" name="email_de_usuario" class="form-control" placeholder="email_de_usuario" value="<?= $email_de_usuario ?>"></td></tr>
		<tr><td><b>Tel Usuario:</b></td><td><input type="text" name="tel_usuario" class="form-control" placeholder="tel_usuario" value="<?= $tel_usuario ?>"></td></tr>
		<tr><td><b>Experiencia En Software CAD:</b></td><td><input type="text" name="experiencia_en_software_cad" class="form-control" placeholder="experiencia_en_software_cad" value="<?= $experiencia_en_software_cad ?>"></td></tr>
		<tr><td><b>Software que Utiliza:</b></td><td><input type="text" name="software_que_utiliza" class="form-control" placeholder="software_que_utiliza" value="<?= $software_que_utiliza ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Persona encargada de pago</th></tr>
		<tr><td><b>Nombre de pagos:</b></td><td><input type="text" name="nombre_de_pagos" class="form-control" placeholder="nombre_de_pagos" value="<?= $nombre_de_pagos ?>"></td></tr>
		<tr><td><b>Tel pagos:</b></td><td><input type="text" name="tel_pagos" class="form-control" placeholder="tel_pagos" value="<?= $tel_pagos ?>"></td></tr>
		<tr><td><b>Mail pagos:</b></td><td><input type="text" name="mail_pagos" class="form-control" placeholder="mail_pagos" value="<?= $mail_pagos ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Notas</th></tr>
		<tr><td><b>Notas:</b></td><td><input type="text" name="notas" class="form-control" placeholder="notas" value="<?= $notas ?>"></td></tr>

		<tr><th colspan="2" style="text-align:center;">Soporte Técnico</th></tr>
		<tr><td><b>Asesor:</b></td><td><input type="text" name="asesor" class="form-control" placeholder="asesor" value="<?= $asesor ?>"></td></tr>
		<tr><td><b>Sistema Operativo:</b></td><td><input type="text" name="sistema_operativo" class="form-control" placeholder="sistema_operativo" value="<?= $sistema_operativo ?>"></td></tr>
		<tr><td><b>Modelado de Objetos:</b></td><td><input type="text" name="modelado_de_objetos" class="form-control" placeholder="modelado_de_objetos" value="<?= $modelado_de_objetos ?>"></td></tr>
		<tr><td><b>Fecha entrega Objetos:</b></td><td><input type="text" name="fecha_entrega_objetos" class="form-control" placeholder="fecha_entrega_objetos" value="<?= $fecha_entrega_objetos ?>"></td></tr>
		<tr><td><b>Puntos interimodel:</b></td><td><input type="text" name="puntos_interimodel" class="form-control" placeholder="puntos_interimodel" value="<?= $puntos_interimodel ?>"></td></tr>
</table>