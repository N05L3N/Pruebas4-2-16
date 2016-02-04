<?php
	# Incluye consulta para obtener: próxima llamada y estado de venta.
	include('controller/c.cliente.php');

	if ($days > 10) {
		
		$color = 'success';

	}

	else if ($days < 10 AND $days > 0) {
		
		$color = 'warning';

	}

	else if ($days < 0) {

		$color = 'danger';

	}
	
	else {

		$color = 'primary';

	}

?>	

<style>

img.ui-datepicker-trigger {
	display: inline-block;
	float: right;
	margin-left: -30px;
	margin-top: 0px;
	position: absolute;
}
</style>

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
					<td style="width:25%;">
						<button type="button" class="btn btn-<?= $color ?>" aria-label="Left Align">
							<span class="glyphicon glyphicon-dashboard" aria-hidden="true"> <?= $days ?> días</span>
						</button>
					</td>
					<td style="width:50%;">
						<div class="input-group input-group-md" style="width:150px;">
							<input type="text" id="datepicker" name="asignacion_fecha_final" onlyread="onlyread" class="form-control">
						</div>
						<input type="hidden" class="form-control" name="id_seguimiento" value="<?= $_GET['id'] ?>">
					</td>
					<td style="width:25%;">
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
		<li role="presentation"><a href="#formulario" span data-toggle="modal" data-target="#myModal">Reporte de Actividad</a></li>
		<li role="presentation"><a href="#seguimientos" span data-toggle="modal" data-target="#myModal2">Calendarización de Seguimientos</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="general">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=general" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="terminosDeVenta">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=terminosDeVenta" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="cobranza">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=cobranza" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="usuarios">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=usuarios" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="datosDeFacturacion">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=datosDeFacturacion" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="referencias">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=referencias" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		<div role="tabpanel" class="tab-pane" id="historial">
			<iframe src="form-detalles-de-contacto?folio=<?= $id ?>&tab=historial" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
		</div>
		
		<div role="tabpanel" class="tab-pane" id="formulario">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3"></div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<iframe src="seguimientos.actualizar.soporte2?id=<?= $id ?>" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3"></div>
			</div>
		</div>

		<div role="tabpanel" class="tab-pane" id="seguimientos">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3"></div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<iframe src="seguimientos.actualizar.soporte.php?id=<?= $id ?>" name="primero" width="100%" height="600" frameborder="1" scrolling="no"></iframe>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3"></div>
			</div>
		</div>
		<div class="panel panel-default">
<div class="panel-heading"><span class="glyphicon glyphicon glyphicon-book" aria-hidden="true"></span> Historial</div>
<div class="panel-body">

<div style="width:100%;height:220px;overflow-y:scroll;overflow-x:hidden; font-size:12px;">
	

<?php
	
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE id_seguimiento = '$folio' ORDER BY id_comentarios_s desc limit 0,100");
	mysql_query ("SET NAMES 'utf8'");

	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) { 
		if ($i3 > 0) {
	}

	$fecharespuestaE = explode("-", $row3['fecharespuesta']);
	$fechaproximaE = explode("-", $row3['fechaproxima']);

?>

<?= $row3['comentariovendedor'] ?>
			<br />
			
			<ol class="breadcrumb">
  				<li><acronym title="Hora de Captura"><span class="glyphicon glyphicon-calendar"></span> <?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?> </acronym></li>
  				<li class="active"><acronym title="Hora de Captura"><span class="glyphicon glyphicon-time"></span> <?= $row3['horarespuesta'] ?></acronym></li>
  				<li><acronym title="Fecha Próxima"><span class="glyphicon glyphicon-calendar"></span> <?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?> </acronym></li>
			</ol>


<?php
	
	$_SESSION['datetime20'] = $row3['fecharespuesta'];
	
	$i3++; 
	
	}
	
	$usuario_vendedor = '';
	$asignacion_vendedor = '';

?>
			<div>
</div>
</div>



<!-- -->
	</div>
</div>

	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				<h4 class="modal-title" id="myModalLabel">Reporte de Actividad</h4>
			</div>
			<div class="modal-body">
				<iframe src="seguimientos.actualizar.soporte2?id=<?= $id ?>" name="primero" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
      			</div>
    		</div>
  	</div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
				<h4 class="modal-title" id="myModalLabel">Calendarización de Seguimientos</h4>
			</div>
			<div class="modal-body">
				<iframe src="seguimientos.actualizar.soporte?id=<?= $id ?>" name="primero" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
      			</div>
    		</div>
  	</div>
</div>