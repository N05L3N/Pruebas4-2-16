<?php
	$HTTP_HOST = $_SERVER['HTTP_HOST'];
	$REQUEST_URI = $_SERVER['REQUEST_URI'];

	$urlStrlen = strlen($REQUEST_URI);
	
	if ($urlStrlen == 18) {
		
		if ($usuario != '') {
			
			$url = 'http://' . $HTTP_HOST . $REQUEST_URI . '?';

		}
		
		else {
			
			$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '?';

		}

	}
	
	else {

		$url = 'http://' . $HTTP_HOST .''. $REQUEST_URI . '';

	}

	
	$filtrarStatus = $_POST['filtrarStatus'];
	$filtrarporvendedor = $_POST["filtrarporvendedor"];

?>

<!-- <div class="table-responsive"> -->
	
	<table class="table table-bordered table-striped" style="margin:auto; max-width:85%; width:85%; ">
	

<?php

	if ($_SESSION['tipo'] == 'vendedor') {

	}

	else {

		# TR
		include('view/v.info-01.admin.php');

		$c = $mysql->query($select);

		while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

			# $fecharespuestaE = explode("-", $rows['fecharespuesta']);
			# $fechaproximaE = explode("-", $rows['fechaproxima']);

			$id = $rows['id'];
			$nombre = $rows['nombre'];
			$contacto2 = $rows['contacto2'];
			$contacto3 = $rows['contacto3'];
			$direccion = $rows['direccion'];
			$ciudad = $rows['ciudad'];
			$pais = $rows['pais'];
			$estado = $rows['estado'];
			$lada = $rows['lada'];
			$telefono = $rows['telefono'];
			$email = $rows['email'];
			$medio = $rows['medio'];
			$giro = $rows['giro'];
			$comentarios = $rows['comentarios'];
			$fecha = $rows['fecha'];
			$Hora = $rows['Hora'];
			$formulario = $rows['formulario'];
			$equipodeinteres = $rows['equipodeinteres'];
			$comeqenatp = $rows['comeqenatp'];
			$eqclosqcuenta = $rows['eqclosqcuenta'];
			$antacteq = $rows['antacteq'];
			$escliente = $rows['escliente'];
			$numerodecliente = $rows['numerodecliente'];
			$motivodeconsulta = $rows['motivodeconsulta'];
			$empresa = $rows['empresa'];
			$nombre_recomendador = $rows['nombre_recomendador'];
			$sucursal_recomendador = $rows['sucursal_recomendador'];
			$comentario_vendedor = $rows['comentario_vendedor'];
			$asignadoa = $rows['asignadoa'];
			$fechadecontacto = $rows['fechadecontacto'];
			$fechaasignacion = $rows['fechaasignacion'];
			$fechaventa = $rows['fechaventa'];
			$estadodeventa = $rows['estadodeventa'];
			$numerodefactura = $rows['numerodefactura'];
			$usuario = $rows['usuario'];

			# TD
			include('view/v.info-02.admin.php');

		}

	}

?>
	</table>

<!-- </div> -->

<center>
	<div style="margin:auto;">
		<ul class="pagination pagination-sm">

<?php

	for($k=1; $k <= $total; $k++) {
		
		if($ini == $k) {

?>

			<li class="active"><a href='#'><b><?= $k ?></b></a></li>

<?php

		}

		else {

?>
			
			<li>
				<a href='<?= $url ?>?pos=<?= $k ?>'>
					<?= $k ?>
				</a>
			</li>

<?php
		
		}

	}

?>
		</ul>
	</div>


<script>

function SubmitFiltrarporpaginacion() {
	document.getElementById("filtrarporpaginacion").submit();
}

function pagination(lapag){
	var lapag;
	var url = document.url;
	document.getElementById ("pagination").value = lapag;
	$("#filtrarporpaginacion").attr("action", "?pos=" + lapag);
}

</script>