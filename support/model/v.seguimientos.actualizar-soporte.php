<?php
	session_start();
	/* Soporte 2 */
	$usuario = $_SESSION['usuario'];

	$dbh = 'localhost';
	$dbu = 'ucrmk';
	$dbp = 'Pcrmk#2014';
	$dbn = 'crmk';
	
	$mysql_hostname = $dbh;
	$mysql_user = $dbu;
	$mysql_password = $dbp;
	$mysql_database = "$dbn";
	
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
	mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
	mysql_set_charset('utf8', $link);

	$folio = $_GET['id'];

	$query = "SELECT * FROM contacto WHERE id = $folio ORDER BY id desc limit 1";
	$result = mysql_query("$query");
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
    		if ($i > 0) {}
			$cliente = $row['nombre'];
		}
	$i++; 

?>


<form method="post" id="form1" action="seguimientos.actualizar.soporte.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
<?php
	
	$fechaServY = date(Y);
	$fechaServM = date(m);
	$fechaServD = date(d);

	$horaServ = date(h);
	$minuto = date(i);
	$hora = $horaServ - 6;
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

	$fechaServ = ''.$fechaServY.'-'.$fechaServM.'-'.$fechaServD.'';
	$horarespuesta = ''.$hora.':'.$minuto.' '.$ampm.'';
?>	
	<input type="hidden" name="id_seguimiento" value="<?= $_GET['id']?>">
	<input type="hidden" name="fecharespuesta" value="<?= $fechaServ ?>">
	<input type="hidden" name="horarespuesta" value="<?= $horarespuesta ?>">
	
<?php
	$tipo = $_SESSION['tipo'];
?>


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
    	width: 10%;
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
?>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12" style="background:White;">
		<!-- 6 -->

<table class="table table-striped table-condensed table-bordered">
	<tr>
		<th>
			Próximo Seguimiento
		</th>
		<td>
			<div class="input-group input-group-md" style="width:350px;">
				<input type="text" id="datepicker" style="width:200px;" name="fecha" class="form-control">
				<input type="hidden" name="asesor" readonly="readonly" class="form-control" value="<?= $usuario ?>">
				<input type="hidden" name="cliente" readonly="readonly" class="form-control" value="<?= $cliente ?>">
			</div>
		</td>
	</tr>
	<tr>
		<th>
			Comentarios
		</th>
		<td>
			<div class="input-group input-group-md" style="width:350px;">
				<textarea name="comentarios" class="form-control" rows="2" style="width:100%; height:150px; resize: none; margin:auto;" onfocus="javascript:mandalo();"></textarea>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="text-align:center;">
			<button type="submit" class="btn btn-default" tabindex="17">Guardar</button>
		</td>
	</tr>
</table>
<!-- .6 -->
	</div>
</div>


</div>


</form>