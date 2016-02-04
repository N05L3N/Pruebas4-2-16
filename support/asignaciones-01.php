<?php

const HOST = 'localhost';
const USER = 'ucrmk';
const PASSWD = 'Pcrmk#2014';
const DB = 'crmk';
const TABLE = 'contacto';

/* variables */
$order="id ASC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 50;
$init = ($ini-1) * $limit_end;

/* querys */
$count="SELECT COUNT(*) FROM ".TABLE."";
$select = "SELECT *FROM ".TABLE." ORDER BY $order";
$select .= " LIMIT $init, $limit_end";

/* conexión al servidor de base de datos */
$mysql = new mysqli(HOST, USER, PASSWD, DB);

if ($mysql->connect_error) 
{
  die("Error al conectarse al servidor");
   
}else{
   
  $num = $mysql->query($count);
  $x = $num->fetch_array();
 
  $total = ceil($x[0]/$limit_end);
?>

<table border='1' class='table table-bordered table-hover'>
	<thead>
		<tr>
			<th><b>Folio</b></th>
			<th><b>Nombre</b></th>
			<th><b>País</b></th>
		</tr>
	</thead>
<tbody>

<?php
  $c = $mysql->query($select);
  while($rows = $c->fetch_array(MYSQLI_ASSOC))
  {
?>
	<tr>
    		<td><?= $rows['id'] ?></td>
    		<td><?= $rows['nombre'] ?></td>
    		<td><?= $rows['pais'] ?></td>
    </tr>

<?php
  }
 
  echo "</tbody>";
  echo "<table>";
 
  /* numeración de registros [importante]*/
  echo "<div class='pagination'>";
  echo "<ul>";
  /****************************************/
  if(($ini - 1) == 0)
  {
    echo "<li><a href='#'>&laquo;</a></li>";
  }
  else
  {
    echo "<li><a href='$url?pos=".($ini-1)."'><b>&laquo;</b></a></li>";
  }
  /****************************************/
  for($k=1; $k <= $total; $k++)
  {
    if($ini == $k)
    {
      echo "<li><a href='#'><b>".$k."</b></a></li>";
    }
    else
    {
      echo "<li><a href='$url?pos=$k'>".$k."</a></li>";
    }
  }
  /****************************************/
  if($ini == $total)
  {
    echo "<li><a href='#'>&raquo;</a></li>";
  }
  else
  {
    echo "<li><a href='$url?pos=".($ini+1)."'><b>&raquo;</b></a></li>";
  }
  /*******************END*******************/
  echo "</ul>";
  echo "</div>";
}
?>