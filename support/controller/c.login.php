<?php

$conexion = mysql_connect("localhost", "ucrmk", "Pcrmk#2014") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("crmk", $conexion); 

function quitar($mensaje) {
	
	$nopermitidos = array("'",'\\','<','>',"\"");
	$mensaje = str_replace($nopermitidos, "", $mensaje);
	return $mensaje;
}

if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "") {
	
	$usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
	$password = $_POST["password"];
	$result = mysql_query('SELECT * FROM usuarios WHERE usuario=\''.$usuario.'\'');
	
	if($row = mysql_fetch_array($result)){
		
		if($row["clave"] == $password){
			
			$_SESSION["usuario"] = $usuario;
			$_SESSION["tipo"] = $row["tipo"];
				
				if ($row["tipo"] == 'vendedor' OR $row["tipo"] == 'soporte') {
					
					header('location:asignaciones.php');

				}

				else {

					header('location:panel.php');

				}
		}
	
		else {
		
			header('location:login.php');
			$_SESSION["error"] = 'Contraseña incorrecta';

		}
	}
	
	else {
		
		echo 'el e-mail ingresado no existe.';

	}
	
	mysql_free_result($result);

}

else {
	echo '';
}

mysql_close();

?>