<?php
	
#	include('inc/menu-superior.php');

/*
	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
	echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
	setlocale(LC_ALL,"es_ES");
*/

	$d = strtotime("last Monday");
	$vencimientos_lunes = date("d M", $d) . "";
	$vencimientos_query1a = date("Y-m-d", $d) . "";

	$d = strtotime("next Sunday");
	$vencimientos_domingo = date("d M", $d) . "";
	$vencimientos_query1b = date("Y-m-d", $d) . "";

	$d = strtotime("next Monday");
	$vencimientos_lunes2 = date("d M", $d) . "";
	$vencimientos_query2a = date("Y-m-d", $d) . "";

	$d = strtotime("next Sunday +1 week");
	$vencimientos_domingo2 = date("d M", $d) . "";
	$vencimientos_query2b = date("Y-m-d", $d) . "";

	$where = "(fecha_final >= '$vencimientos_query1a' AND fecha_final <= '$vencimientos_query1b') AND ";
	include('view/v.vencimientos.00.php');
?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-top:-70px;">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none;">
					<div style="width:100%;">
						Esta Semana <small style="color:#aaa; margin-left:15px;"><?= $vencimientos_lunes ?> - <?= $vencimientos_domingo ?></small>
						<span class="badge" style="float:right;"><?= $i  ?></span>
					</div>
				</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			<div class="panel-body">
<?php

	include('view/v.vencimientos.01.php');


	$where = "(fecha_final >= '$vencimientos_query2a' AND fecha_final <= '$vencimientos_query2b') AND ";
	include('view/v.vencimientos.00.php');
?>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none;">
					<div style="width:100%;">
						La Próxima Semana <small style="color:#aaa; margin-left:15px;"><?= $vencimientos_lunes2 ?> - <?= $vencimientos_domingo2 ?></small>
						<span class="badge" style="float:right;"><?= $i  ?></span>
					</div>
				</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			<div class="panel-body">
				
<?php

	include('view/v.vencimientos.01.php');
	

	$where = "(fecha_final > '$vencimientos_query2b') AND ";
	include('view/v.vencimientos.00.php');		
?>

			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;">
					<div style="width:100%;">
						Más Tarde <small style="color:#aaa; margin-left:15px;">Después <?= $vencimientos_domingo2 ?></small>
						<span class="badge" style="float:right;"><?= $i  ?></span>
					</div>
				</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<div class="panel-body">
<?php

	include('view/v.vencimientos.01.php');
			
?>
			</div>
		</div>
	</div>
</div>