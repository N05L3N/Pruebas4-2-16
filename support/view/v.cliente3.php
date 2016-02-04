<?php
#  include('inc/menu-superior.php');

if ($usuario == 'areynoso' OR $usuario == 'amariscal' OR $usuario == 'Coordinador' OR $tipo == 'administrador') {
	$usuario = $_GET['vendedor'];
	$id = $_GET['id'];
	echo '<div>['.$id.']</div>';
}
else {

}
	
	$id = $_GET['id'];

	mysql_query ("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM contacto WHERE asignadoa = '".$usuario."' AND id = ".$id." ORDER BY fecha desc, id desc limit 0,1");
	# mysql_query ("SET NAMES 'utf8'");
  
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
    
		if ($i > 0) {
		}

		$id = $row['id'];
		$nombre = $row['nombre'];
		$email = $row['email'];
		$email = $row['email'];
		$lada = $row['lada'];
		$telefono = $row['telefono'];
		$pais = $row['pais'];
		$fecha = $row['fecha'];
		$fechaasignacion = $row['fechaasignacion'];
		$comentarios = $row['comentarios'];
		$equipodeinteres = $row['equipodeinteres'];
		$formulario = $row['formulario'];
		$formulario = $row['formulario'];
		$numerodefactura = $row['numerodefactura'];
		$asignadoa = $row['asignadoa'];
		$_SESSION['asignadoa'] = $asignadoa;
		$comentariovendedor = $row['comentariovendedor'];
		$estadodeventa = $row['estadodeventa'];


		$id = $row['id'];
		$nombre = $row['nombre'];
		$contacto2 = $row['contacto2'];
		$contacto3 = $row['contacto3'];
		$direccion = $row['direccion'];
		$ciudad = $row['ciudad'];
		$pais = $row['pais'];
		$estado = $row['estado'];
		$lada = $row['lada'];
		$telefono = $row['telefono'];
		$email = $row['email'];
		$medio = $row['medio'];
		$giro = $row['giro'];
		$comentarios = $row['comentarios'];
		$fecha = $row['fecha'];
		$Hora = $row['Hora'];
		$formulario = $row['formulario'];
		$equipodeinteres = $row['equipodeinteres'];
		$comeqenatp = $row['comeqenatp'];
		$eqclosqcuenta = $row['eqclosqcuenta'];
		$antacteq = $row['antacteq'];
		$escliente = $row['escliente'];
		$numerodecliente = $row['numerodecliente'];
		$motivodeconsulta = $row['motivodeconsulta'];
		$empresa = $row['empresa'];
		$nombre_recomendador = $row['nombre_recomendador'];
		$sucursal_recomendador = $row['sucursal_recomendador'];
		$comentario_vendedor = $row['comentario_vendedor'];
		$asignadoa = $row['asignadoa'];
		$fechadecontacto = $row['fechadecontacto'];
		$fechaasignacion = $row['fechaasignacion'];
		$fechaventa = $row['fechaventa'];
		$estadodeventa = $row['estadodeventa'];
		$numerodefactura = $row['numerodefactura'];
		$usuario = $row['usuario'];



	}
	$i++;

	# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE usuario = '$asignadoa' AND id_seguimiento = '$id' ORDER BY id_comentarios_s desc limit 0,1");
	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		$fechaproxima = $row_result3['fechaproxima'];
		$estadodeventa = $row_result3['estadodeventa'];
		$i_result3++; 
	}      
?>

<style>
body {
	overflow-x: hidden;
}
</style>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-4">

		<div class="row">
			<div class="col-md-4">
				<a href="iframe-cliente.php?id=<?= $id ?>" target="primero">
					<button type="button" class="btn btn-default btn-sm" style="width:130px;">
					 	<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar información
					</button>
				</a>
			</div>
			<div class="col-md-4">
				<a href="iframe-calendario.php?id=<?= $id ?>" target="primero">
					<button type="button" class="btn btn-default btn-sm" style="width:130px;">
					 	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Ver Calendario
					</button>
				</a>
			</div>
			<div class="col-md-4">
				<a href="iframe-historial.php?id=<?= $id ?>" target="primero">
					<button type="button" class="btn btn-default btn-sm" style="width:130px;">
					 	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Historial
					</button>
				</a>
			</div>
		</div>

	</div>

	<?php
		$fechaproximaE = explode("-", $fechaproxima);
	
		if ($estadodeventa == 'Caliente' OR $estadodeventa == 'caliente') {
			$CRM_estadodeventa = 'danger';
		}
		else if ($estadodeventa == 'tibio') {
			$CRM_estadodeventa = 'warning';
		}
		else if ($estadodeventa == 'frio') {
			$CRM_estadodeventa = 'info';
		}
		else if ($estadodeventa == 'Facturado' OR $estadodeventa == 'facturado') {
			$CRM_estadodeventa = 'success';
		}
		else if ($estadodeventa == 'Pendiente') {
			$CRM_estadodeventa = 'default';
		}
		else  {
			$CRM_estadodeventa = 'default';
		}
	?>

	<div class="col-md-1"><h4>ID #<?= $id ?></h4></div>
	<div class="col-md-3"><h4>Proxima Llamada: <?= ''.$fechaproximaE[2].'-'.$fechaproximaE[1].'-'.$fechaproximaE[0].'' ?></h4></div>
	<div class="col-md-3"><h4>Estado de la venta: <span class="label label-<?= $CRM_estadodeventa ?>"><?= $estadodeventa ?></span></h4></div>
</div>

<hr>

<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-11">

		<div class="row">
			<div class="col-md-5">
				<iframe src="iframe-cliente-vista.php?id=<?= $id ?>" width="100%;" height="600" frameborder="no" overflow-y="scroll" overflow-x="hidden" name="primero"></iframe>
			</div>
			<div class="col-md-7">		
				<iframe src="seguimientos.actualizar-venta2.php?id=<?= $id ?>&fechaasignacion=<?= $fechaasignacion ?>" width="100%;" height="600" frameborder="no" scrolling="no"></iframe>
			</div>
		</div>

	</div>
</div>


