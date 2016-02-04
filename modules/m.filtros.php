<?php
	
	if($_SESSION["tipo"] == 'administrador' || $_SESSION["tipo"] == 'programador') {

?>

	<table class="table table-bordered table-striped" style="width:90%; margin:auto;">
		<tr>
			<td>
				<?php
					include('modules/m.filtro.vendedor.php');
				?>
			</td>
		</tr>
	</table>

<?php

	}
	
	else {

	}	

?>