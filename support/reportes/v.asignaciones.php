<?php
# Incluir Filtro por fecha

if ($_SESSION["id_view"] == 'diary' OR $_SESSION["id_view"] == 'late') {

}

else {

?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="width:75%; margin:auto;">
  <li class="active">
    <a href="#home" role="tab" data-toggle="tab">
      Fecha de Contacto
      <?= ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].''; ?>
    </a>
  </li>

<?php
  
  if($_SESSION["tipo"] == 'administrador' || $_SESSION["tipo"] == 'programador'){

  ?>
  <li><a href="#profile" role="tab" data-toggle="tab">Vendedor</a></li>
<?php
  }
  
  else {
  
  }
?>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="width:75%; margin:auto;">
  <div class="tab-pane active" id="home">
    <?php include('modules/m.filtro.fecha.php'); ?>
  </div>
  <div class="tab-pane" id="profile">
      <?php include('modules/m.filtro.vendedor.php'); ?>
  </div>
</div>
<?php
}
?>


<div class="table-responsive">
<br>
	<table class="table table-bordered table-striped" style="width:75%; margin:auto;">
		<caption style="background-color:White;">
			 <h4><?= $_SESSION["h4"] ?></h4>
		</caption>
<?php
	# TR
	include('view/v.asignaciones-01.php');
	
	$c = $mysql->query($select);
	
	while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

	# TD
	include('view/v.asignaciones-02.php');

	}

?>
	</tbody>
<table>
</div>

<center>
<div style="margin:auto;">
	<ul class="pagination pagination-sm">

<?php   
	/*
	if(($ini - 1) == 0) {
		echo "<li><a href='#'>&laquo;</a></li>";
	}
	
	else {
		echo "<li><a href='$url?pos=".($ini-1)."'><b>&laquo;</b></a></li>";
	}
	*/

	for($k=1; $k <= $total; $k++) {
		if($ini == $k) {
?>
		<li class="active"><a href='#'><b><?= $k ?></b></a></li>
<?php	
		}
		
		else {
?>			
		<li><a href='<?= $url ?>?pos=<?= $k ?>'><?= $k ?></a></li>
<?php
		}
	}
	/*
	if($ini == $total) {
	*/
?>
		<!-- <li><a href='#'>&raquo;</a></li> -->
<?php
/*
	}
	
	else {		
		echo "<li><a href='$url?pos=".($ini+1)."'><b>&raquo;</b></a></li>";
	}
*/
?>
	</ul>
</div>
<center>