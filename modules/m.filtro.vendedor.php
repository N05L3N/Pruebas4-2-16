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
		<div class="col-md-4">
			<h4>
				Filtrar por Vendedor
			</h4>
		</div>
		<div class="col-md-4">
			<select name="filtrarporvendedor" class="form-control">
				<option value="">Todos</option>
				<?php 
					include('model/m.select.vendedores-actuales.php')
				?>
			</select>
		</div>
		<div class="col-md-4">
			<button type="button" class="btn btn-default" aria-label="Left Align" onclick="javascript:SubmitFiltrarporvendedor();">
				<span class="glyphicon glyphicon-user" aria-hidden="true"> <span style="font-family:calibri;">Filtrar</span></span>
			</button>
		</div>
	</div>
</form>