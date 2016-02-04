<?php
	
	# Config
	
	# $usuario = $_SESSION['usuario'];
	$lock_calendarInfo = '1';

	if ($usuario == 'eurrutia' OR $usuario == 'aarvizo') {
		
?>

<div role="tabpanel">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#ccastillo" aria-controls="ccastillo" role="tab" data-toggle="tab">Cesar Castillo</a></li>
    		<li role="presentation"><a href="#sdelacruz" aria-controls="sdelacruz" role="tab" data-toggle="tab">Said de la Cruz</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="ccastillo">
			<?php

				$usuario = "ccastillo";
				include('view/v.iframe-calendario-menu.vendedor.php');

			?>
		</div>
		<div role="tabpanel" class="tab-pane" id="sdelacruz">
			<?php

				$usuario = "sdelacruz";
				include('view/v.iframe-calendario-menu.vendedor.php');

			?>
		</div>
	</div>
</div>

<?php

	}

	else {

		include('view/v.iframe-calendario-menu.vendedor.php');

	}

	

?>