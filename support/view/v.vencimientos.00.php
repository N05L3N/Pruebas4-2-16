<?php

	$asignacion_query = mysql_query("SELECT age FROM ecrm_asignacion WHERE $where age = 1 ORDER BY id_ecrm_asignacion DESC");

	$i = 0;
	while ($row = mysql_fetch_array($asignacion_query)) {
		if ($i > 0) {}

	$i++; 
	}
?>	