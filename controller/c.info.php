<?php

echo '<style>pre {background-color: #112435;color:#f4dd0b;width: 100%;}</style>';

 

$filterDate1E = explode("-", $_POST['filterDate1']);
$filterDate1 = ''.$filterDate1E[2].'-'.$filterDate1E[1].'-'.$filterDate1E[0].'';
$filterDate2E = explode("-", $_POST['filterDate2']);
$filterDate2 = ''.$filterDate2E[2].'-'.$filterDate2E[1].'-'.$filterDate2E[0].'';
$filtrarStatus = $_POST['filtrarStatus'];

	if ($_SESSION["tipo"] == 'vendedor') {
		$filtrarporvendedor  = $_SESSION["usuario"];
	}
	else {
		$filtrarporvendedor = $_POST["filtrarporvendedor"];
	}

include('inc/menu-superior.php');

require('controller/c.history-query.php');

# PAGINATION
const HOST = 'localhost';
const USER = 'ucrmk';
const PASSWD = 'Pcrmk#2014';
const DB = 'crmk';
const TABLE = 'contacto';
const TABLE2 = 'ecrm_comentarios_v';

/* variables */


$orderFolio = $_GET['orderFolio'];
$orderUsuario = $_GET['orderUsuario'];
$orderComentario = $_GET['orderComentario'];
$orderFecha = $_GET['orderFecha'];
$orderProximaLlamada = $_GET['orderProximaLlamada'];
$orderStatus = $_GET['orderStatus'];

$orderList = 'fecharespuesta DESC';

if ($orderFolio != '') {
    $orderList = 'id_comentarios_v '.$orderFolio.'';
}
else {
}

if ($orderUsuario != '') {
    $orderList = 'usuario '.$orderUsuario.'';
}
else {
}

if ($orderComentario != '') {
    $orderList = 'comentariovendedor '.$orderComentario.'';
}
else {
}

if ($orderFecha != '') {
    $orderList = 'fecharespuesta '.$orderFecha.'';
}
else {
}

if ($orderProximaLlamada != '') {
    $orderList = 'fechaproxima '.$orderProximaLlamada.'';
}
else {
}

if ($orderStatus != '') {
    $orderList = 'estadodeventa '.$orderStatus.'';
}
else {
}

$order = $orderList;
$url = basename($_SERVER ["PHP_SELF"]);

if ($filtrarporvendedor == '') {
  $limit_end = 100;
}
else {
 $limit_end = 100;
}


$init = ($ini-1) * $limit_end;

# / PAGINATION

echo '<p>' . $WHERE . '' . $whereUser . '' . $whereDate . '' . $whereStatus . '</p>';

$count="SELECT COUNT(*) FROM ".TABLE."";
$select = "SELECT * FROM ".TABLE."";
$select .= " LIMIT $init, $limit_end";

# PAGINATION >

$mysql = new mysqli(HOST, USER, PASSWD, DB);

$num = $mysql->query($count);
$x = $num->fetch_array();

$total = ceil($x[0]/$limit_end);

# PAGINATION <

$filterDate1E = explode("-", $filterDate1);
$filterDate1 = ''.$filterDate1E[2].'-'.$filterDate1E[1].'-'.$filterDate1E[0].'';
$filterDate2E = explode("-", $filterDate2);
$filterDate2 = ''.$filterDate2E[2].'-'.$filterDate2E[1].'-'.$filterDate2E[0].'';



/* Table Records */
    
include('controller/c.history-table-01.php');
include('controller/c.history-table-02.php');

?> 