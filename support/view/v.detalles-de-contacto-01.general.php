<form method="post" id="form1" action="form-detalles-de-contacto.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th colspan="2">
						Datos de Contacto
					</th>
				</tr>
				<tr>
					<th>
						Nombre
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_nombre ?>">
					</td>
				</tr>
				<tr>
					<th>
						Organización
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_empresa ?>">
					</td>
				</tr>
				<tr>
					<th>
						Cargo
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_eqclosqcuenta ?>">
					</td>
				</tr>
				<tr>
					<th>
						Detalle especialidad
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_contacto3 ?>">
					</td>
				</tr>
				<tr>
					<th colspan="2">
						Números de Teléfono
					</th>
				</tr>
				<tr>
					<th>
						Teléfono
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_telefono ?>">
					</td>
				</tr>
				<tr>
					<th>
						Teléfono móvil
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_nombre_recomendador ?>">
					</td>
				</tr>
				<tr>
					<th>
						Correo electrónico
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_email ?>">
					</td>
				</tr>
				<tr>
					<th>
						Página Web
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $contacto_comeqenatp ?>">
					</td>
				</tr>
				<tr>
					<th colspan="2">
						Info de venta
					</th>
				</tr>
				<tr>
					<th>
						Software
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $asignacion_producto ?>">
					</td>
				</tr>
				<tr>
					<th>
						Número de serie
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_numero_de_serie ?>">
					</td>
				</tr>
				<tr>
					<th>
						Versión
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_version ?>">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th>
						Vendedor
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $asignacion_vendedor ?>" readonly="readonly">
					</td>
				</tr>
				<tr>
					<th>
						Fecha de Venta
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $asignacion_fecha_venta ?>">
					</td>
				</tr>
				<tr>
					<th>
						Finaliza Soporte
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $asignacion_fecha_final ?>">
					</td>
				</tr>
				<tr>
					<th>
						Duración de Soporte
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $asignacion_licencia ?>">
					</td>
				</tr>
				<tr>
					<th>
						Estatus
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $asignacion_status ?>">
					</td>
				</tr>
				<tr>
					<th colspan="2">
						Notas
					</th>
				</tr>
				<tr>
					<td colspan="2">
						<textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<!--
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<input type="hidden" title="fechaasignacion" name="fechaasignacion" value="<?= $fechaasignacion ?>">
			<button type="submit" class="btn btn-default" tabindex="17">Aceptar</button>
		</div>
	</div>
	-->
</form>