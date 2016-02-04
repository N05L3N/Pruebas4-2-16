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
		<iframe src="seguimientos.actualizar.soporte2.php?id=<?= $id ?>&fechaasignacion=&fechaproxima=&estadodeventa=&asignadoa=" scrolling="no" frameborder="no" height="600" width="100%;"></iframe>
	</div>
</div>