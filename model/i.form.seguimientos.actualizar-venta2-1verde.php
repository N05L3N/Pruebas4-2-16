	<!--
	<tr>
		<td style="width:50%;">
			<label><?= $obl ?>Número de factura:</label>
		</td>
		<td style="width:45%;">
			<input type="text" name="numerodefactura" class="numerodefactura" value="<?php echo "$numerodefactura"; ?>" style="width:80%;" tabindex="1">
		</td>
	</tr>
	-->


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
?>
	
    
	<div class="row">
	  	<div class="col-xs-4 col-sm-4 col-md-4">

<?php
	$horaServ = date(h);
	$minuto = date(i);
	$hora = $horaServ - 7;
	$ampm = 'pm';
	/* 
	K / S
	1 = -5
	2 = - 4
	3 = -3
	4 = -2
	5 = -1
	6 = 1
	7 = 2
	8 = 3
	9 = 4
	10 = 5
	11 = 6
	12 = 7
	13 = 8
	14 = 9
	15 = 10
	16 = 11
	17 = 12

	18 = 1 + 5
	19 =  2 + 5
	20 =  3 + 5
	21 =  4 + 5
	22 =  5 + 5
	23 =  6 + 5
	24 =  7 + 5
	 */

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
		<label title="<?= ''.$_SESSION['pruebadehora'].'' ?>"><?= $obl ?>Próxima llamada: <i>día/mes/año</i></label> 
  			<!-- <label><?= $obl ?>Próxima llamada: <i>día/mes/año</i></label>  -->
  		</div>
  		<div class="col-xs-8 col-sm-8 col-md-8">

<?php
	if ($_SESSION['usuario'] == 'sdelacruz' OR $_SESSION['usuario'] == 'ccastillo') {
		
		include('i.form.seguimientos.actualizar-venta2-1verde-3select.php');
	
	}
	
	else {
?>	

<input type="text" id="datepicker" name="fechaprox">


<?php
echo $_SESSION['fechaproxE2'];
echo "<br />";
echo $_SESSION['fechaproxE1'];
echo "<br />";
echo $_SESSION['fechaproxE0'];
echo "<br />";
	}
?>
  		</div>
	</div>
</div>

<hr />

<div class="row">
	<div class="col-xs-4 col-sm-4 col-md-4">
		<label><?= $obl ?>Estatus de la venta:</label>
	</div>
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		
  		<div style="text-align:left; width:100%;">

		<input type="radio" value="descartado" name="estadodeventa" onclick="javascript:this.form.fechadiaprox.value=31;javascript:this.form.fechamesprox.value=12;javascript:this.form.fechaanoprox.value=2014;"> Descartado
		<br />
  		<input type="radio" value="frio" name="estadodeventa"> Frio (76 a 180 dias)
  		<br />
  		<input type="radio" value="tibio" name="estadodeventa"> Tibio (31 a 75 dias)
  		<br />
  		<input type="radio" value="caliente" name="estadodeventa"> Caliente (1 a 30 dias)
  		<br />
  		<input type="radio" value="facturado" name="estadodeventa"> Facturado
  		
  		<!--
  		<select name="estadodeventa" class="form-control">
			<option value=""></option>
			<option value="frio">Frio (76 a 180 dias)</option>
			<option value="tibio">Tibio (31 a 75 dias)</option>
			<option value="caliente">Caliente (1 a 30 dias)</option>
			<option value="si">si</option>
			<option value="En proceso">En proceso</option>
		
		</select>
		-->
		</div>

  	</div>
</div>





<hr>



<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<label><?= $obl ?>Si se realizo la venta <br />introduzca la fecha:</label>
  	</div>			
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		<table cellpadding="0" cellspacing="0" border="0">		
			<tr>
				<td>
					<select name="fechadia" class="form-control">
						<option value=""></option>
						<?php
							$i = '0';
							for ($n=0; $n<31; $n++) {
								$l = ++$i;
								echo '<option value="'.$l.'">'.$l.'</option>';
							}
						?>	
					</select>		
				</td>
				<td>
					<select name="fechames" class="form-control">
						<option value=""></option>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agosto</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>
				</td>
				<td>
					<select name="fechaano" class="form-control">
						<option value=""></option>
						<option value="2020">2020</option>
							<option value="2019">2019</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
							<option value="2015">2015</option>
							<option value="2014" selected>2014</option>
					</select>		
				</td>
			</tr>
		</table>
  	</div>
</div>

<hr>

<div class="row">
  	<div class="col-xs-4 col-sm-4 col-md-4">
  		<label><?php $obl ?>Comentarios:</label>
  	</div>			
  	<div class="col-xs-8 col-sm-8 col-md-8">
  		<!-- <textarea name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:50px; resize: none;"><?= $POSTcomentariovendedor ?></textarea>-->
  		<textarea name="comentariovendedor" class="form-control" rows="2" style="width:100%; height:50px; resize: none;"></textarea>
  		<br>
  		<small style="color:White;">
<?php
	# Total de Agendados al Día

  	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);

	$hora24 = date(G);
	if ($hora24 == 0 OR $hora24 == 1 OR $hora24 == 2 OR $hora24 == 3 ) {
   		 $dia = $dia-1;
	 }

  	else {
   
  	}

	$fecha_asignacionesHoy = ''.$ano.'-'.$mes.'-'.$dia.'';
	# echo '<acronym title="'.$_SESSION['armando'].'">'.___.'</acronym>';
?>  			
  		</small>
  	</div>
</div>

<br />

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit" class="btn btn-primary" tabindex="17">Aceptar</button>
	</div>
</div>