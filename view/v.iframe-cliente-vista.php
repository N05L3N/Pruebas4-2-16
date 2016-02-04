<?php
#  include('inc/menu-superior.php');

	
	$result = mysql_query("SELECT * FROM contacto WHERE id = ".$id." ORDER BY id desc limit 0,1");
	
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
    
		if ($i > 0) {
		}

		$id = $row['id'];
		$nombre = ''.$row['nombre'].'';
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
		$comentariovendedor = $row['comentariovendedor'];

		$telefono = $row['telefono'];
		$Etelefono = substr($telefono, 0, 75);
		$telefono = ''.$Etelefono['0'].$Etelefono['1'].$Etelefono['2'].' '.$Etelefono['3'].$Etelefono['4'].$Etelefono['5'].' '.$Etelefono['6'].$Etelefono['7'].' '.$Etelefono['8'].$Etelefono['9'].' '.$Etelefono['10'].$Etelefono['11'].' '.$Etelefono['12'].$Etelefono['13'].' '.$Etelefono['14'].$Etelefono['15'].' '.$Etelefono['16'].$Etelefono['17'].' '.$Etelefono['18'].$Etelefono['19'].' '.$Etelefono['20'].$Etelefono['21'].' '.$Etelefono['22'].$Etelefono['23'].' '.$Etelefono['24'].$Etelefono['25'].'';

		$nombre_recomendador = $row['nombre_recomendador'];
		$Ecelular = substr($nombre_recomendador, 0, 50);
		$nombre_recomendador = ''.$Ecelular['0'].$Ecelular['1'].$Ecelular['2'].' '.$Ecelular['3'].$Ecelular['4'].$Ecelular['5'].' '.$Ecelular['6'].$Ecelular['7'].' '.$Ecelular['8'].$Ecelular['9'].' '.$Ecelular['10'].$Ecelular['11'].' '.$Ecelular['12'].$Ecelular['13'].' '.$Ecelular['14'].$Ecelular['15'].' '.$Ecelular['16'].$Ecelular['17'].' '.$Ecelular['18'].$Ecelular['19'].'';
		
	}
	$i++;

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima
	
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$asignadoa' AND id_seguimiento = '$id' ORDER BY id_comentarios_v desc limit 0,1");
	mysql_query ("SET NAMES 'utf8'");

	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		$fechaproxima = $row_result3['fechaproxima'];
		$estadodeventa = $row_result3['estadodeventa'];
		$i_result3++; 
	}      
?>
<style>
	body {
		overflow-x:hidden;
		background-color: #fff;
		margin-left: 0;
		margin-top: 0;
	}
</style>

<table class="table table-bordered table-striped table-condensed" style="width:100%; margin-top:-60px;">
	<tr>
		<th style="width:30%;">Nombre Completo:</th>
		<td style="width:70%;"><?= $nombre ?></td>
	</tr>
	<tr>
		<th>E-mail:</th>
		<td><?= $email ?></td>
	</tr>
	<tr>
		<th>Télefono:</th>
		<td>
			<ol class="breadcrumb" style="margin:0; padding:0;">
				<li>  				
  					<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
  					.<?= $telefono ?>
  				</li>
  				<li class="active">
  					<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
  					<?= $nombre_recomendador ?>	
  				</li>
			</ol>
		</td>
	</tr>
	<tr>
		<th>Profesión:</th>
		<td><?= $contacto2 ?> (<?= $contacto3 ?>)</td>
	</tr>
	<tr>
		<th>Direccion:</th>
		<td>
			<?= $direccion ?>
			<br>
			<small>Pais: <?= $pais ?>, Estado: <?= $estado ?>, Ciudad: <?= $ciudad ?></small>
		</td>
	</tr>
	<tr>
		<th>Medio:</th>
		<td><?= $medio ?></td>
	</tr>
	<tr>
		<th>Giro:</th>
		<td><?= $giro ?></td>
	</tr>
	<tr>
		<th>www:</th>
		<td><?= $comeqenatp ?></td>
	</tr>
	<tr>
		<th>Motivo de consulta:</th>
		<td><?= $motivodeconsulta ?></td>
	</tr>
	<tr>
		<th>Empresa</th>
		<td><?= $empresa ?> (<?= $eqclosqcuenta ?>)</td>
	</tr>
	<tr>
		<th>Comentario:</th>
		<td><?= $comentarios ?></td>
	</tr>
	<tr>
		<th>Interesado en:</th>
		<td><?= $equipodeinteres ?></td>
	</tr>
	<tr>
		<th>Registro de:</th>
		<td><?= $formulario ?></td>
	</tr>
</table>