<?phpheader('P3P: CP="CAO PSA OUR"');$idedit = $_SESSION["idedit"];#require("local/conexion-insert.php");#$conexion = mysql_connect("localhost", "jcnoble", "") or trigger_error(mysql_error(),E_USER_ERROR); $conexion = mysql_connect("localhost", "jcnoble", "4tp2009jk") or trigger_error(mysql_error(),E_USER_ERROR); mysql_select_db("jcnoble", $conexion); if (isset($_POST["usuario"])) {	$id = '0';	$usuario = $_POST["usuario"];	$asignacion = $idedit;	$estadodeventa = $_POST["estadodeventa"];	$comentariovendedor = $_POST["comentariovendedor"];	$factura = $_POST["factura"];	$fechaasignacion = $_POST["fechaasignacion"];		$horaasignacion = $_POST["horaasignacion"];	$fecharespuesta = $_POST["fecharespuesta"];	$horarespuesta = $_POST["horarespuesta"];	$idedit = $_POST["idedit"];	$sql = "INSERT INTO eqasignacion (id, usuario, asignacion, estadodeventa,  comentariovendedor, factura, fechaasignacion, horaasignacion, fecharespuesta, horarespuesta) ";    $sql.= "VALUES ('".$id."', '".$usuario."', '".$asignacion."', '".$estadodeventa."', '".$comentariovendedor."', '".$factura."', '".$fechaasignacion."', '".$horaasignacion."', '".$fecharespuesta."', '".$horarespuesta."')";			mysql_query($sql, $conexion);		# Se omite el envio por lo pronto	# header('Location: select-asignacion.php');	# header('Location: index.php');	echo 'Registrado';	}?>