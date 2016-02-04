<?php
# Modelo para conectarse a la base de datos
# Sistema: Todos

$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
			mysql_select_db("$dbn", $conexion);
			mysql_query("SET NAMES 'utf8'");

# Modelo para registrar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["nombre1"])) {
	$id_usuario = 0;
	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
	$correo = $_POST["correo"];
	$tipo = $_POST["tipo"];
	
	$sql = "INSERT INTO usuarios (id_usuario,nombre1,nombre2,apellido1,apellido2,usuario,clave,correo,tipo)";
	$sql.= "VALUES ('".$id_usuario."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$usuario."','".$clave."','".$correo."','".$tipo."')";
	
	mysql_query($sql, $conexion);
	echo 'OK';
}

# Modelo para actualizar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["u_nombre1"])) {
	$id_usuario = $_POST["u_id_usuario"];
	$nombre1 = $_POST["u_nombre1"];
	$nombre2 = $_POST["u_nombre2"];
	$apellido1 = $_POST["u_apellido1"];
	$apellido2 = $_POST["u_apellido2"];
	$usuario = $_POST["u_usuario"];
	$clave = $_POST["u_clave"];
	$correo = $_POST["u_correo"];
	$tipo = $_POST["u_tipo"];
	
	$sql = "UPDATE usuarios SET nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',usuario='$usuario',clave='$clave',correo='$correo',tipo='$tipo' WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
	echo 'OK';
}

# Modelo para eliminar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["d_confirmar"])) {
	$id_usuario = $_POST["d_id_usuario"];
	
	$sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
	echo 'OK';
}


#
#
# USUARIOS DE RECLAMACIONES
#
#



# Modelo para registrar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["nombre1_reclamaciones"])) {
	$id_usuario = 0;
	$nombre1 = $_POST["nombre1_reclamaciones"];
	$nombre2 = $_POST["nombre2_reclamaciones"];
	$apellido1 = $_POST["apellido1_reclamaciones"];
	$apellido2 = $_POST["apellido2_reclamaciones"];
	$usuario = $_POST["usuario_reclamaciones"];
	$clave = $_POST["clave_reclamaciones"];
	$correo = $_POST["correo_reclamaciones"];
	$tipo = $_POST["tipo_reclamaciones"];
	
	$sql = "INSERT INTO usuarios_reclamaciones (id_usuario,nombre1,nombre2,apellido1,apellido2,usuario,clave,correo,tipo)";
	$sql.= "VALUES ('".$id_usuario."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$usuario."','".$clave."','".$correo."','".$tipo."')";
	
	mysql_query($sql, $conexion);
	echo 'OK';
}

# Modelo para actualizar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["u_nombre1_reclamaciones"])) {
	$id_usuario = $_POST["u_id_usuario_reclamaciones"];
	$nombre1 = $_POST["u_nombre1_reclamaciones"];
	$nombre2 = $_POST["u_nombre2_reclamaciones"];
	$apellido1 = $_POST["u_apellido1_reclamaciones"];
	$apellido2 = $_POST["u_apellido2_reclamaciones"];
	$usuario = $_POST["u_usuario_reclamaciones"];
	$clave = $_POST["u_clave_reclamaciones"];
	$correo = $_POST["u_correo_reclamaciones"];
	$tipo = $_POST["u_tipo_reclamaciones"];
	
	$sql = "UPDATE usuarios_reclamaciones SET nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',usuario='$usuario',clave='$clave',correo='$correo',tipo='$tipo' WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
	echo 'OK';
}

# Modelo para eliminar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["d_confirmar_reclamaciones"])) {
	$id_usuario = $_POST["d_id_usuario_reclamaciones"];
	
	$sql = "DELETE FROM usuarios_reclamaciones WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
	echo 'OK';
}




#
#
# USUARIOS DE RYG
#
#



# Modelo para registrar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["nombre1_ryg"])) {
	$id_usuario = 0;
	$nombre1 = $_POST["nombre1_ryg"];
	$nombre2 = $_POST["nombre2_ryg"];
	$apellido1 = $_POST["apellido1_ryg"];
	$apellido2 = $_POST["apellido2_ryg"];
	$usuario = $_POST["usuario_ryg"];
	$clave = $_POST["clave_ryg"];
	$correo = $_POST["correo_ryg"];
	$tipo = $_POST["tipo_ryg"];
	
	$sql = "INSERT INTO usuarios_ryg (id_usuario,nombre1,nombre2,apellido1,apellido2,usuario,clave,correo,tipo)";
	$sql.= "VALUES ('".$id_usuario."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$usuario."','".$clave."','".$correo."','".$tipo."')";
	
	mysql_query($sql, $conexion);
	echo 'OK';
}

# Modelo para actualizar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["u_nombre1_ryg"])) {
	$id_usuario = $_POST["u_id_usuario_ryg"];
	$nombre1 = $_POST["u_nombre1_ryg"];
	$nombre2 = $_POST["u_nombre2_ryg"];
	$apellido1 = $_POST["u_apellido1_ryg"];
	$apellido2 = $_POST["u_apellido2_ryg"];
	$usuario = $_POST["u_usuario_ryg"];
	$clave = $_POST["u_clave_ryg"];
	$correo = $_POST["u_correo_ryg"];
	$tipo = $_POST["u_tipo_ryg"];
	
	$sql = "UPDATE usuarios_ryg SET nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2',usuario='$usuario',clave='$clave',correo='$correo',tipo='$tipo' WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
	echo 'OK';
}

# Modelo para eliminar un usuario en la tabla usuarios
# Sistema: CRM Equipo

if (isset($_POST["d_confirmar_ryg"])) {
	$id_usuario = $_POST["d_id_usuario_ryg"];
	
	$sql = "DELETE FROM usuarios_ryg WHERE id_usuario = $id_usuario";
    
	mysql_query($sql, $conexion);
	echo 'OK';
}




?>