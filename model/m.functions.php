<?php

# Función para identificar los vendedores actuales

function selectVendedores() {

	$selectVendedores_q = mysql_query("SELECT usuario FROM usuarios WHERE tipo = 'vendedor' ORDER BY usuario ASC ");

	$selectVendedores_i = 1;

	while ($selectVendedores_r = mysql_fetch_array($selectVendedores_q)) {

		if ($selectVendedores_i > 0) {
	
		}

		$selectVendedores = '' . $selectVendedores . '' . $selectVendedores_r['usuario'] . ', ';

		$selectVendedores_i++;
	
	}

}


# Vista general de registros

function identificaProspectacion($x) {
	
	if ($x == 'sdelacruz' OR $x == 'ccastillo' OR $x == 'dfernandez') {
		
		echo 'Prospecto';

	}

	else {
		
		echo 'CRM';

	}

}

?>