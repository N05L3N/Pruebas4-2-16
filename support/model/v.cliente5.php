<?php
	# Incluye consulta para obtener: próxima llamada y estado de venta.
	include('controller/c.cliente.php');
?>

<form method="post" id="form1" action="cliente5" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
	
	<div class="row">
		<div class="col-xs-9 col-sm-9 col-md-9"></div>
		<div class="col-xs-3 col-sm-3 col-md-3">
			<table class="table table-striped table-bordered table-condensed">
				<caption>
					<strong>
						Fin de Licencia
					</strong>
				</caption>
				<tr>
					<td>
<?php

	if ($days > 10) {

?>

	<button type="button" class="btn btn-success" aria-label="Left Align">
		<span class="glyphicon glyphicon-dashboard" aria-hidden="true"> <?= $days ?> días</span>
	</button>

<?php
	}

	else if ($days < 10 AND $days > 0) {

?>

	<button type="button" class="btn btn-warning" aria-label="Left Align">
		<span class="glyphicon glyphicon-dashboard" aria-hidden="true"> <?= $days ?> días</span>
	</button>

<?php
	}

	else if ($days < 0) {

?>

	<button type="button" class="btn btn-danger" aria-label="Left Align">
		<span class="glyphicon glyphicon-dashboard" aria-hidden="true"> <?= $days ?> días</span>
	</button>

<?php	
	}
	
	else {
?>

	<button type="button" class="btn btn-primary" aria-label="Left Align">
		<span class="glyphicon glyphicon-dashboard" aria-hidden="true"> <?= $days ?> días</span>
	</button>

<?php
	}

?>							
					</td>
					<td>
						<input type="text" class="form-control" name="asignacion_fecha_final" value="2015-05-12">						
						<input type="text" class="form-control" name="id_seguimiento" value="<?= $_GET['id'] ?>">
					</td>
					<td>
						<input type="submit" class="form-control"  value="Actualizar">
					</td>
				</tr>
			</table>
		</div>
	</div>

</form>

<div role="tabpanel">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
		<li role="presentation"><a href="#terminosDeVenta" aria-controls="terminosDeVenta" role="tab" data-toggle="tab">Terminos de venta</a></li>
		<li role="presentation"><a href="#cobranza" aria-controls="cobranza" role="tab" data-toggle="tab">Cobranza</a></li>
		<li role="presentation"><a href="#usuarios" aria-controls="usuarios" role="tab" data-toggle="tab">Usuarios</a></li>
		<li role="presentation"><a href="#datosDeFacturacion" aria-controls="datosDeFacturacion" role="tab" data-toggle="tab">Datos de facturación</a></li>
		<li role="presentation"><a href="#referencias" aria-controls="referencias" role="tab" data-toggle="tab">Referencias</a></li>
		<li role="presentation"><a href="#historial" aria-controls="historial" role="tab" data-toggle="tab">Historial</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="general">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=general" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="terminosDeVenta">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=terminosDeVenta" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="cobranza">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=cobranza" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="usuarios">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=usuarios" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="datosDeFacturacion">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=datosDeFacturacion" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="referencias">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=referencias" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="historial">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=historial" name="primero" width="100%;" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
	</div>
</div>