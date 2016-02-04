<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<b>.Precio Total:</b><input type="text" class="form-control" value="<?= $precio_total ?>" name="precio_total"><br>
		<b>Precio sin IVA:</b><input type="text" class="form-control" value="<?= $precio_sin_iva ?>" name="precio_sin_iva"><br>
		<b>Forma de pago:</b><input type="text" class="form-control" value="<?= $forma_de_pago ?>" name="forma_de_pago"><br>
		<b>Cantidad Mensual:</b><input type="text" class="form-control" value="<?= $cantidad_mensual ?>" name="cantidad_mensual"><br>
		<b>Banco:</b><input type="text" class="form-control" value="<?= $banco_ ?>" name="banco_"><br>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<b>Factura Avance:</b><input type="text" class="form-control" value="<?= $factura_avance ?>" name="factura_avance"><br>
		<b>Documentación:</b><input type="text" class="form-control" value="<?= $documentacion ?>" name="documentacion"><br>

		<b>Mensualidades:</b><input type="text" class="form-control" value="<?= $v2 ?>" name="v2"><br>
		<b>Días de pago:</b>
		
		<select name="v3" class="form-control">
			<option value=""></option>
			
			<?php
				
				if ($v3 == '1') {

					 echo '<option value="1" selected>1</option>';
					 echo '<option value="15">15</option>';

				}

				else if ($v3 == '15') {

					echo '<option value="1">1</option>';
					echo '<option value="15" selected>15</option>';

				}

				else {

				}

			?>
			
		</select>

		<!-- -->
		<br>
<script src="http://kumasoftware.com/ajax/ajax.script.js"></script>

<div class="form-style" id="contact_form">
<div id="contact_results"></div>
<div id="contact_body">
<input type="hidden" value="name" name="name" id="name" />
<input type="hidden" value="<?= $reportedenuevaventausuario ?>amariscal@kumasoftware.com" name="email" />
<input type="hidden" value="phone1" name="phone1"/>
<input type="hidden" value="phone2" name="phone2" />
<input type="hidden" value="Reporte de nueva venta" name="subject" />
<input type="hidden" value="PRUEBA" name="message" id="message" />

<input type="hidden" value="PRUEBA<?= $reportedenuevaventanombredelcliente ?>" name="reportedenuevaventanombredelcliente" id="reportedenuevaventanombredelcliente"/>
<input type="hidden" value="PRUEBA<?= $reportedenuevaventaempresa ?>" name="reportedenuevaventaempresa" id="reportedenuevaventaempresa"/>
<input type="hidden" value="PRUEBA" name="reportedenuevaventasoftware" id="reportedenuevaventasoftware"/>
<input type="hidden" value="PRUEBA" name="reportedenuevaventanumerodeserie" id="reportedenuevaventanumerodeserie"/>
<input type="hidden" value="PRUEBA" name="reportedenuevaventafacturaavance" id="reportedenuevaventafacturaavance"/>

<button type="button" class="btn btn-warning" aria-label="Left Align" id="submit_btn">
	<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Reporte de nueva venta
</button>
</div>
</div>
		<!-- -->
	</div>
</div>