<?php

	$result_vendedores_actuales_filtro = mysql_query("SELECT * FROM usuarios ORDER BY nombre1 ASC limit 0,1000");
	
	$i_vendedores_actuales = 0;
	
	while ($row_vendedores_actuales = mysql_fetch_array($result_vendedores_actuales_filtro)) {
		if ($i_vendedores_actuales > 0) {
		}
			
			if ($row_vendedores_actuales['tipo'] == 'administrador' OR $row_vendedores_actuales['tipo'] == 'soporte') {
				
			}
			else {

				if ($filtrarporvendedor == $row_vendedores_actuales['usuario'] OR $row['asignadoa'] == $row_vendedores_actuales['usuario']) {
					echo "<option value=".$row_vendedores_actuales['usuario']." selected>".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";
				}
				else {
					echo "<option value=".$row_vendedores_actuales['usuario'].">".$row_vendedores_actuales['nombre1']." ".$row_vendedores_actuales['apellido1']."</option>";	
				}
				
			}

	}

	$i_vendedores_actuales++;

?>