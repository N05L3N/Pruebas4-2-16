<?php
	
	if ($estadodeventa == 'Caliente' OR $estadodeventa == 'caliente') {
		$CRM_estadodeventa = 'danger';
	}
	else if ($estadodeventa == 'tibio') {
		$CRM_estadodeventa = 'warning';
	}
	else if ($estadodeventa == 'frio') {
		$CRM_estadodeventa = 'info';
	}
	else if ($estadodeventa == 'Facturado' OR $estadodeventa == 'facturado') {
		$CRM_estadodeventa = 'success';
	}
	else if ($estadodeventa == 'Pendiente') {
		$CRM_estadodeventa = 'default';
	}
	else  {
		$CRM_estadodeventa = 'default';
	}

?>
<tr>	
	<td>
		<a href="cliente.php?id=<?= $id_seguimiento ?>&vendedor=<?= $usuario ?>">
			<?= $id_seguimiento ?>
		</a>
	</td>
	<td>
		<?= $usuario ?>
	</td>
	<td>
		<?= $comentariovendedor ?>
	</td>
	<td>
		<div style="width:75px;">
			<small>
				<?= ''.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'' ?>
			</small>
		</div>
	</td>
	<td>
		<div style="width:75px;">
			<small>
				<?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?>
			</small>
		</div>
	</td>
	<td>
		<button type="button" class="btn btn-<?= $CRM_estadodeventa ?> btn-xs" style="width:80px;">
			<span style="text-transform:capitalize;">
				<?= $estadodeventa ?>
			</span>
		</button>
	</td>
</tr>