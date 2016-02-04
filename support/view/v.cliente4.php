<?php
	# Incluye consulta para obtener: próxima llamada y estado de venta.
	include('controller/c.cliente.php');
?>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">
		
		<div class="row">
			<div class="col-md-4">
				<!--<a href="iframe-cliente.php?id=<?= $id ?>" target="primero">-->
				<a href="seguimientos.actualizar-venta4.php?id=<?= $id ?>&lateral=iframe-cliente" target="primero">
					<button type="button" class="btn btn-default btn-sm" style="width:130px;">
					 	<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar información
					</button>
				</a>
			</div>
			<div class="col-md-4">
				<!--<a href="iframe-calendario.php?id=<?= $id ?>" target="primero">-->
				<a href="seguimientos.actualizar-venta4.php?id=<?= $id ?>&lateral=iframe-calendario" target="primero">
					<button type="button" class="btn btn-default btn-sm" style="width:130px;">
					 	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Ver Calendario
					</button>
				</a>
			</div>
			<div class="col-md-4">
				<!--<a href="iframe-historial.php?id=<?= $id ?>" target="primero">-->
				<a href="seguimientos.actualizar-venta4.php?id=<?= $id ?>&lateral=iframe-historial" target="primero">
					<button type="button" class="btn btn-default btn-sm" style="width:130px;">
					 	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Historial
					</button>
				</a>
			</div>
		</div>

	</div>

	<div class="col-md-1"><h4>ID #<?= $id ?></h4></div>
	<div class="col-md-3"><h4>Proxima Llamada: <?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?></h4></div>
	<div class="col-md-3"><h4>Estado de la venta: <span class="label label-<?= $CRM_estadodeventa ?>"><?= $estadodeventa ?></span></h4></div>
</div>

<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-11">
		<iframe src="seguimientos.actualizar-venta4.php?id=<?= $id ?>" name="primero" width="100%;" height="600" frameborder="no" scrolling="no"></iframe>
	</div>
</div>