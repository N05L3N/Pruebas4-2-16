<form method="post" id="form1" action="form-detalles-de-contacto.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th colspan="2">
						Datos del usuario 1
					</th>
				</tr>
				<tr>
					<th>
						Nombre
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_nombre_de_usuario ?>">
					</td>
				</tr>
				<tr>
					<th>
						Mail Usuario
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_email_de_usuario ?>">
					</td>
				</tr>
				<tr>
					<th>
						Teléfono
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_tel_usuario ?>">
					</td>
				</tr>
				<tr>
					<th>
						Software que usa
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_software_que_utiliza ?>">
					</td>
				</tr>
				<tr>
					<th colspan="2">
						Datos del usuario 2
					</th>
				</tr>
				<tr>
					<th>
						Nombre
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_nombre_de_usuario ?>2">
					</td>
				</tr>
				<tr>
					<th>
						Mail Usuario
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_email_de_usuario ?>2">
					</td>
				</tr>
				<tr>
					<th>
						Teléfono
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_tel_usuario ?>2">
					</td>
				</tr>
				<tr>
					<th>
						Software que usa
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_software_que_utiliza ?>2">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2">
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