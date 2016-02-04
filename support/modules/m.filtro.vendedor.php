<?php

	$filtrarporvendedor = ''.$_SESSION["filtrarporvendedor"].'';

?>

<script>

function SubmitFiltrarporvendedor() {
	document.getElementById("filtrarporvendedor").submit();
}

</script>

<form action="controller/c.filtro.vendedor.php" method="post" id="filtrarporvendedor">
	<div class="row">
		<div class="col-md-2">
			Filtrar por Vendedor
		</div>
		<div class="col-md-2">
			<select name="filtrarporvendedor" class="form-control">
				<option value="">Todos</option>
				<?php 
					include('model/m.select.vendedores-actuales.php')
				?>
			</select>
		</div>
		<div class="col-md-1">
			<button type="button" class="btn btn-default" aria-label="Left Align" onclick="javascript:SubmitFiltrarporvendedor();">
				<span class="glyphicon glyphicon-user" aria-hidden="true"> <span style="font-family:calibri;">Filtrar</span></span>
			</button>
		</div>
		<div class="col-md-7">
		</div>
	</div>
</form>