<?php
	$filtro1_1 = ''.$_POST["filtro1_1"].'';
	$filtro1_2 = ''.$_POST["filtro1_2"].'';

	/*
	if ($filtro1_1 == 'formulario') {
		$checked1 = 'checked';
	}
	else if ($filtro1_1 == 'contacto2') {
		$checked2 = 'checked';
	}
	else if ($filtro1_1 == 'eqclosqcuenta') {
		$checked3 = 'checked';
	}
	else if ($filtro1_1 == 'empresa') {
		$checked4 = 'checked';
	}
	else if ($filtro1_1 == 'estado') {
		$checked5 = 'checked';
	}
	else if ($filtro1_1 == 'fechaasignacion') {
		$checked6 = 'checked';
	}
	else {

	}
	*/

?>

<script type="text/javascript">

	function filtrarXregistrode (){
		document.getElementById ("filtro1_1").value = "formulario";
		apagarNfecha();
		apagarfecha();
	}

	function filtrarXprofesion (){
		document.getElementById ("filtro1_1").value = "contacto2";
		apagarNfecha();
		apagarfecha();	
	}

	function filtrarXpuesto (){
		document.getElementById ("filtro1_1").value = "eqclosqcuenta";
		apagarNfecha();
		apagarfecha();
	}

	function filtrarXempresa (){
		document.getElementById ("filtro1_1").value = "empresa";
		apagarNfecha();
		apagarfecha();
	}

	function filtrarXestado (){
		document.getElementById ("filtro1_1").value = "estado";
		apagarNfecha();
		apagarfecha();
	}

	function filtrarXfechadeasignacion (){
		document.getElementById ("filtro1_1").value = "fechaasignacion";
		prenderNfecha();
		prenderfecha();
	}

	function apagarNfecha () {
		document.getElementById ("campoparatexto").name = "filtro1_2";
		document.getElementById ("datepicker").name = "filtro1_2N";
	}

	function prenderNfecha () {
		document.getElementById ("campoparatexto").name = "filtro1_2V";
		document.getElementById ("datepicker").name = "filtro1_2";
	}

	function apagarfecha () {
		$("#campoparafecha").removeClass("on");
		$("#campoparatexto").addClass("on");
	}

	function prenderfecha () {
		$("#campoparafecha").addClass("on");
		$("#campoparatexto").removeClass("on");
	}
	
	function filtrar() {
    		document.getElementById("FormFiltrar").submit();
	}

</script>
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

.vista {
	display: none;
}

.vista.on {
	display: block;
}

</style>

<div class="panel panel-info">

	<form action="asignaciones" method="post" id="FormFiltrar">

	<table class="table-condensed">
		<tr>
			<td>
				<ul style="list-style:none;">
					<li>
						<input type="radio" name="filtrarX" class="texto" onclick="filtrarXregistrode();" <?= $checked1 ?>> Registro de <small><i>(Contacto, CRM)</i></small>
					</li>
					<li>
						<input type="radio" name="filtrarX" class="texto" onclick="filtrarXprofesion();" <?= $checked2 ?>> Profesión
					</li>
				</ul>
			</td>
			<td>
				<ul style="list-style:none;">
					<li>
						<input type="radio" name="filtrarX" class="texto" onclick="filtrarXpuesto();" <?= $checked3 ?>> Puesto
					</li>
					<li>
						<input type="radio" name="filtrarX" class="texto" onclick="filtrarXempresa();" <?= $checked4 ?>> Empresa
					</li>
				</ul>
			</td>
			<td>
				<ul style="list-style:none;">
					<li>
						<input type="radio" name="filtrarX" class="texto" onclick="filtrarXestado();" <?= $checked5 ?>> Estado
					</li>
					<li>
						<input type="radio" name="filtrarX" onclick="filtrarXfechadeasignacion();" <?= $checked6 ?>> Fecha de Asignación						
					</li>
				</ul>
			</td>
			<td>
				<input type="hidden" name="filtro1_1" id="filtro1_1" class="form-control" value="nombre">
				
				<input type="text" name="filtro1_2V" class="form-control vista on" value="" placeholder="" id="campoparatexto">
				
				<div class="input-group input-group-md vista" style="width:200px;" id="campoparafecha">
					<input type="text" name="filtro1_2V" onlyread="onlyread" class="form-control" id="datepicker">
				</div>
			</td>
			<td colspan="2" width="30"></td>
			<td>
				<button type="button" class="btn btn-default btn-xs" onclick="filtrar();">
  					<span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtrar
				</button>
			</td>
			<td>
				<input type="submit" value="Reset" class="form-control btn btn-default btn-xs" />
			</td>
		</tr>
	</table>

</form>

</div>

<?php
	$filtro1_1 = $_POST['filtro1_1'];
	$filtro1_2 = $_POST['filtro1_2'];

	if ($filtro1_1  == '') {

	}

	else {

		if ($filtro1_1 == 'formulario') {
			$filtro1_1 = 'Registro de';
		}
		else if ($filtro1_1 == 'contacto2') {
			$filtro1_1 = 'Profesión';
		}
		else if ($filtro1_1 == 'eqclosqcuenta') {
			$filtro1_1 = 'Puesto';
		}
		else if ($filtro1_1 == 'empresa') {
			$filtro1_1 = 'Empresa';
		}
		else if ($filtro1_1 == 'estado') {
			$filtro1_1 = 'Estado';
		}
		else if ($filtro1_1 == 'fechaasignacion') {
			$filtro1_1 = 'Fecha de Asignación';
		}
		
		else {

		}

?>

<div class="alert alert-info alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong><?= $filtro1_1?>:</strong> <?= $filtro1_2 ?>
</div>

<?php
	}

?>