<?php

	$asignadoa = $_SESSION['asignadoa'];
	$estadodeventa = $_GET['estadodeventa'];
	$fechaproxima = $_GET['fechaproxima'];
	$fechaasignacion = $_GET['fechaasignacion'];
	$asignadoa = $_GET['asignadoa'];
	$fechaproximaE = explode("-", $fechaproxima);
	$fechaproxima = ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'';
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$horaServ = date(h);
	$hora = $horaServ - 7;
	#$hora = $horaServ;
	$minuto = date(i);

		if ($hora == '-5') {
			$hora = '7';
			$ampm = 'am';
		}

		else if ($hora == '-4') {
			$hora = '8';
			$ampm = 'am';
		}

		else if ($hora == '-3') {
			$hora = '9';
			$ampm = 'am';
		}

		else if ($hora == '-2') {
			$hora = '10';
			$ampm = 'am';
		}

		else if ($hora == '-1') {
			$hora = '11';
			$ampm = 'am';
		}

		else {
			
		}

		if ($hora == '5') {
			$dia = $dia - 1;
		}

	$fecharespuesta = ''.$ano.''.$mes.''.$dia.'';


	

?>
<div class="container-fluid">
	<input type="hidden" title="fechadiaprox" name="fechadiaprox" value="<?= $fechaproximaE[2] ?>">
	<input type="hidden" title="fechamesprox" name="fechamesprox" value="<?= $fechaproximaE[1] ?>">
	<input type="hidden" title="fechaanoprox" name="fechaanoprox" value="<?= $fechaproximaE[0] ?>">
	<input type="hidden" title="estadodeventa" name="estadodeventa" value="<?= $estadodeventa ?>">
	<input type="hidden" title="fechaasignacion" name="fechaasignacion" value="<?= $fechaasignacion ?>">
	<input type="hidden" title="asignadoa" name="asignadoa" value="<?= $asignadoa ?>">
	<input type="hidden" title="fechadia" name="fechadia" value="<?= $dia ?>">
	<input type="hidden" title="fechames" name="fechames" value="<?= $mes ?>">
	<input type="hidden" title="fechaano" name="fechaano" value="<?= $ano ?>">
	<input type="hidden" title="fcasignadoa" name="fcasignadoa" value="<?= $asignadoa ?>">
	<input type="hidden" title="tipodeseguimiento" name="tipodeseguimiento" value="admin">
	

<div class="row">
  	<div class="col-xs-12 col-sm-12 col-md-12">
  		<label><?= $obl ?><acronym title="<?= $asignadoa ?>">Comentarios de Seguimiento:</acronym></label>
  	</div>
  	<br>
</div>
<div class="row">
  	<div class="col-xs-12 col-sm-12 col-md-12">
  		<textarea name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:200px; resize: none;"><?= $POSTcomentariovendedor ?></textarea>
  	</div>
</div>

<br />

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit" class="btn btn-primary" tabindex="17">Guardar comentario</button>
	</div>
</div>

</div>