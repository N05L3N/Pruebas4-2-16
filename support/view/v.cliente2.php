<?php
  include('inc/menu-superior.php');

if ($usuario == 'areynoso' OR $usuario == 'amariscal' OR $usuario == 'Coordinador' OR $tipo == 'administrador') {
	$usuario = $_GET['vendedor'];
	$id = $_GET['id'];
	echo '<div>['.$id.']</div>';
}
else {

}

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
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE id_seguimiento = '$id' AND horaasignacion = 'a' ORDER BY id_comentarios_s desc limit 0,1");
	$i_result3 = 0;
	while ($row_result3 = mysql_fetch_array($result3)) {
		if ($i_result3 > 0) { }
		$fechaproxima = $row_result3['fechaproxima'];
		$fechaasignacion = $row_result3['fechaasignacion'];
		$estadodeventa = $row_result3['estadodeventa'];
		
		$i_result3++; 
	}      
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 col-md-9 col-md-offset-3 main">
			<?php include('view/v.cliente2-seguimientos.php') ?>
		</div>
		<div class="col-sm-4 col-md-3 sidebar">
			<?php 
				# include('view/v.cliente.vendedor.side.php') 
				include('view/v.cliente.vendedor.td2.php')
			?>
		</div>
	</div>
</div>