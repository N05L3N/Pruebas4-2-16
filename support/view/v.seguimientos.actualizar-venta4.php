<?php

	$trash = '';
	$dte = date(ymdhis);  
	$h0ra = date(h);
	# $h0ra++;
	$minut0 = date(i);
	$pemeoaeme = date(a); 
	$dte2 = ''.$h0ra.':'.$minut0.' '.$pemeoaeme.'';

	$id = $_GET['id'];
	$lateral = $_GET['lateral'];
	$tipo = $_SESSION['tipo'];

	if ($lateral == '') {
		$lateral = 'iframe-cliente-vista';
	}
	else {

	}

?>

<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<iframe src="<?= $lateral ?>.php?id=<?= $id ?>" width="100%;" height="600" frameborder="no" overflow-y="scroll" overflow-x="hidden"></iframe>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<form method="post" id="form1" action="seguimientos.actualizar-venta4.php" onSubmit="return validarSeguimiento(this)" class="contacto">
			<input class="campos" type="hidden" id="termometro" size="40" name="termometro" value="<?= $termometro ?>">
			<input class="campos" type="hidden" id="fecha" size="40" name="fecha" value="<?= $dte ?>">
			<input class="campos" type="hidden" id="usuario" size="40" name="usuario" value="<?= $user ?>">
			<input class="campos" type="hidden" id="horarespuesta" size="40" name="horarespuesta" value="<?= $dte2 ?>">
			<input class="campos" type="hidden" id="tipo" size="40" name="tipo" value="datos">
			<input class="campos" type="hidden" name="formulario" size="0" value="VEN">
			<input class="campos" type="hidden" name="asignadoa" value="<?= $asignadoa ?>">
			<input class="campos" type="hidden" name="fechaasignacion" value="<?= $dte ?>">
			<input class="campos" type="hidden" name="fechaventa" value="<?= $fechaventa ?>">
			<input class="campos" type="hidden" name="idedit" readonly="readonly" value="<?= $_GET["id"] ?>">
<?php

	if ($tipo == 'administrador') {

		include('inc/i.form.seguimientos.actualizar-venta2-1verde-admin.php');
	
	}

	else {

		if ($termometro == 'verde' OR $termometro == '') {
			
			include('inc/i.form.seguimientos.actualizar-venta2-1verde.php');
		}
		
		else if ($termometro == 'rojo') {
		
			include('inc/i.form.seguimientos.actualizar-venta2-1rojo.php');

		}

		else if ($termometro == 'azul') {

		}

		else {

		}

	}
?>
	
		</form>
	</div>
</div>