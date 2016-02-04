<?php 

	$rowid = $row['id'];

?>

<script>
	
function confirmar<?= $rowid ?>() {

	var r = confirm("¿Descartar Folio: #<?= $rowid ?>?");
	
	if (r == true) {

		document.getElementById ("confirmarparaeliminar<?= $rowid ?>").value = "Ok";

    	} 

    	else {

		document.getElementById ("confirmarparaeliminar<?= $rowid ?>").value = "";

    	}

}

</script>

<form action="panel.php" method="post" class="navbar-form navbar-right" role="form">
	
	<input class="form-control" type="hidden" value="" name="id_eliminar">
	<input class="form-control" type="hidden" value="" name="confirmarparaeliminar" id="confirmarparaeliminar<?= $rowid ?>">
	
	<button type="submit" class="btn btn-default btn-xs" onclick="javascript:confirmar<?= $rowid ?>();" onMouseOver="javascript:id_eliminar.value='<?= $rowid ?>';" alt="Eliminar Folio: <?= $rowid ?>" title="Eliminar Folio: <?= $rowid ?>" style="margin-top:-16px; margin-left:-5px; position:absolute;">
		<span class="glyphicon glyphicon-remove"></span>
	</button>

</form>