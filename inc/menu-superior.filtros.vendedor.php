<?php

if ($_GET['s'] == 'f') {
	
	$linkMenuFac = 'asignaciones'; 
	$colorMenuFac = 'success';

}

else {
	
	$linkMenuFac = 'asignaciones?s=f';
	$colorMenuFac = 'default';

}

if ($_SESSION['form-filters-status'] == 'Caliente') {
	
	$colorMenuCal = 'danger';

}

else {

	$colorMenuCal = 'default';

}

if ($_SESSION['form-filters-status'] == 'tibio') {

	$colorMenuTib = 'warning';

}

else {

	$colorMenuTib = 'default';
	
}

 if ($_SESSION['form-filters-status'] == 'frio') {
	
	$colorMenuFri = 'info';

}

else {

	$colorMenuFri = 'default';
	
}

$h4 = $_SESSION["h4"];

if ($h4 == 'Hoy') {
	
	$diaryColor = 'success';

}

else {
	
	$diaryColor = 'default'; 
}

if ($h4 == 'Asignaciones') {
	
	$asignacionesColor = 'primary';

}

else {

	$asignacionesColor = 'default'; 

}

if ($h4 == 'late') {
	
	$lateColor = 'danger';

}

else {
	
	$lateColor = 'default'; 

}

?>

<li><span style="margin-left:20px; font-weight:bold;"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtros:</span></li>
<li class="divider"></li>
<li><a href="<?= $linkMenuFac ?>"><button type="button" class="btn btn-<?= $colorMenuFac ?> btn-xs" onclick="document.getElementById('form-filters-status1').submit();" style="width:100px; text-align:left;">Facturados</button></a></li>
<br>
<li><form action="asignaciones.php" method="post" id="form-filters-status1"><input type="hidden" name="form-filters-status" value="Caliente" readonly="readonly"><button type="button" class="btn btn-<?= $colorMenuCal ?> btn-xs" onclick="document.getElementById('form-filters-status1').submit();" style="width:100px; text-align:left;">Calientes</button></form></li>
<br>
<li><form action="asignaciones.php" method="post" id="form-filters-status2"><input type="hidden" name="form-filters-status" value="tibio" readonly="readonly"><button type="button" class="btn btn-<?= $colorMenuTib ?> btn-xs" onclick="document.getElementById('form-filters-status2').submit();" style="width:100px; text-align:left;">Tibios</button></form></li>
<br>
<li><form action="asignaciones.php" method="post" id="form-filters-status3"><input type="hidden" name="form-filters-status" value="frio" readonly="readonly"><button type="button" class="btn btn-<?= $colorMenuFri ?> btn-xs" onclick="document.getElementById('form-filters-status3').submit();" style="width:100px; text-align:left;">Frios</button></form></li>
<br>
<li><form action="asignaciones.php" method="post" id="form-filters-status4"><input type="hidden" name="form-filters-status" value="" readonly="readonly"><button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('form-filters-status4').submit();" style="width:100px; text-align:left;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Quitar Filtro</button></form></li>

<li class="divider"></li>
<li><a href="trash">Descartados: <span class="badge"><?= $numero_descartados ?></span></a></li>
<li class="divider"></li>

<li><a href="exit/">Cerrar Sesión</a></li>
</ul>
</li>

<li>
<a href="diary">
Hoy » <button type="button" class="btn btn-<?= $diaryColor ?> btn-xs"><?= $numero_asignacionesHoy ?></button>
</a>
</li>

<li>
<a href="asignaciones">
Asignaciones » <button type="button" class="btn btn-<?= $asignacionesColor ?> btn-xs"><?= $numero_asignacionesTotal ?></button>
</a>
</li>

<li>
<a href="late">
<!-- Pendientes --> Atrasados » <button type="button" class="btn btn-<?= $lateColor ?> btn-xs"> <?= $numero_pendientes?></button>
</a>
</li>