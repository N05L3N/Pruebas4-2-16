<?php

	$horaServ = date(h);
	$minuto = date(i);
	$hora = $horaServ - 7;
	$ampm = 'pm';

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

	$horarespuesta = ''.$hora.':'.$minuto.' '.$ampm.'';
	$_SESSION['pruebadehora'] = $horarespuesta;
?>

<style>
    .hasDatepicker {
    	display: inline-block;
    }
    img.ui-datepicker-trigger {
    	cursor: pointer;
    	display: inline-block;
    	position: absolute;
    	width: 16%;
    }

</style>

<script type="text/javascript">
	function texto1 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function texto2 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function texto3 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function texto4 (){
		document.getElementById ("comentariovendedor").value = "";
	}

	function texto5 (){
		document.getElementById ("comentariovendedor").value = "";
	}
</script>

<div class="container-fluid">

<?php

	if ($_SESSION["h4Mensaje"] == 11) {
		
?>	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="alert alert-warning fade in" role="alert">
      				<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
      				<h5>La fecha no puede ser antes de la fecha actual</h5>
      			</div>
		</div>
	</div>

<?php

	}

	else {

	}

	$POSTestadodeventa = $_SESSION["POSTestadodeventa"];
	$POSTfechaanoprox = $_SESSION["POSTfechaanoprox"] ;
	$POSTfechamesprox = $_SESSION["POSTfechamesprox"] ;
	$POSTfechadiaprox = $_SESSION["POSTfechadiaprox"] ;
	$POSTestadodeventa = $_SESSION["POSTestadodeventa"] ;
	$POSTcomentariovendedor = $_SESSION["POSTcomentariovendedor"] ;

	include('inc/i.form.seguimientos.actualizar-venta2-1verde.01.phtml');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.02.phtml');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.03.phtml');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.04.phtml');
	include('inc/i.form.seguimientos.actualizar-venta2-1verde.05.phtml');
?>
	

</div>