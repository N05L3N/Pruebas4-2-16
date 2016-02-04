<?php

	#  include('inc/menu-superior.php');

	mysql_query ("SET NAMES 'utf8'");

	if ($_SESSION['tipo'] == 'administrador') {
		$result = mysql_query("SELECT * FROM ecrm_data_s WHERE id_seguimiento = ".$id." ORDER BY id_seguimiento desc limit 0,1");
		mysql_query ("SET NAMES 'utf8'");
	}
	else {
		$result = mysql_query("SELECT * FROM ecrm_data_s WHERE usuario = '".$usuario."' AND id_seguimiento = ".$id." ORDER BY id_seguimiento desc limit 0,1");
		mysql_query ("SET NAMES 'utf8'");
	}
	
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
    
		if ($i > 0) {
		}
$id_ecrm_data_s = $row['id_ecrm_data_s'];
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
$v1 = $row['v1'];
$v2 = $row['v2'];
$v3 = $row['v3'];
$v4 = $row['v4'];
$v5 = $row['v5'];
$v6 = $row['v6'];
$v7 = $row['v7'];
$v8 = $row['v8'];
$v9 = $row['v9'];
$v10 = $row['v10'];
$v11 = $row['v11'];
$v12 = $row['v12'];
$v13 = $row['v13'];
$v14 = $row['v14'];
$v15 = $row['v15'];
$v16 = $row['v16'];
$v17 = $row['v17'];
$v18 = $row['v18'];
$v19 = $row['v19'];
$v20 = $row['v20'];
$fecha = $row['fecha'];
$hora = $row['hora'];

	}
	$i++;

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$asignadoa' AND id_seguimiento = '$id' ORDER BY id_comentarios_v desc limit 0,1");
	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		$fechaproxima = $row_result3['fechaproxima'];
		$estadodeventa = $row_result3['estadodeventa'];
		$i_result3++; 
	} 

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima
	$result3 = mysql_query("SELECT * FROM ecrm_asignacion WHERE id_seguimiento = '$id' ORDER BY id_ecrm_asignacion desc limit 0,1");
	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		
			$asignacion_id_ecrm_asignacion = $row_result3['id_ecrm_asignacion'];
			$asignacion_id_seguimiento = $row_result3['id_seguimiento'];
			$asignacion_age = $row_result3['age'];
			$asignacion_administrador = $row_result3['administrador'];
			$asignacion_soporte = $row_result3['soporte'];
			$asignacion_vendedor = $row_result3['vendedor'];
			$asignacion_dualcore = $row_result3['dualcore'];
			$asignacion_producto = $row_result3['producto'];
			$asignacion_status = $row_result3['status'];
			$asignacion_licencia = $row_result3['licencia'];
			$asignacion_dias = $row_result3['dias'];
			$asignacion_proxima_llamada = $row_result3['proxima_llamada'];
			$asignacion_fecha_inicial = $row_result3['fecha_inicial'];
			$asignacion_fecha_final = $row_result3['fecha_final'];
			$asignacion_fecha_venta = $row_result3['fecha_venta'];
			$asignacion_monto_venta = $row_result3['monto_venta'];
			$asignacion_fecha_asignacion = $row_result3['fecha_asignacion'];
			$asignacion_hora_asignacion = $row_result3['hora_asignacion'];
			$asignacion_fecha = $row_result3['fecha'];

		$i_result3++; 
	}


	# Informacion de la tabla de Datos de Facturación
	$q4 = mysql_query("SELECT * FROM datos_de_facturacion WHERE id_seguimiento = '$id' ORDER BY id DESC limit 0,1");
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



?>
<style>
	body {
		overflow-x:hidden;
		background-color: #fff;
	}
</style>
<div class="row">
	<div class="col-md-12">
		
<form action="iframe-facturado.php?<?= $id ?>" name="actualizar_cliente" method="post" style="background-color:white; margin-top:-70px;">
	<input type="hidden" value="<?= $id ?>" name="id_seguimiento">

<script>
$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
$('#myTabs a:first').tab('show') // Select first tab
$('#myTabs a:last').tab('show') // Select last tab
$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>

<div>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terminos de Venta</a></li>
		<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Usuarios</a></li>
		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Datos de Facturación</a></li>
		<li role="presentation"><a href="#settings2" aria-controls="settings2" role="tab" data-toggle="tab">Referencias</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="home">
			<br>
			<?php include('v.iframe-facturado.01.php') ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="profile">
			<br>
			<?php include('v.iframe-facturado.02.php') ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="messages">
			<br>
			<?php include('v.iframe-facturado.03.php') ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="settings">
			<br>
			<?php include('v.iframe-facturado.04.php') ?>
		</div>
		<div role="tabpanel" class="tab-pane" id="settings2">
			<br>
			<?php include('v.iframe-facturado.05.php') ?>
		</div>
	</div>
</div>

<center>
	<div style="width:200px;">
		<br>
		<input type="hidden" value="<?= $asignadoa ?>" name="Vendedor">
		<input type="hidden" value="" name="activar">
		<input type="hidden" value="<?= $_SESSION['vendedor'] ?>" name="vendedor">
		<button class="btn btn-md btn-default btn-block" type="submit" onfocus="javascript:this.form.activar.value='ok';">Guardar Cambios</button> 
	</div>
</center>	

</form>

</div>
</div>