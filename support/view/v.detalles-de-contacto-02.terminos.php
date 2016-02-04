<form method="post" id="form1" action="form-detalles-de-contacto.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th colspan="2">
						Términos de venta
					</th>
				</tr>
				<tr>
					<th>
						Precio Total
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_precio_total ?>">
					</td>
				</tr>
				<tr>
					<th>
						Precio sin IVA
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_precio_sin_iva ?>">
					</td>
				</tr>
				<tr>
					<th>
						Forma de pago
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_forma_de_pago ?>">
					</td>
				</tr>
				<tr>
					<th>
						Mensualidades
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_cantidad_mensual ?>">
					</td>
				</tr>
				<tr>
					<th>
						Dias de pago
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="?">
					</td>
				</tr>
				<tr>
					<th>
						Cantidad mensual
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_cantidad_mensual ?>">
					</td>
				</tr>
				<tr>
					<th>
						Banco
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_banco_ ?>">
					</td>
				</tr>
				<tr>
					<th>
						Factura Avance
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_factura_avance ?>">
					</td>
				</tr>
				<tr>
					<th>
						Documentación
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="<?= $data_s_documentacion ?>">
					</td>
				</tr>
			</table>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th colspan="2">
						Como se logró la venta
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