<div class="row">
	<div class="col-xs-4 col-sm-4 col-md-4">

		<form action="model/mc.termometro.php" method="post" id="verde">
			<input type="hidden" name="termometro" value="verde">
	
		<?php
			$termometro = $_SESSION["termometro"];

			$termometro_actual = '';
			
			if ($termometro == 'verde' OR $termometro == '') {
				$termometro_actual = 'btn-lg';
					$text = 'Seguimiento';
					$color = 'primary';
			}
			
			else {
				$text = 'Seguimiento';
				$color = 'default';
			}
			
			# echo '('.$termometro.'-'.$termometro_actual.'-'.$color.')';
		?>

			<button type="button" class="btn btn-<?= $color ?> btn-xs <?= $termometro_actual ?>" onclick="document.getElementById('verde').submit();"><!-- Por Cierre --> <?= $text ?></button>
		</form>
	
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4">

		<form action="model/mc.termometro.php" method="post" id="rojo">
			<input type="hidden" name="termometro" value="rojo">
		<?php
			if  ($termometro == 'rojo') {
				$termometro_actual = 'btn-lg';
					$text = 'Postventa';
					$color = 'primary';
			}
			else {
				$text = 'Postventa';
				$color = 'default';
			}
		?>
			<button type="button" class="btn btn-<?= $color ?> btn-xs <?= $termometro_actual ?>" onclick="document.getElementById('rojo').submit();"><!-- Por Cierre --> <?= $text ?></button>
		</form>
	
	</div>

	<div class="col-xs-4 col-sm-4 col-md-4">

		<form action="model/mc.termometro.php" method="post" id="detalles">
			<input type="hidden" name="termometro" value="detalles">
		<?php
			if  ($termometro == 'detalles') {
				$termometro_actual = 'btn-lg';
				$text = 'Detalles de Problemas';
				$color = 'primary';
			}
			else {
				$text = 'Detalles de Problemas';
				$color = 'default';
			}
		?>
			<button type="button" class="btn btn-<?= $color ?> btn-xs <?= $termometro_actual ?>" onclick="document.getElementById('detalles').submit();"><!-- Por Cierre --> <?= $text ?></button>
		</form>
	
	</div>
</div>