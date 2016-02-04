<?php

	$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

	$dte = date(ymdhia);  
	$dia = date(d);
	$mes = date(m);
	$ano = date(Y);
	$hora = date(h);
	$minuto = date(i);
	$ampm = date(a);

if (isset($_POST["nombre"])) {

	$id = $_POST["id"];
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
	$fechaasignacion = $_POST["fechaasignacion"];
	$fechaventa = $_POST["fechaventa"];
	$estadodeventa = $_POST["estadodeventa"];
	$numerodefactura = $_POST["numerodefactura"];
	$usuario = $_POST["usuario"];

	$Vendedor = $_POST["Vendedor"];

	# $sql = "UPDATE `crmk`.`contacto` SET `nombre`='$nombre', `email`='$email', `lada`='$lada', `telefono`='$telefono', `pais`='$pais', `comentarios`='$comentarios', `equipodeinteres`='$equipodeinteres' WHERE `id`='$id';";
	$sql = "UPDATE `crmk`.`contacto` SET `nombre`='$nombre', `contacto2`='$contacto2', `contacto3`='$contacto3', `email`='$email', `telefono`='$telefono', `pais`='$pais', `direccion`='$direccion', `ciudad`='$ciudad', `estado`='$estado', `comentarios`='$comentarios', `equipodeinteres`='$equipodeinteres', `medio`='$medio', `giro`='$giro', `comeqenatp`='$comeqenatp', `comeqenatp`='$comeqenatp', `comeqenatp`='$comeqenatp', `eqclosqcuenta`='$eqclosqcuenta', `motivodeconsulta`='$motivodeconsulta', `empresa`='$empresa', `nombre_recomendador`='$nombre_recomendador' WHERE `id`='$id';";

	mysql_query($sql, $conexion);

	$vendedor = $_GET['vendedor'];
	
	function dameURL(){
		$url = $_SERVER['REQUEST_URI'];
		return $url;
	}
	
	$url = dameURL();
	
	# header("Location: $url?id=$id&vendedor=$Vendedor");

	if ($id_view == 'cliente') {
		header("Location: cliente?id=$id&vendedor=$Vendedor");
	}
	else if ($id_view == 'iframe-cliente') {
		header("Location: iframe-cliente?id=$id&vendedor=$Vendedor");
	}
	else {
		
	}

	

	echo '('.$_POST["id"].')';
	echo '<div style="width:200px; height:200px; background-color:red;"></div>';
	
}

?>