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


<form method="post" id="form1" action="seguimientos.actualizar.soporte2.php" onSubmit="return validarSeguimiento(this)" class="contacto" style="margin-top:-40px;">
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


<?php
	
	if ($_GET['id'] != '') {

?>
	
	<input type="hidden" name="id_seguimiento" value="<?= $_GET['id']?>">

<?php		
	
	}

	else {

	}

?>
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

<table class="table-striped table-condensed table-bordered" style="width:400px;">
	<tr>
		<th><small>Fecha.</small></th>
		<td>
			<div class="input-group input-group-md" style="width:250px;">
				<input type="text" id="datepicker" style="width:200px;" name="fecha" class="form-control">
				<input type="hidden" name="asesor" readonly="readonly" class="form-control" value="<?= $usuario ?>">
				<input type="hidden" name="cliente" readonly="readonly" class="form-control" value="<?= $cliente ?>">
			</div>
		</td>
	</tr>
	<tr>
		<th><small>Concepto</small></th>
		<td>
			<select name="concepto" class="form-control">
				<option value=""></option>
				<option value="Asesoría">Asesoría</option>
				<option value="Capacitación">Capacitación</option>
				<option value="Soporte Técnico">Soporte Técnico</option>
				<option value="Seguimiento">Seguimiento</option>
			</select>
		</td>
	</tr>
	<tr>
		<th><small>Software</small></th>
		<td>
			<select name="software" class="form-control">
				<option value=""></option>
				<option value="Lite">Lite</option>
				<option value="8000">8000</option>
				<option value="KD">KD</option>
				<option value="T6">T6</option>
				<option value="CK">CK</option>
			</select>
		</td>
	</tr>
	<tr>
		<th><small>Hora</small></th>
		<td>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-6">
					<select name="horainicio1" class="form-control">
					<option value="7:00 AM">7:00 AM</option>
					<option value="7:30 AM">7:30 AM</option>
					<option value="8:00 AM">8:00 AM</option>
					<option value="8:30 AM">8:30 AM</option>
					<option value="9:00 AM">9:00 AM</option>
					<option value="9:30 AM">9:30 AM</option>
					<option value="10:00 AM">10:00 AM</option>
					<option value="10:30 AM">10:30 AM</option>
					<option value="11:00 AM">11:00 AM</option>
					<option value="11:30 AM">11:30 AM</option>
					<option value="12:00 PM">12:00 PM</option>
					<option value="12:30 PM">12:30 PM</option>
					<option value="1:00 PM">1:00 PM</option>
					<option value="1:30 PM">1:30 PM</option>
					<option value="2:00 PM">2:00 PM</option>
					<option value="2:30 PM">2:30 PM</option>
					<option value="3:00 PM">3:00 PM</option>
					<option value="3:30 PM">3:30 PM</option>
					<option value="4:00 PM">4:00 PM</option>
					<option value="4:30 PM">4:30 PM</option>
					<option value="5:00 PM">5:00 PM</option>
					<option value="5:30 PM">5:30 PM</option>
					<option value="6:00 PM">6:00 PM</option>
					<option value="6:30 PM">6:30 PM</option>
					<option value="7:00 PM">7:00 PM</option>
					</select>
					<input type="hidden" name="horainicio2" value="" class="form-control">
					<input type="hidden" name="horainicio3" value="" class="form-control">
				</div>
				<div class="col-lg-6 col-md-6 col-xs-6">
					<select name="horafin1" class="form-control">
					<option value="7:00 AM">7:00 AM</option>
					<option value="7:30 AM">7:30 AM</option>
					<option value="8:00 AM">8:00 AM</option>
					<option value="8:30 AM">8:30 AM</option>
					<option value="9:00 AM">9:00 AM</option>
					<option value="9:30 AM">9:30 AM</option>
					<option value="10:00 AM">10:00 AM</option>
					<option value="10:30 AM">10:30 AM</option>
					<option value="11:00 AM">11:00 AM</option>
					<option value="11:30 AM">11:30 AM</option>
					<option value="12:00 PM">12:00 PM</option>
					<option value="12:30 PM">12:30 PM</option>
					<option value="1:00 PM">1:00 PM</option>
					<option value="1:30 PM">1:30 PM</option>
					<option value="2:00 PM">2:00 PM</option>
					<option value="2:30 PM">2:30 PM</option>
					<option value="3:00 PM">3:00 PM</option>
					<option value="3:30 PM">3:30 PM</option>
					<option value="4:00 PM">4:00 PM</option>
					<option value="4:30 PM">4:30 PM</option>
					<option value="5:00 PM">5:00 PM</option>
					<option value="5:30 PM">5:30 PM</option>
					<option value="6:00 PM">6:00 PM</option>
					<option value="6:30 PM">6:30 PM</option>
					<option value="7:00 PM">7:00 PM</option>
					</select>
					<input type="hidden" name="horafin2" value="" class="form-control">
					<input type="hidden" name="horafin3" value="" class="form-control">
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<th><small>Categoría</small></th>
		<td>
			<select name="categoria" class="form-control">
				<option value=""></option>
				<option value="(1) Instalación">(1) Instalación</option>
				<option value="(2) Modelado">(2) Modelado</option>
				<option value="(3) 2D">(3) 2D</option>
				<option value="(4) 3D">(4) 3D</option>
				<option value="(5) Edición de Materiales">(5) Edición de Materiales</option>
				<option value="(6) Iluminación">(6) Iluminación</option>
				<option value="(7) Librerias">(7) Librerias</option>
				<option value="(8) Tutoriales">(8) Tutoriales</option>
				<option value="(9) 2D y 3D">(9) 2D y 3D</option>
				<option value="(10) Plug in">(10) Plug in</option>
				<option value="(11) Key3">(11) Key3</option>
				<option value="(12) Importar, Exportar">(12) Importar, Exportar</option>
				<option value="(12) Actualización">(12) Actualización</option>
				<option value="(13) Guardar propiedades de Ceramica">(13) Guardar propiedades de Ceramica</option>
				<option value="(14) Modeling">(14) Modeling</option>
			</select>
		</td>
	</tr>
	<tr>
		<th><small>Estado</small></th>
		<td>
			<select name="estado" class="form-control">
				<option value=""></option>
				<option value="Activo">Activo</option>
				<option value="Resuelto">Resuelto</option>
				<option value="Cerrado">Cerrado</option>
			</select>
		</td>
	</tr>
	<tr>
		<th><small>Medio utilizado</small></th>
		<td>
			<small>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-4">
					<input type="checkbox" name="medioutilizado1"> Correo
				</div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<input type="checkbox" name="medioutilizado2"> Teléfono
				</div>
				<div class="col-lg-4 col-md-4 col-xs-4">
					<input type="checkbox" name="medioutilizado3"> Webex
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-2 col-xs-6">
					<input type="checkbox" name="medioutilizado4"> Team Viewer
				</div>
				<div class="col-lg-6 col-md-2 col-xs-6">
					<input type="checkbox" name="medioutilizado5"> Hangout
				</div>
			</div>
			</small>
		</td>
	</tr>
	<tr>
		<th><small>Descripción</small></th>
		<td>
			<textarea name="comentarios" class="form-control" rows="2" style="width:90%; height:50px; resize: none; margin:auto;" onfocus="javascript:mandalo();"></textarea>
		</td>
	</tr>
<?php
	
	if ($_GET['id'] == '') {

?>
<tr>
	<th><small>Cliente</small></th>
		<td>
			<select name="id_seguimiento" class="form-control" >
				<option value=""></option>
<!-- -->
<?php

	$asignacion_query = mysql_query("SELECT * FROM ecrm_asignacion WHERE $where age = 1 ORDER BY id_ecrm_asignacion DESC");

	$i = 0;
	while ($row = mysql_fetch_array($asignacion_query)) {
		if ($i > 0) {}
		
			$vencimientos_id_seguimiento = $row['id_seguimiento'];
			
	
				$query = mysql_query("SELECT * FROM contacto WHERE id = '$vencimientos_id_seguimiento' limit 1");

				$i2 = 0;
				while ($r = mysql_fetch_array($query)) {
					if ($i2 > 0) {}
		
						$q_nombre = $r['nombre'];
						$q_empresa = $r['empresa'];
						$i2++; 
				}

	# echo '<option value="'.$vencimientos_id_seguimiento.'">#' . $vencimientos_id_seguimiento . '.- ' . $q_nombre .' (' . $q_empresa . ' )</option>';
	echo '<option value="'.$vencimientos_id_seguimiento.'">#' . $vencimientos_id_seguimiento . '.- ' . $q_nombre .' </option>';

        	$i++; 
	}

?>	
</select>
<!-- -->






</tr>

<?php		
	
	}

	else {

	}

?>		
	<tr>
		<td colspan="2" style="text-align:center;">
			<button type="submit" class="btn btn-default" tabindex="17">Guardar</button>
		</td>
	</tr>
</table>

</form>