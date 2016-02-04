<tr>
	<td style="background-color:#ffffff;">
		<?php include('view/v.asignaciones.admin.td2.php') ?>
	</td>
	<td style="background-color:#ffffff;">
		<?php include('view/v.asignaciones.admin.td3.php') ?>
	</td>
	<td style="background-color:#ffffff;">
		<?php 
			$idedit = $rows['id'];
			$row['id'] = $idedit;
			$row['asignadoa'] = $rows['asignadoa'];
			$row['estadodeventa'] = $rows['estadodeventa'];
			$row['asignadoa'] = $rows['asignadoa'];

			if ($row['estadodeventa'] == '' OR $row['estadodeventa'] == '0') {
    				
    				echo '<br />';
    
				if ($row['asignadoa'] == '') {
					
					echo '<b>Aún sin asignación</b>';

				}
    				
    				# \ Para no mostrar la asignación de Perl en 0
				else { 
					
					if ($row['asignadoa'] == '0') {
						
						echo '<b>Aún sin asignación</b>';   
				      	}
					
					else {
						
						echo '<b>Asignado a:</b>'.$row['asignadoa'].'';
					}
    				}
				#  / Para no mostrar la asignación de Perl en 0

				echo '<br />';

				echo '<i>'.$row['comentariovendedor'].'</i>';

			}
			
			else  { 

			}			

			include('inc/i.form.asignar-seguimiento.php');
		?>
	</td>
	<td style="background-color:#ffffff;">
		<?php include('model/m.panel.administrador-eliminar.php') ?>
		<?php include('view/v.asignaciones.admin.td5.php') ?>
	</td>
</tr>