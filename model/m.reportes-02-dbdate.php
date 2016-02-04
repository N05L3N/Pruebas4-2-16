<?php

session_start();
$fecha = date(ymd);

$inicio = ''. $_SESSION["v3"] .'-' . $_SESSION["v2"] . '-' . $_SESSION["v1"] . '';
$fin = '' . $_SESSION["v33"] . '-' . $_SESSION["v22"] . '-' . $_SESSION["v11"] . '';

	header('Content-type: application/vnd.ms-excel');
	header("Content-Disposition: attachment; filename=dbdate($fecha).xls");
	header("Pragma: no-cache");
	header("Expires: 0");

?>

<style>
	tr {
		border: 1px solid #999;
	}
	th, td {
		text-align: left;
	}
</style>

<table border='1' cellpadding='0'cellspacing='0' width='1024' style='font-size:12px;'>
	<tr>
		<th></th>
		<th>Folio</th>
		<th>Registro de:</th>
		<th>Nombre</th>
		<th>Profesión</th>
		<th>Especialidad</th>
		<th width='200'>Dirección</th>
		<th>Ciudad</th>
		<th>Pais</th>
		<th>Estado</th>
		<th>Telefono</th>
		<th>E-mail</th>
		<th>Medio</th>
		<th>Giro</th>
		<th>Software de interes</th>
		<th>Página Web</th>
		<th>Puesto</th>
		<th>Motivo de consulta</th>
		<th>Empresa</th>
		<th width='750'>Comentarios</th>
		<th>Fecha</th>
		<th>Vendedor</th>
		<!-- Q3-->
		<th>Usuario</th>
		<th>Software</th>
		<th>Version</th>
		<th>Numero_de_serie</th>
		<th>Codigos_de_activacion</th>
		<th>Precio_total</th>
		<th>Precio_sin_iva</th>
		<th>Forma_de_pago</th>
		<th>Cantidad_mensual</th>
		<th>Banco_</th>
		<th>Factura_avance</th>
		<th>Documentacion</th>
		<th>Razon_social</th>
		<th>Rfc</th>
		<th>Domicilio_fiscal</th>
		<th>Cp</th>
		<th>Ref_nombre1</th>
		<th>Ref_tel1</th>
		<th>Ref_mail1</th>
		<th>Ref_parentezco1</th>
		<th>Ref_nombre2</th>
		<th>Ref_tel2</th>
		<th>Ref_mail2</th>
		<th>Ref_parentezco2</th>
		<th>Nombre_de_usuario</th>
		<th>Email_de_usuario</th>
		<th>Tel_usuario</th>
		<th>Experiencia_en_software_cad</th>
		<th>Software_que_utiliza</th>
		<th>Nombre_de_pagos</th>
		<th>Tel_pagos</th>
		<th>Mail_pagos</th>
		<th>Notas</th>
		<th>Asesor</th>
		<th>Sistema_operativo</th>
		<th>Modelado_de_objetos</th>
		<th>Fecha_entrega_objetos</th>
		<th>Puntos_interimodel</th>
	</tr>

<?php

	if(!@mysql_connect("localhost", "ucrmk", "Pcrmk#2014")) 
	{}

	#$result2 = mysql_query("SELECT DISTINCT(id_seguimiento) id_seguimiento, usuario, software, version FROM ecrm_data_s WHERE id_seguimiento IN 
	#(SELECT id_seguimiento FROM ecrm_comentarios_v WHERE estadodeventa = 'facturado' AND usuario='$vendedor') ORDER BY `id_ecrm_data_s` DESC");

	# $q1 = mysql_query("SELECT * FROM crmk.ecrm_comentarios_v WHERE id_seguimiento IN (SELECT id_seguimiento FROM crmk.ecrm_asignacion WHERE fecha_venta >= '$inicio' AND fecha_venta <= '$fin') ORDER BY id_ecrm_asignacion DESC");

	$q1 = mysql_query("SELECT * FROM crmk.ecrm_asignacion WHERE (fecha_venta >= '$inicio' AND fecha_venta <= '$fin') ORDER BY id_seguimiento DESC");

	#$q1 = mysql_query("SELECT * FROM crmk.ecrm_comentarios_v WHERE (estadodeventa = 'facturado') AND (fecharespuesta >= '".$inicio."' AND fecharespuesta <= '".$fin."') ORDER BY id_comentarios_v DESC");

	$i1 = 1;
	while ($r1 = mysql_fetch_array($q1)) {
	if ($i1 > 0) {

	}
	
		$r1['id_comentarios_v'];
		$r1['id_seguimiento'];
		$r1['usuario'];
		$r1['termometro'];
		$r1['estadodeventa'];
		$r1['comentariovendedor'];
		$r1['factura'];
		$r1['fechaasignacion'];
		$r1['horaasignacion'];
		$r1['fecharespuesta'];
		$r1['horarespuesta'];
		$r1['fechaproxima'];


	$id_seguimiento = $r1['id_seguimiento'];

?>

	<tr>
		<td><?= $i1 ?></td>

<?php
	
	/* Inicia: Query #2*/

	$q2 = mysql_query("SELECT * FROM crmk.contacto WHERE id = '$id_seguimiento' ORDER BY id DESC limit 0,1");

	$i2 = 1;
	while ($r2 = mysql_fetch_array($q2)) {
	if ($i2 > 0) {

	}

?>
	
		<td><?= $id_seguimiento ?></td>
		<td><?= $r2['formulario'] ?></td>
		<td><font color='black'><?= $r2['nombre'] ?></font></td>
		<td><?= $r2['contacto2'] ?></td>
		<td><?= $r2['contacto3'] ?></td>
		<td><?= $r2['direccion'] ?></td>
		<td><?= $r2['ciudad'] ?></td>
		<td><?= $r2['pais'] ?></td>
		<td><?= $r2['estado'] ?></td>
		<td><?= $r2['telefono'] ?></td>
		<td><font color='blue'><?= $r2['email'] ?></font></td>
		<td><?= $r2['medio'] ?></td>
		<td><?= $r2['giro'] ?></td>
		<td><?= $r2['equipodeinteres'] ?></td>
		<!-- Página Web -->
		<td><?= $r2['comeqenatp'] ?></td>
		<!-- Puesto -->
		<td><?= $r2['eqclosqcuenta'] ?></td>
		<td><?= $r2['motivodeconsulta'] ?></td>
		<td><?= $r2['empresa'] ?></td>
		<td><?= $r2['comentarios'] ?></td>
		<td><?= $r2['fecha'] ?></td>
		<td><?= $r2['asignadoa'] ?></td>

<?php

	$i2++;

	}

	/* Termina: Query #2*/

?>

<?php
	
	/* Inicia: Query #3*/

	$q3 = mysql_query("SELECT * FROM crmk.ecrm_data_s WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_ecrm_data_s DESC limit 0,1");

	$i3 = 1;
	while ($r3 = mysql_fetch_array($q3)) {
	if ($i3 > 0) {

	}

?>

	<!-- <td><?= $r3['id_ecrm_data_s'] ?></td> -->
	<!-- <td><?= $r3['id_seguimiento'] ?></td> -->
	<td><?= $r3['usuario'] ?></td>
	<td><?= $r3['software'] ?></td>
	<td><?= $r3['version'] ?></td>
	<td><?= $r3['numero_de_serie'] ?></td>
	<td><?= $r3['codigos_de_activacion'] ?></td>
	<td><?= $r3['precio_total'] ?></td>
	<td><?= $r3['precio_sin_iva'] ?></td>
	<td><?= $r3['forma_de_pago'] ?></td>
	<td><?= $r3['cantidad_mensual'] ?></td>
	<td><?= $r3['banco_'] ?></td>
	<td><?= $r3['factura_avance'] ?></td>
	<td><?= $r3['documentacion'] ?></td>
	<td><?= $r3['razon_social'] ?></td>
	<td><?= $r3['rfc'] ?></td>
	<td><?= $r3['domicilio_fiscal'] ?></td>
	<td><?= $r3['cp'] ?></td>
	<td><?= $r3['ref_nombre1'] ?></td>
	<td><?= $r3['ref_tel1'] ?></td>
	<td><?= $r3['ref_mail1'] ?></td>
	<td><?= $r3['ref_parentezco1'] ?></td>
	<td><?= $r3['ref_nombre2'] ?></td>
	<td><?= $r3['ref_tel2'] ?></td>
	<td><?= $r3['ref_mail2'] ?></td>
	<td><?= $r3['ref_parentezco2'] ?></td>
	<td><?= $r3['nombre_de_usuario'] ?></td>
	<td><?= $r3['email_de_usuario'] ?></td>
	<td><?= $r3['tel_usuario'] ?></td>
	<td><?= $r3['experiencia_en_software_cad'] ?></td>
	<td><?= $r3['software_que_utiliza'] ?></td>
	<td><?= $r3['nombre_de_pagos'] ?></td>
	<td><?= $r3['tel_pagos'] ?></td>
	<td><?= $r3['mail_pagos'] ?></td>
	<td><?= $r3['notas'] ?></td>
	<td><?= $r3['asesor'] ?></td>
	<td><?= $r3['sistema_operativo'] ?></td>
	<td><?= $r3['modelado_de_objetos'] ?></td>
	<td><?= $r3['fecha_entrega_objetos'] ?></td>
	<td><?= $r3['puntos_interimodel'] ?></td>
	<!-- <td><?= $r3['fecha'] ?></td> -->
	<!-- <td><?= $r3['hora'] ?></td> -->

<?php

	$i3++;

	}

	/* Termina: Query #3*/

?>

		<!-- -->
		<!-- <td><?= $r1['estadodeventa'] ?></td> -->

	</tr>

<?php

	$i1++;

	}

?>