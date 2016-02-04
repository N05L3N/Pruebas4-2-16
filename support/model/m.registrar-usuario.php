<style>
	pre {
		color:#f4dd0b;
		background-color: #112435;
		margin-left: 300px;
		width: 50%;
	}
</style>
<?php

$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("$dbn", $conexion);
	mysql_query("SET NAMES 'utf8'");

$id_usuario = $_POST["id_usuario"];
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$correo = $_POST["correo"];
$tipo = $_POST["tipo"];

if (isset($_POST["nombre1"])) {
	
	$id_usuario = 0;
	
	$sql = "INSERT INTO usuarios (id_usuario,nombre1,nombre2,apellido1,apellido2,usuario,clave,correo,tipo)";
	$sql.= "VALUES ('".$id_usuario."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$usuario."','".$clave."','".$correo."','".$tipo."')";

}

if (isset($_POST["u_nombre1"])) {
	
	$nombre1 = $_POST["u_nombre1"];

	$sql = "UPDATE usuarios SET nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',usuario='$usuario',clave='$clave',correo='$correo',tipo='$tipo' WHERE id_usuario = $id_usuario";
    
}

if (isset($_POST["d_confirmar"])) {
	
	$id_usuario = $_POST["d_id_usuario"];
	$sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
    
}

# echo '<pre>'. $sql .'</pre>';
mysql_query($sql, $conexion);

?>