<?php

  $usuario = $_SESSION['usuario'];

if ($_GET['calendar'] == '1501') {
$active01 = 'in';
}
else if ($_GET['calendar'] == '1502') {
$active02 = 'in';
}
else if ($_GET['calendar'] == '1503') {
$active03 = 'in';
}
else if ($_GET['calendar'] == '1504') {
$active04 = 'in';
}
else if ($_GET['calendar'] == '1505') {
$active05 = 'in';
}
else if ($_GET['calendar'] == '1506') {
$active06 = 'in';
}
else if ($_GET['calendar'] == '1507') {
$active07 = 'in';
}
else if ($_GET['calendar'] == '1508') {
$active08 = 'in';
}
else if ($_GET['calendar'] == '1509') {
$active09 = 'in';
}
else if ($_GET['calendar'] == '1510') {
$active10 = 'in';
}
else if ($_GET['calendar'] == '1511') {
$active11 = 'in';
}
else if ($_GET['calendar'] == '1512') {
$active12 = 'in';
}
else {

}



?>

<style>
	body {
		overflow-x:hidden;
		background-color: #fff;
	}
</style>

<div style="margin-top:-50px;">

<ul class="nav nav-tabs" role="tablist">
<li><a href="#pr1" role="tab" data-toggle="tab">Agenda 2014</a></li>
<li><a href="#pr2" role="tab" data-toggle="tab">Agenda 2015 <?= $tiempoChihuahua ?></a></li>
<li class="active"><a href="#pr3" role="tab" data-toggle="tab">Agenda 2016 <?= $tiempoChihuahua ?></a></li>
</ul>

			
<div class="tab-content"> 
<?php
  include('v.iframe-calendario-2014.php');
  include('v.iframe-calendario-2015.php');
  include('v.iframe-calendario-2016.php');
?>
</div>