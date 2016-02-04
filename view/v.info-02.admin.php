<tr>
	<td><?= $id ?></td>
	<td><?= $nombre ?></td>
	<td><?= $contacto2 ?></td>
	<td><?= $contacto3 ?></td>
	<td><?= $direccion ?></td>
	<td><?= $ciudad ?></td>
	<td><?= $pais ?></td>
	<td><?= $estado ?></td>
	<td><?= $lada ?></td>
	<td><?= $telefono ?></td>
	<td><?= $email ?></td>
	<td><?= $medio ?></td>
	<td><?= $giro ?></td>
	<td><?= $comentarios ?></td>
	<td><?= $fecha ?></td>
	<td><?= $Hora ?></td>
	<td><?= $formulario ?></td>
	<td><?= $equipodeinteres ?></td>
	<td><?= $comeqenatp ?></td>
	<td><?= $eqclosqcuenta ?></td>
	<td><?= $antacteq ?></td>
	<td><?= $escliente ?></td>
	<td><?= $numerodecliente ?></td>
	<td><?= $motivodeconsulta ?></td>
	<td><?= $empresa ?></td>
	<td><?= $nombre_recomendador ?></td>
	<td><?= $sucursal_recomendador ?></td>
	<td><?= $comentario_vendedor ?></td>
	<td><?= $asignadoa ?></td>
	<td><?= $fechadecontacto ?></td>
	<td><?= $fechaasignacion ?></td>
	<td><?= $fechaventa ?></td>
	<td><?= $estadodeventa ?></td>
	<td><?= $numerodefactura ?></td>
	<td><?= $usuario ?></td>
	<td>
		<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">

<?php

	$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_comentarios_v = '$id' ORDER BY id_comentarios_v DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result)) {
			if ($i_nombre > 0) {}

				$id_comentarios_v = $row_nombre['id_comentarios_v'];
				$id_seguimiento = $row_nombre['id_seguimiento'];
				$usuario = $row_nombre['usuario'];
				$termometro = $row_nombre['termometro'];
				$estadodeventa = $row_nombre['estadodeventa'];
				$comentariovendedor = $row_nombre['comentariovendedor'];
				$factura = $row_nombre['factura'];
				$fechaasignacion = $row_nombre['fechaasignacion'];
				$horaasignacion = $row_nombre['horaasignacion'];
				$fecharespuesta = $row_nombre['fecharespuesta'];
				$horarespuesta = $row_nombre['horarespuesta'];
				$fechaproxima = $row_nombre['fechaproxima'];
?>
	
	
	<tr>
		<td>Id_comentarios_v</td>
		<td>Id_seguimiento</td>
		<td>Usuario</td>
		<td>Termometro</td>
		<td>Estadodeventa</td>
		<td>Comentariovendedor</td>
		<td>Factura</td>
		<td>Fechaasignacion</td>
		<td>Horaasignacion</td>
		<td>Fecharespuesta</td>
		<td>Horarespuesta</td>
		<td>Fechaproxima</td>
	</tr>
	<tr>
		<td><?= $id_comentarios_v ?></td>
		<td><?= $id_seguimiento ?></td>
		<td><?= $usuario ?></td>
		<td><?= $termometro ?></td>
		<td><?= $estadodeventa ?></td>
		<td><?= $comentariovendedor ?></td>
		<td><?= $factura ?></td>
		<td><?= $fechaasignacion ?></td>
		<td><?= $horaasignacion ?></td>
		<td><?= $fecharespuesta ?></td>
		<td><?= $horarespuesta ?></td>
		<td><?= $fechaproxima ?></td>
	</tr>


<?php
		$i_nombre++;

		}

?>

		</table>
	</td>
	<td>
		<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">

<?php

	$q2 = mysql_query("SELECT * FROM ecrm_data_s WHERE id_seguimiento = '$id' ORDER BY id_ecrm_data_s DESC limit 0,1");
	$i2 = 0;
		while ($r2 = mysql_fetch_array($q2)) {
			if ($i2 > 0) {}

				$ecrm_data_s = $r2['ecrm_data_s'];
				$id_seguimiento = $r2['id_seguimiento'];
				$usuario = $r2['usuario'];
				$software = $r2['software'];
				$version = $r2['version'];
				$numero_de_serie = $r2['numero_de_serie'];
				$codigos_de_activacion = $r2['codigos_de_activacion'];
				$precio_total = $r2['precio_total'];
				$precio_sin_iva = $r2['precio_sin_iva'];
				$forma_de_pago = $r2['forma_de_pago'];
				$cantidad_mensual = $r2['cantidad_mensual'];
				$banco_ = $r2['banco_'];
				$factura_avance = $r2['factura_avance'];
				$documentacion = $r2['documentacion'];
				$razon_social = $r2['razon_social'];
				$rfc = $r2['rfc'];
				$domicilio_fiscal = $r2['domicilio_fiscal'];
				$cp = $r2['cp'];
				$ref_nombre1 = $r2['ref_nombre1'];
				$ref_tel1 = $r2['ref_tel1'];
				$ref_mail1 = $r2['ref_mail1'];
				$ref_parentezco1 = $r2['ref_parentezco1'];
				$ref_nombre2 = $r2['ref_nombre2'];
				$ref_tel2 = $r2['ref_tel2'];
				$ref_mail2 = $r2['ref_mail2'];
				$ref_parentezco2 = $r2['ref_parentezco2'];
				$nombre_de_usuario = $r2['nombre_de_usuario'];
				$email_de_usuario = $r2['email_de_usuario'];
				$tel_usuario = $r2['tel_usuario'];
				$experiencia_en_software_cad = $r2['experiencia_en_software_cad'];
				$software_que_utiliza = $r2['software_que_utiliza'];
				$nombre_de_pagos = $r2['nombre_de_pagos'];
				$tel_pagos = $r2['tel_pagos'];
				$mail_pagos = $r2['mail_pagos'];
				$notas = $r2['notas'];
				$asesor = $r2['asesor'];
				$sistema_operativo = $r2['sistema_operativo'];
				$modelado_de_objetos = $r2['modelado_de_objetos'];
				$fecha_entrega_objetos = $r2['fecha_entrega_objetos'];
				$puntos_interimodel = $r2['puntos_interimodel'];
				$v1 = $r2['v1'];
				$v2 = $r2['v2'];
				$v3 = $r2['v3'];
				$v4 = $r2['v4'];
				$v5 = $r2['v5'];
				$v6 = $r2['v6'];
				$v7 = $r2['v7'];
				$v8 = $r2['v8'];
				$v9 = $r2['v9'];
				$v10 = $r2['v10'];
				$v11 = $r2['v11'];
				$v12 = $r2['v12'];
				$v13 = $r2['v13'];
				$v14 = $r2['v14'];
				$v15 = $r2['v15'];
				$v16 = $r2['v16'];
				$v17 = $r2['v17'];
				$v18 = $r2['v18'];
				$v19 = $r2['v19'];
				$v20 = $r2['v20'];
				$fecha = $r2['fecha'];
				$hora = $r2['hora'];

?>
	
	<tr>
		<th>ecrm_data_s</th>
		<th>id_seguimiento</th>
		<th>usuario</th>
		<th>software</th>
		<th>version</th>
		<th>numero_de_serie</th>
		<th>codigos_de_activacion</th>
		<th>precio_total</th>
		<th>precio_sin_iva</th>
		<th>forma_de_pago</th>
		<th>cantidad_mensual</th>
		<th>banco_</th>
		<th>factura_avance</th>
		<th>documentacion</th>
		<th>razon_social</th>
		<th>rfc</th>
		<th>domicilio_fiscal</th>
		<th>cp</th>
		<th>ref_nombre1</th>
		<th>ref_tel1</th>
		<th>ref_mail1</th>
		<th>ref_parentezco1</th>
		<th>ref_nombre2</th>
		<th>ref_tel2</th>
		<th>ref_mail2</th>
		<th>ref_parentezco2</th>
		<th>nombre_de_usuario</th>
		<th>email_de_usuario</th>
		<th>tel_usuario</th>
		<th>experiencia_en_software_cad</th>
		<th>software_que_utiliza</th>
		<th>nombre_de_pagos</th>
		<th>tel_pagos</th>
		<th>mail_pagos</th>
		<th>notas</th>
		<th>asesor</th>
		<th>sistema_operativo</th>
		<th>modelado_de_objetos</th>
		<th>fecha_entrega_objetos</th>
		<th>puntos_interimodel</th>
		<th>v1</th>
		<th>v2</th>
		<th>v3</th>
		<th>v4</th>
		<th>v5</th>
		<th>v6</th>
		<th>v7</th>
		<th>v8</th>
		<th>v9</th>
		<th>v10</th>
		<th>v11</th>
		<th>v12</th>
		<th>v13</th>
		<th>v14</th>
		<th>v15</th>
		<th>v16</th>
		<th>v17</th>
		<th>v18</th>
		<th>v19</th>
		<th>v20</th>
		<th>fecha</th>
		<th>hora</th>
	</tr>
	<tr>
		<td><?= $ecrm_data_s ?></td>
		<td><?= $id_seguimiento ?></td>
		<td><?= $usuario ?></td>
		<td><?= $software ?></td>
		<td><?= $version ?></td>
		<td><?= $numero_de_serie ?></td>
		<td><?= $codigos_de_activacion ?></td>
		<td><?= $precio_total ?></td>
		<td><?= $precio_sin_iva ?></td>
		<td><?= $forma_de_pago ?></td>
		<td><?= $cantidad_mensual ?></td>
		<td><?= $banco_ ?></td>
		<td><?= $factura_avance ?></td>
		<td><?= $documentacion ?></td>
		<td><?= $razon_social ?></td>
		<td><?= $rfc ?></td>
		<td><?= $domicilio_fiscal ?></td>
		<td><?= $cp ?></td>
		<td><?= $ref_nombre1 ?></td>
		<td><?= $ref_tel1 ?></td>
		<td><?= $ref_mail1 ?></td>
		<td><?= $ref_parentezco1 ?></td>
		<td><?= $ref_nombre2 ?></td>
		<td><?= $ref_tel2 ?></td>
		<td><?= $ref_mail2 ?></td>
		<td><?= $ref_parentezco2 ?></td>
		<td><?= $nombre_de_usuario ?></td>
		<td><?= $email_de_usuario ?></td>
		<td><?= $tel_usuario ?></td>
		<td><?= $experiencia_en_software_cad ?></td>
		<td><?= $software_que_utiliza ?></td>
		<td><?= $nombre_de_pagos ?></td>
		<td><?= $tel_pagos ?></td>
		<td><?= $mail_pagos ?></td>
		<td><?= $notas ?></td>
		<td><?= $asesor ?></td>
		<td><?= $sistema_operativo ?></td>
		<td><?= $modelado_de_objetos ?></td>
		<td><?= $fecha_entrega_objetos ?></td>
		<td><?= $puntos_interimodel ?></td>
		<td><?= $v1 ?></td>
		<td><?= $v2 ?></td>
		<td><?= $v3 ?></td>
		<td><?= $v4 ?></td>
		<td><?= $v5 ?></td>
		<td><?= $v6 ?></td>
		<td><?= $v7 ?></td>
		<td><?= $v8 ?></td>
		<td><?= $v9 ?></td>
		<td><?= $v10 ?></td>
		<td><?= $v11 ?></td>
		<td><?= $v12 ?></td>
		<td><?= $v13 ?></td>
		<td><?= $v14 ?></td>
		<td><?= $v15 ?></td>
		<td><?= $v16 ?></td>
		<td><?= $v17 ?></td>
		<td><?= $v18 ?></td>
		<td><?= $v19 ?></td>
		<td><?= $v20 ?></td>
		<td><?= $fecha ?></td>
		<td><?= $hora ?></td>
	</tr>


<?php
		$i2++;

		}

?>

		</table>
	</td>
	<!--
	<td>
		<span style="width:10px; height:10px; background-color:RED;">s</span>
		<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">

<?php

	$q2 = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE id_seguimiento = '$id' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i2 = 0;
		while ($r2 = mysql_fetch_array($q2)) {
			if ($i2 > 0) {}

				$id_seguimiento_tipo = $r2['id_seguimiento_tipo'];
				$id_seguimiento = $r2['id_seguimiento'];
				$usuario = $r2['usuario'];
				$tipo = $r2['tipo'];
				$t1 = $r2['t1'];
				$t2 = $r2['t2'];
				$t3 = $r2['t3'];
				$t4 = $r2['t4'];
				$t5 = $r2['t5'];
				$t6 = $r2['t6'];
				$t7 = $r2['t7'];
				$fecha = $r2['fecha'];
?>
	
	<tr>
		<th>Id_seguimiento_tipo</th>
		<th>Id_seguimiento</th>
		<th>Usuario</th>
		<th>Tipo</th>
		<th>T1</th>
		<th>T2</th>
		<th>T3</th>
		<th>T4</th>
		<th>T5</th>
		<th>T6</th>
		<th>T7</th>
		<th>Fecha</th>
	</tr>
	<tr>
		<td><?= $id_seguimiento_tipo ?></td>
		<td><?= $id_seguimiento ?></td>
		<td><?= $usuario ?></td>
		<td><?= $tipo ?></td>
		<td><?= $t1 ?></td>
		<td><?= $t2 ?></td>
		<td><?= $t3 ?></td>
		<td><?= $t4 ?></td>
		<td><?= $t5 ?></td>
		<td><?= $t6 ?></td>
		<td><?= $t7 ?></td>
		<td><?= $fecha ?></td>
	</tr>


<?php
		$i2++;

		}

?>

		</table>
	</td>
-->
</tr>