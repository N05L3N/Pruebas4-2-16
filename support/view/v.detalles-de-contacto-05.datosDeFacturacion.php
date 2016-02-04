<form method="post" id="form1" action="form-detalles-de-contacto.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th colspan="2">
						Datos de Facturación
					</th>
				</tr>
			</table>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<b>Razon Social:</b><input type="text" class="form-control" value="<?= $ddf_razon_social ?>" name="ddf_razon_social"><br>
		<b>RFC:</b><input type="text" class="form-control" value="<?= $ddf_rfc ?>" name="ddf_rfc"><br>
		<b>Calle:</b><input type="text" class="form-control" value="<?= $ddf_calle ?>" name="ddf_calle"><br>
		<b>No.Exterior:</b><input type="text" class="form-control" value="<?= $ddf_num_exterior ?>" name="ddf_num_exterior"><br>
		<b>No.Interior:</b><input type="text" class="form-control" value="<?= $ddf_num_interior ?>" name="ddf_num_interior"><br>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<b>Colonia:</b><input type="text" class="form-control" value="<?= $ddf_col ?>" name="ddf_col"><br>
		<b>Ciudad:</b><input type="text" class="form-control" value="<?= $ddf_ciudad ?>" name="ddf_ciudad"><br>
		<b>Estado:</b><input type="text" class="form-control" value="<?= $ddf_estado ?>" name="ddf_estado"><br>
		<b>CP:</b><input type="text" class="form-control" value="<?= $ddf_cp ?>" name="ddf_cp"><br>
		<b>Email para Facturación:</b><input type="text" class="form-control" value="<?= $ddf_email_para_facturacion ?>" name="ddf_email_para_facturacion"><br>
	</div>
</div>

	</div>
</div>
<input type="hidden" class="form-control" name="fechaasignacion" value="<?= $data_s_razon_social ?>">
<input type="hidden" class="form-control" name="fechaasignacion" value="<?= $data_s_rfc ?>">
<input type="hidden" class="form-control" name="fechaasignacion" value="<?= $data_s_domicilio_fiscal ?>">
<input type="hidden" class="form-control" name="fechaasignacion" value="<?= $contacto_ciudad ?>">
<input type="hidden" class="form-control" name="fechaasignacion" value="<?= $contacto_estado ?>">
<input type="hidden" class="form-control" name="fechaasignacion" value="<?= $data_s_cp ?>">	
</form>