<?php

	include('inc/menu-superior.php');

?>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Importar base de datos</h3>
			</div>
			<div class="panel-body">
<?php
	
	if ($_GET['v'] == 'dev') {
		include('view/v.import.02.php');
	}
	else {
		include('view/v.import.01.php');
	}
	

?>
			</div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>