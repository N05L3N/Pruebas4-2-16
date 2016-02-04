<?php
#  include('inc/menu-superior.php');

	mysql_query ("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '".$usuario."' AND id = ".$id." ORDER BY id desc limit 0,1");
	mysql_query ("SET NAMES 'utf8'");
  
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
?>
<style>
	body {
		overflow-x:hidden;
		background-color: #fff;
	}
</style>
<div class="row">
	<div class="col-md-12">
		
<form action="iframe-cliente.php?<?= $id ?>" name="actualizar_cliente" method="post" style="background-color:white; margin-top:-70px;">
	<input type="hidden" value="<?= $id ?>" name="id">
	
<table width="100%" cellpadding="2">
	<tr>
		<td><b>Nombre Completo:</b> </td>
		<td><input type="text" name="nombre" class="form-control" placeholder="Nombres Completo" value="<?= $nombre ?>"></td>
		<td width="20"></td>
		<td><b>E-mail:</b></td>
		<td><input type="text" name="email" class="form-control" placeholder="Email" value="<?= $email ?>"></td>
	</tr>
	<tr>
		<td><b>Télefono:</b></td>
		<td><input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?= $telefono ?>"></td>
		<td></td>
		<td><b>Celular:</b></td>
		<td><input type="text" name="nombre_recomendador" class="form-control" placeholder="Celular" value="<?= $nombre_recomendador ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Profesión:</b></td>
		<td><input type="text" name="contacto2" class="form-control" placeholder="Profesión" value="<?= $contacto2 ?>"></td>
		<td></td>
		<td class="temporal"><b>Detalle Especialidad:</b></td>
		<td><input type="text" name="contacto3" class="form-control" placeholder="Detalle Especialidad" value="<?= $contacto3 ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Direccion:</b></td>
		<td><input type="text" name="direccion" class="form-control" placeholder="Direccion" value="<?= $direccion ?>"></td>
		<td></td>
		<td class="temporal"><b>Ciudad:</b></td>
		<td><input type="text" name="ciudad" class="form-control" placeholder="Ciudad" value="<?= $ciudad ?>"></td>
	</tr>
	<tr>
		<td><b>Pais:</b></td>
		<td><input type="text" name="pais" class="form-control" placeholder="Pais" value="<?= $pais ?>"></td>
		<td></td>
		<td class="temporal"><b>Estado:</b></td>
		<td><input type="text" name="estado" class="form-control" placeholder="Estado" value="<?= $estado ?>"></td>
	</tr>
	<tr>	
		<td class="temporal"><b>Medio:</b></td>
		<td><input type="text" name="medio" class="form-control" placeholder="Medio" value="<?= $medio ?>"></td>
		<td></td>
		<td class="temporal"><b>Giro:</b></td>
		<td><input type="text" name="giro" class="form-control" placeholder="Giro" value="<?= $giro ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>www:</b></td>
		<td><input type="text" name="comeqenatp" class="form-control" placeholder="Página web del cliente" value="<?= $comeqenatp ?>"></td>
		<td></td>
		<td class="temporal"><b>Puesto:</b></td>
		<td><input type="text" name="eqclosqcuenta" class="form-control" placeholder="Puesto" value="<?= $eqclosqcuenta ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Motivo de consulta:</b></td>
		<td><input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivo de consulta" value="<?= $motivodeconsulta ?>"></td>
		<td></td>
		<td class="temporal"><b>Empresa</b></td>
		<td><input type="text" name="empresa" class="form-control" placeholder="Empresa" value="<?= $empresa ?>"></td>
	</tr>
	<tr>
		<td><b>Interesado en:</b></td>
		<td><input type="text" name="equipodeinteres" class="form-control" placeholder="equipodeinteres" value="<?= $equipodeinteres ?>"></td>
		<td></td>
		<td><b>Registro de:</b></td>
		<td><?= $formulario ?></td>
	</tr>
</table>
<table width="100%">
	<tr>
		<td colspan="2">
			<b>Comentario:</b> <br>
			<textarea name="comentarios" class="form-control" rows="6" style="width:100%; height:100px; resize:none;"><?= $comentarios ?></textarea>
		</td>

	</tr>
</table>

<center>
<div style="width:200px;">
		<br>
		<input type="hidden" value="<?= $asignadoa ?>" name="Vendedor">
		<button class="btn btn-md btn-default btn-block" type="submit">Guardar Cambios</button> 
	</div>
</center>	
</form>

</div>
</div>