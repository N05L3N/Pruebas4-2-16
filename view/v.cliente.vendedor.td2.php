<form action="cliente.php?<?= $id ?>" name="actualizar_cliente" method="post">
	<input type="hidden" value="<?= $id ?>" name="id">
	<br />
	<?php include('view/v.cliente.vendedor.td2_1.php') ?>
	<div style="width:200px;">
		<br>
		<input type="hidden" value="<?= $asignadoa ?>" name="Vendedor">
		<button class="btn btn-md btn-primary btn-block" type="submit">Confirmar Cambio</button> 
	</div>
</form>

<!--
Información de colores
<td style="background-color:#c6efce;">
if ($estadodeventa == 'si')
if ($estadodeventa == 'no')
if ($estadodeventa == 'En proceso')
if ($estadodeventa == '')
<td style="background-color:#ffc7ce;"><b>No se vendio</b>
<td style="background-color:#ffeb9c;"><b>En proceso</b>
-->