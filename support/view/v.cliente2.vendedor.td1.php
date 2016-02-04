<?php 
	
	$_SESSION["idedit"] = $_GET["id"];
	$idedit = $id;

	if ($termometro == 'detalles') {

?>
	
	<iframe src="seguimientos.actualizar.soporte2.php?id=<?= $id ?>&fechaasignacion=<?= $fechaasignacion ?>&fechaproxima=<?= $fechaproxima ?>&estadodeventa=<?= $estadodeventa ?>&asignadoa=<?= $asignadoa ?>" width="100%;" height="600" frameborder="no" scrolling="no"></iframe>

<?php
		
	}

	else {

?>

	<iframe src="seguimientos.actualizar-venta2.php?id=<?= $id ?>&fechaasignacion=<?= $fechaasignacion ?>&fechaproxima=<?= $fechaproxima ?>&estadodeventa=<?= $estadodeventa ?>&asignadoa=<?= $asignadoa ?>" width="100%;" height="600" frameborder="no" scrolling="no"></iframe>

<?php

	}

?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Folio: #<?php echo $idedit;?></h4>
			</div>
			<div class="modal-body">
				<iframe src="seguimientos.actualizar-venta2.php?id=<?= $id ?>&fechaasignacion=<?= $fechaasignacion ?>" width="100%;" height="400" frameborder="1" scrolling="no"></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>