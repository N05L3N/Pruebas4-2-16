<?php
	$filtro1_1 = ''.$_POST["filtro1_1"].'';
	$filtro1_2 = ''.$_POST["filtro1_2"].'';

	$id_view = $_SESSION["id_view"];

	$getD = $_GET['d'];
	$getM = $_GET['m'];
	$getY = $_GET['y'];

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
		prenderNtexto();
		prenderTexto();
		apagarNprofesion();
		apagarProfesion();
		apagarNfecha();
		apagarFecha();
		apagarNestado();
		apagarEstado();
	}

	function filtrarXprofesion (){
		document.getElementById ("filtro1_1").value = "contacto2";
		prenderNprofesion();
		prenderProfesion();
		apagarNtexto();
		apagarTexto();
		apagarNfecha();
		apagarFecha();
		apagarNestado();
		apagarEstado();
	}

	function filtrarXpuesto (){
		document.getElementById ("filtro1_1").value = "eqclosqcuenta";
		prenderNtexto();
		prenderTexto();
		apagarNprofesion();
		apagarProfesion();
		apagarNfecha();
		apagarFecha();
		apagarNestado();
		apagarEstado();
	}

	function filtrarXempresa (){
		document.getElementById ("filtro1_1").value = "empresa";
		prenderNtexto();
		prenderTexto();
		apagarNprofesion();
		apagarProfesion();
		apagarNfecha();
		apagarFecha();
		apagarNestado();
		apagarEstado();
	}

	function filtrarXestado (){
		document.getElementById ("filtro1_1").value = "estado";
		prenderNestado();
		prenderEstado();
		apagarNprofesion();
		apagarProfesion();
		apagarNfecha();
		apagarFecha();
		apagarNtexto();
		apagarTexto();
	}

	function filtrarXfechadeasignacion (){
		document.getElementById ("filtro1_1").value = "fechaasignacion";
		prenderNfecha();
		prenderFecha();
		apagarNprofesion();
		apagarProfesion();
		apagarNtexto();
		apagarTexto();
		apagarNestado();
		apagarEstado();
	}

	/* Names */
	function apagarNfecha () {
		document.getElementById ("datepicker").name = "Off";
	}

	function prenderNfecha () {
		document.getElementById ("datepicker").name = "filtro1_2";
	}

	function apagarNestado () {
		document.getElementById ("campoparaestado").name = "Off";
	}

	function prenderNestado () {
		document.getElementById ("campoparaestado").name = "filtro1_2";
	}

	function apagarNprofesion () {
		document.getElementById ("campoparaprofesion").name = "Off";
	}

	function prenderNprofesion () {
		document.getElementById ("campoparaprofesion").name = "filtro1_2";
	}

	function apagarNtexto () {
		document.getElementById ("campoparatexto").name = "Off";
	}

	function prenderNtexto () {
		document.getElementById ("campoparatexto").name = "filtro1_2";
	}

	/* Inputs, Selects */
	function apagarFecha () {
		$("#campoparafecha").removeClass("on");
	}

	function prenderFecha () {
		$("#campoparafecha").addClass("on");
	}

	function apagarEstado () {
		$("#campoparaestado").removeClass("on");
	}

	function prenderEstado () {
		$("#campoparaestado").addClass("on");
	}

	function apagarProfesion () {
		$("#campoparaprofesion").removeClass("on");
	}

	function prenderProfesion () {
		$("#campoparaprofesion").addClass("on");
	}

	function apagarTexto () {
		$("#campoparatexto").removeClass("on");
	}

	function prenderTexto () {
		$("#campoparatexto").addClass("on");
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

	<form action="<?= $id_view ?>?d=<?= $getD ?>&m=<?= $getM ?>&y=<?= $getY ?>" method="post" id="FormFiltrar">

		<input type="hidden" name="getD" value="<?= $getD ?>">
		<input type="hidden" name="getM" value="<?= $getM ?>">
		<input type="hidden" name="getY" value="<?= $getY ?>">

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

				<select name="filtro1_2Estado" id="campoparaestado" class="form-control vista">
					<option value="Aguascalientes">Aguascalientes</option>
					<option value="Baja California">Baja California</option>
					<option value="Baja California">Baja California</option>
					<option value="Campeche">Campeche</option>
					<option value="Chiapas">Chiapas</option>
					<option value="Chihuahua">Chihuahua</option>
					<option value="Coahuila">Coahuila</option>
					<option value="Colima">Colima</option>
					<option value="Distrito Federal">Distrito Federal</option>
					<option value="Durango">Durango</option>
					<option value="Guanajuato">Guanajuato</option>
					<option value="Guerrero">Guerrero</option>
					<option value="Hidalgo">Hidalgo</option>
					<option value="Jalisco">Jalisco</option>
					<option value="Mexico">México</option>
					<option value="Michoacan">Michoacán</option>
					<option value="Morelos">Morelos</option>
					<option value="Nayarit">Nayarit</option>
					<option value="Nuevo Leon">Nuevo León</option>
					<option value="Oaxaca">Oaxaca</option>
					<option value="Puebla">Puebla</option>
					<option value="Queretaro">Querétaro</option>
					<option value="Quintana Roo">Quintana Roo</option>
					<option value="San Luis Potosi">San Luis Potosí</option>
					<option value="Sinaloa">Sinaloa</option>
					<option value="Sonora">Sonora</option>
					<option value="Tabasco">Tabasco</option>
					<option value="Tamaulipas">Tamaulipas</option>
					<option value="Tlaxcala">Tlaxcala</option>
					<option value="Veracruz">Veracruz</option>
					<option value="Yucatan">Yucatán</option>
					<option value="Zacatecas">Zacatecas</option>
				</select>
	
				<select name="filtro1_Profesion" id="campoparaprofesion" class="form-control vista">
					<option value="Disenador de Interiores">Diseñador de Interiores</option>
                                		<option value="Muebleria">Mueblería</option>
                                		<option value="Cocinas Integrales">Cocinas Integrales</option>
                                		<option value="Muebles Modulares">Muebles Modulares</option>
                                		<option value="Textiles">Textiles</option>
                                		<option value="Arquitectura">Arquitectura</option>
                                		<option value="Ingenieria">Ingeniería</option>
                                		<option value="Construccion">Construcción</option>
                                	</select>


			</td>
			<td colspan="2" width="30"></td>
			<td>
				<button type="button" class="btn btn-inverse btn-sm" onclick="filtrar();">
  					<span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtrar
				</button>
			</td>
			<td>
				<button type="button" class="btn btn-inverse btn-sm" onclick="filtrar();">
  					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Quitar Filtro
				</button>
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
	

	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active">
			<strong><?= $filtro1_1?>:</strong> <span class="badge"><?= $filtro1_2 ?></span>
		</li>
	</ul>

</div>

<?php
	}

?>