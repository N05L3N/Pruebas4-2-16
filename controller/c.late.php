<?php

include('inc/menu-superior.php');

$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';

# $dbh
# $dbu
# $dbp

# PAGINATION

const HOST = 'localhost';
const USER = 'ucrmk';
const PASSWD = 'Pcrmk#2014';
const DB = 'crmk';
const TABLE = 'contacto';
const TABLE2 = 'ecrm_comentarios_v';

/* variables */
$order="id DESC";
$order2="id_seguimiento DESC";
$url = basename($_SERVER ["PHP_SELF"]);

if ($_SESSION['form-filters-status'] != '') {
  $limit_end = 1000;
}
else {
  $limit_end = 50;  
}

$init = ($ini-1) * $limit_end;

# / PAGINATION



$buscador = $_SESSION['buscador'];

  if ($buscador != '') {
      # $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') AND asignadoa = '$usuario'";
      $select = "SELECT *FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') AND asignadoa = '$usuario' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

  }

  else {

  if ($fecha_inicio_filtro == '--') {

      if ($_SESSION['form-filters-status'] != '') {
          $formFiltersStatus = $_SESSION['form-filters-status'];
          $count="SELECT COUNT(*) FROM ".TABLE2." WHERE usuario = '$usuario' AND horaasignacion != 'ok' AND estadodeventa = '$formFiltersStatus'";
          $select = "SELECT *FROM ".TABLE2." WHERE usuario = '$usuario' AND horaasignacion != 'ok' AND estadodeventa = '$formFiltersStatus' ORDER BY $order2";
          $select .= " LIMIT $init, $limit_end";
      }

      /*Con busqueda*/
      else if ($_POST['filtro1_2'] != '') {

          $filtro1_1 = $_POST['filtro1_1'];
          $filtro1_2 = $_POST['filtro1_2'];

            if ($filtro1_1 == 'fechaasignacion') {
                $filtro1_2E = explode("-", $filtro1_2);
                $filtro1_2 = ''.$filtro1_2E[2].'-'.$filtro1_2E[1].'-'.$filtro1_2E[0].'';
            }
            else {

            }





$usuario = $_SESSION["usuario"];
  $dia = date(d);
  $mes = date(m);
  $ano = date(Y);

  $hora24 = date(G);


  if ($hora24 == 0 OR $hora24 == 1 OR $hora24 == 2 OR $hora24 == 3 ) {
    $dia = $dia-1;
  }

  else {
   
  }


  $minuto = date(m);

  $fecha_actual = ''.$ano.'-'.$mes.'-'.$dia.'';

$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima < '$fecha_actual' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' ORDER BY id_comentarios_v desc limit 1000");

$i = 0;
while ($row = mysql_fetch_array($result)) {
        if ($i > 0) {}
            $id_seguimiento= $row['id_seguimiento'];
            
            if ($id_seguimiento == '') {
              
            }
            else {
              $fxy = ''.$fxy.'id = '.$id_seguimiento.' OR ';  
            }
            
        $i++; 
}

      $where = substr($fxy, 0, -4);

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE ($where) AND $filtro1_1 LIKE '%$filtro1_2%'";
      $select = "SELECT * FROM ".TABLE." WHERE ($where) AND $filtro1_1 LIKE '%$filtro1_2%' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      
      }
      /*Con busqueda*/

      


  # < / DEFAULT SIN FILTROS>
      else {
      

$usuario = $_SESSION["usuario"];
$dia = date(d);
$mes = date(m);
$ano = date(Y);
$fecha_actual = ''.$ano.''.$mes.''.$dia.'';

$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima < '$fecha_actual' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' ORDER BY id_comentarios_v desc limit 1000");
$i = 0;
while ($row = mysql_fetch_array($result)) {
        if ($i > 0) {}
            $id_seguimiento= $row['id_seguimiento'];
            
            if ($id_seguimiento == '') {
              
            }
            else {
              $fxy = ''.$fxy.'id = '.$id_seguimiento.' OR ';  
            }
            
        $i++; 
}

      $where = substr($fxy, 0, -4);
      
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE $where";
      $select = "SELECT * FROM ".TABLE." WHERE $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
              $_SESSION['a15012801'] =  '<pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;"><br>'.$where.'</pre>';
        $_SESSION['a15012802'] =  '<pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;">'.$count.'<br>'.$select.'</pre>';
      }
      # < / DEFAULT SIN FILTROS>





    }

    else {      

      # FILTRO POR FECHAS
      # Desactivado Temporalmente
     $usuario = $_SESSION["usuario"];
$dia = date(d);
$mes = date(m);
$ano = date(Y);
$fecha_actual = ''.$ano.''.$mes.''.$dia.'';

$result = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE usuario = '$usuario' AND fechaproxima < '$fecha_actual' AND horaasignacion != 'ok' AND horaasignacion != 'oktemporal' AND estadodeventa != 'descartado' ORDER BY id_comentarios_v desc limit 1000");
$i = 0;
while ($row = mysql_fetch_array($result)) {
        if ($i > 0) {}
            $id_seguimiento= $row['id_seguimiento'];
            
            if ($id_seguimiento == '') {
              
            }
            else {
              $fxy = ''.$fxy.'id = '.$id_seguimiento.' OR ';  
            }
            
        $i++; 
}

      $where = substr($fxy, 0, -5);
      
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE $where";
      $select = "SELECT * FROM ".TABLE." WHERE $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      #echo '<pre>'. $select .'</pre>';

    }

  } // Termina ELSE del Buscador

         

# PAGINATION >

$mysql = new mysqli(HOST, USER, PASSWD, DB);

$num = $mysql->query($count);
$x = $num->fetch_array();

$total = ceil($x[0]/$limit_end);

# PAGINATION <

?>