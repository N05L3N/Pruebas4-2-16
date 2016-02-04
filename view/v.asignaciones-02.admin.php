<tr>
	<td style="background-color:#ffffff;" width="5%">
		<?php include('view/v.asignaciones.admin.td2.php') ?>
	</td>
	<td style="background-color:#ffffff;" width="20%">
		<?php include('view/v.asignaciones.admin.td3.php') ?>
	</td>
	<td style="background-color:#ffffff;" width="50%">

<?php

	$id_duplicate = $rows['id'];
	$nombre_duplicate = $rows['nombre'];
	$email_duplicate = $rows['email'];
	$telefono_duplicate = $rows['telefono'];
	
	$q_duplicate = mysql_query("SELECT * FROM contacto WHERE (email = '$email_duplicate') ORDER BY id ASC LIMIT 1");
	#$q_duplicate = mysql_query("SELECT * FROM contacto WHERE (nombre = '$nombre_duplicate' OR email = '$email_duplicate') ORDER BY id DESC");
    
  	$i_duplicate = 0;

	while ($r_duplicate = mysql_fetch_array($q_duplicate)) {

		if ($i_duplicate > 0) {}

			$r_duplicateId = $r_duplicate['id'];
			$r_duplicateNombre = $r_duplicate['nombre'];
			$r_duplicateEmail = $r_duplicate['email'];
			$r_duplicateTelefono = $r_duplicate['telefono'];
			$r_duplicateAsignadoa = $r_duplicate['asignadoa'];
?>

	<table class="table table-bordered table-condensed">
		<tr>
			<th>Folio</th>
			<!--
			<th>Nombre</th>
			<th>Email</th>
			<th>Teléfono</th>
			-->
			<th>Asignado a:</th>
		</tr>
		<tr>
			<td>
				<a href="cliente.php?id=<?= $r_duplicateId ?>">
					<span class="label label-default">
						<?= $r_duplicateId ?>
					</span>
				</a>
			</td>
			<!--
			<td><?= $r_duplicateNombre ?></td>
			<td><?= $r_duplicateEmail ?></td>
			<td><?= $r_duplicateTelefono ?></td>
			-->
			<td>
				<?php
					if ($r_duplicateAsignadoa == '' OR $r_duplicateAsignadoa == '.') {
						echo '';
					}

					else {
						echo '' .$r_duplicateAsignadoa. '';
					}
				?>
			</td>
		</tr>
	</table>

<?php

	}

	$i_duplicate++;

?>


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
						
					#	echo '<b>Asignado a:</b>'.$row['asignadoa'].'';
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
	<td style="background-color:#ffffff;" width="25%">
		<?php include('model/m.panel.administrador-eliminar.php') ?>
		<?php include('view/v.asignaciones.admin.td5.php') ?>
	</td>
</tr>