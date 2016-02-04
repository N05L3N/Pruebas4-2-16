<form method="post" id="form1" action="form-detalles-de-contacto.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	<div class="row">
		<div class="col-xs-10 col-sm-10 col-md-10">
			<table class="table table-striped table-bordered table-condensed">
				<tr>
					<th>
						
					</th>
					<th>
						Fecha
					</th>
					<th>
						Cantidad
					</th>
					<th>
						Fac o Rem
					</th>
					<th>
						Notas
					</th>
				</tr>
				<?php
					for ($i=1; $i < 13; $i++) { 
						
					
				?>
				<tr>
					<th>
						Pago <?= $i ?>:
					</th>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="">
					</td>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="">
					</td>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="">
					</td>
					<td>
						<input type="text" class="form-control" name="fechaasignacion" value="">
					</td>
				</tr>
				<?php

					}

				?>
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