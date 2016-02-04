<?php
	
	$id = $_GET['id'];
	$result = mysql_query("SELECT * FROM contacto WHERE id = ".$id." ORDER BY id desc limit 0,1");
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

?>
<table width="100%">
	<tr>
		<td><b>Nombre Completo:</b> </td>
		<td><input type="text" name="nombre" class="form-control" placeholder="Nombres Completo <?= $id ?>" value="<?= $nombre ?>"></td>
	</tr>
	<tr>
		<td><b>E-mail:</b></td>
		<td><input type="text" name="email" class="form-control" placeholder="Email" value="<?= $email ?>"></td>
	</tr>
	<tr>
		<td><b>Télefono:</b></td>
		<td>
			<table>
				<tr>
					<td width="70%"><input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?= $telefono ?>"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td><b>Celular:</b></td>
		<td>
			<table>
				<tr>
					<td width="70%"><input type="text" name="nombre_recomendador" class="form-control" placeholder="Celular" value="<?= $nombre_recomendador ?>"></td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td class="temporal"><b>Profesión:</b></td>
		<td><input type="text" name="contacto2" class="form-control" placeholder="Profesión" value="<?= $contacto2 ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Detalle Especialidad:</b></td>
		<td><input type="text" name="contacto3" class="form-control" placeholder="Detalle Especialidad" value="<?= $contacto3 ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Direccion:</b></td>
		<td><input type="text" name="direccion" class="form-control" placeholder="Direccion" value="<?= $direccion ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Ciudad:</b></td>
		<td><input type="text" name="ciudad" class="form-control" placeholder="Ciudad" value="<?= $ciudad ?>"></td>
	</tr>



	<tr>
		<td><b>Pais:</b></td>
		<td><input type="text" name="pais" class="form-control" placeholder="Pais" value="<?= $pais ?>"></td>
	</tr>




	<tr>
		<td class="temporal"><b>Estado:</b></td>
		<td><input type="text" name="estado" class="form-control" placeholder="Estado" value="<?= $estado ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Medio:</b></td>
		<td><input type="text" name="medio" class="form-control" placeholder="Medio" value="<?= $medio ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Giro:</b></td>
		<td><input type="text" name="giro" class="form-control" placeholder="Giro" value="<?= $giro ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>www:</b></td>
		<td><input type="text" name="comeqenatp" class="form-control" placeholder="Página web del cliente" value="<?= $comeqenatp ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Puesto:</b></td>
		<td><input type="text" name="eqclosqcuenta" class="form-control" placeholder="Puesto" value="<?= $eqclosqcuenta ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Motivo de consulta:</b></td>
		<td><input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivo de consulta" value="<?= $motivodeconsulta ?>"></td>
	</tr>
	<tr>
		<td class="temporal"><b>Empresa</b></td>
		<td><input type="text" name="empresa" class="form-control" placeholder="Empresa" value="<?= $empresa ?>"></td>
	</tr>
<!--
<tr>
		<td><b>Fecha:</b></td>
		<td><input type="text" name="fecha" class="form-control" placeholder="fecha" readonly="readonly" value="<?= $fecha ?>"></td>
	</tr>
-->
	<tr>
		<td><b>Comentario:</b></td>
		<td>
			<!--
				<input type="text" name="comentarios" class="form-control" placeholder="comentarios" value="<?= $comentarios ?>">
			-->
			<textarea name="comentarios" class="form-control" rows="6" style="width:100%; height:150px; resize:no;"><?= $comentarios ?></textarea>
		</td>

	</tr>
	<tr>
		<td><b>Interesado en:</b></td>
		<td><input type="text" name="equipodeinteres" class="form-control" placeholder="equipodeinteres" value="<?= $equipodeinteres ?>"></td>
	</tr>
	<tr>
		<td>
<?php
if ($formulario == 'RYG' OR $formulario == 'RYG1') {
?>
<b>Registro de:</b> Recomienda y Gana
<br />
Factura: <b><?= $numerodefactura ?></b>
<br />
<b>Asignado a:</b><?= $asignadoa ?>
<br />
<i><?= $comentariovendedor ?></i>
<?php
}
else {
?>
<b>Registro de:</b> Seguimiento
<?php    
}
?>
</td>
</tr>
</table>