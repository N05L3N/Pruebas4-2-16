<?php
	
	if ($_SESSION['tipo'] == 'administrador') {
		
		$q = mysql_query("SELECT DISTINCT (id_seguimiento) FROM ecrm_comentarios_v WHERE horaasignacion = 'ok' AND estadodeventa = 'facturado'  AND id_seguimiento != '' ORDER BY id_comentarios_v desc limit 1000");	

	}

	else {
		$usuario = $_SESSION['usuario'];
		$q = mysql_query("SELECT DISTINCT (id_seguimiento) FROM ecrm_comentarios_v WHERE horaasignacion = 'ok' AND estadodeventa = 'facturado'  AND id_seguimiento != '' AND usuario = '$usuario' ORDER BY id_comentarios_v desc limit 1000");

	}
	

	$i = 0;

	while ($r = mysql_fetch_array($q)) {

		if ($i > 0) {}

		$fxy = ''.$fxy.'id = '.$r['id_seguimiento'].' OR ';

		$i++;

	}

	$where = substr($fxy, 0, -4);

	$count="SELECT COUNT(*) FROM ".TABLE." WHERE $where";
	$select = "SELECT * FROM ".TABLE." WHERE $where ORDER BY $order";
	$select .= " LIMIT $init, $limit_end";

?>