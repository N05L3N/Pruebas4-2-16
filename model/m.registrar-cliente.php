<?php

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);
	# mysql_query("SET NAMES 'utf8'");

	$dte = date(ymdhia);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$ampm = date(a);

	if (isset($_POST["nombre"])) {

		$id = 0;
		$nombre = $_POST["nombre"];
		$contacto2 = $_POST["contacto2"];
		$contacto3 = $_POST["contacto3"];
		$direccion = $_POST["direccion"];
		$ciudad = $_POST["ciudad"];
		$pais = $_POST["pais"];
		$estado = $_POST["estado"];
		$lada = $_POST["lada"];
		$telefono = $_POST["telefono"];
		$email = $_POST["email"];
		$medio = $_POST["medio"];
		$giro = $_POST["giro"];
		$comentarios = $_POST["comentarios"];
		$fecha = ''.$ano.'-'.$mes.'-'.$dia.'';
		$Hora = ''.$hora.':'.$minuto.' '.$ampm.'';
		$formulario = 'CRM';
		$equipodeinteres = $_POST["equipodeinteres"];
		$comeqenatp = $_POST["comeqenatp"];
		$eqclosqcuenta = $_POST["eqclosqcuenta"];
		$antacteq = $_POST["antacteq"];
		$escliente = $_POST["escliente"];
		$numerodecliente = $_POST["numerodecliente"];
		$motivodeconsulta = $_POST["motivodeconsulta"];
		$empresa = $_POST["empresa"];
		$nombre_recomendador = $_POST["nombre_recomendador"];
		$sucursal_recomendador = $_POST["sucursal_recomendador"];
		$comentario_vendedor = $_POST["comentario_vendedor"];
		$asignadoa = $_POST["usuario"];
		$fechadecontacto = $_POST["fechadecontacto"];
		$fechaasignacion = ''.$ano.'-'.$mes.'-'.$dia.'';
		$fechaventa = $_POST["fechaventa"];
		$estadodeventa = $_POST["estadodeventa"];
		$numerodefactura = $_POST["numerodefactura"];
		$usuario = $_POST["usuario"];
		$formulario = 'CRM';

		$sql = "INSERT INTO contacto (id,nombre,contacto2,contacto3,direccion,ciudad,pais,estado,lada,telefono,email,medio,giro,comentarios,fecha,Hora,formulario,equipodeinteres,comeqenatp,eqclosqcuenta,antacteq,escliente,numerodecliente,motivodeconsulta,empresa,nombre_recomendador,sucursal_recomendador,comentario_vendedor,asignadoa,fechadecontacto,fechaasignacion,fechaventa,estadodeventa,numerodefactura,usuario) ";
		$sql.= "VALUES ('".$id."', '".$nombre."', '".$contacto2."', '".$contacto3."', '".$direccion."', '".$ciudad."', '".$pais."', '".$estado."', '".$lada."', '".$telefono."', '".$email."', '".$medio."', '".$giro."', '".$comentarios."', '".$fecha."', '".$Hora."', '".$formulario."', '".$equipodeinteres."', '".$comeqenatp."', '".$eqclosqcuenta."', '".$antacteq."', '".$escliente."', '".$numerodecliente."', '".$motivodeconsulta."', '".$empresa."', '".$nombre_recomendador."', '".$sucursal_recomendador."', '".$comentario_vendedor."', '".$asignadoa."', '".$fechadecontacto."', '".$fechaasignacion."', '".$fechaventa."', '".$estadodeventa."', '".$numerodefactura."', '".$usuario."')";
		
		if ($nombre == 'Prueba de S') {
		
		}
		
		else {

			mysql_query($sql, $conexion);

		}
	
	# Obtener el último registro

	$result_registrar_cliente = mysql_query("SELECT * FROM contacto ORDER BY id desc limit 0,1");
	mysql_query ("SET NAMES 'utf8'");

	$i = 0;
	
	while ($row_registrar_cliente = mysql_fetch_array($result_registrar_cliente)) {
		
		if ($i > 0) {
		}
		
		$id = $row_registrar_cliente['id'];

		$i++;
	}

?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Información capturada con éxito.
		</div>
	</div>
	<div class="col-sm-2"></div>
</div>	

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Capturar próximo seguimiento</h3>
			</div>
			<div class="panel-body">
				<iframe src="seguimientos.actualizar-venta2.php?id=<?= $id ?>" width="100%;" height="550" frameborder="no" scrolling="no"></iframe>
			</div>
		</div>
	</div>
	<div class="col-sm-2"></div>
</div>	

<?php

	}

?>