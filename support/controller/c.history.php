<?php

include('inc/menu-superior.php');

$fecha_inicio_filtro = ''.$_SESSION["v3"].'-'.$_SESSION["v2"].'-'.$_SESSION["v1"].'';
$fecha_fin_filtro = ''.$_SESSION["v33"].'-'.$_SESSION["v22"].'-'.$_SESSION["v11"].'';

$fecha_inicio_filtro_mx = ''.$_SESSION["v1"].'-'.$_SESSION["v2"].'-'.$_SESSION["v3"].'';
$fecha_fin_filtro_mx = ''.$_SESSION["v11"].'-'.$_SESSION["v22"].'-'.$_SESSION["v33"].'';

$filtrarporvendedor = ''.$_SESSION["filtrarporvendedor"].'';


if ($fecha_inicio_filtro != '--') {
  $whereFechaRango = "AND (fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro')";
}
else {
  $whereFechaRango = '';
}


# $dbh
# $dbu
# $dbp

# PAGINATION
const HOST = 'localhost';
const USER = 'ucrmk';
const PASSWD = 'Pcrmk#2014';
const DB = 'crmk';
const TABLE = 'contacto';
const TABLE2 = 'ecrm_comentarios_s';

/* variables */


$orderFolio = $_GET['orderFolio'];
$orderUsuario = $_GET['orderUsuario'];
$orderComentario = $_GET['orderComentario'];
$orderFecha = $_GET['orderFecha'];
$orderProximaLlamada = $_GET['orderProximaLlamada'];
$orderStatus = $_GET['orderStatus'];

$orderList = 'fecharespuesta DESC';

if ($orderFolio != '') {
    $orderList = 'id_comentarios_s '.$orderFolio.'';
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
  $limit_end = 1000;  
}
else {
 $limit_end = 5000;   
}


$init = ($ini-1) * $limit_end;

# / PAGINATION



$buscador = $_SESSION['buscador'];
$filtrarStatus = $_POST['filtrarStatus'];


  if ($_SESSION['tipo'] == 'administrador') {
    if ($buscador != '') {

      if ($filtrarporvendedor != '') {
        # <VENDEDOR>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') $where $whereFechaRango";
      $select = "SELECT * FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' OR formulario LIKE '%$buscador%') AND (fecha >= '2000-08-28' AND estadodeventa != 'descartado') $where $whereFechaRango ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      echo '<pre style="background-color:purple;">' .$select. '</pre>';  
      # </VENDEDOR>
      }

      else {
      # <BUSCADOR>
      $count="SELECT COUNT(*) FROM ".TABLE2." WHERE ( id_comentarios_s LIKE '%$buscador%' OR id_seguimiento LIKE '%$buscador%' OR usuario LIKE '%$buscador%' OR termometro LIKE '%$buscador%' OR estadodeventa LIKE '%$buscador%' OR comentariovendedor LIKE '%$buscador%' OR factura LIKE '%$buscador%' OR fechaasignacion LIKE '%$buscador%' OR horaasignacion LIKE '%$buscador%' OR fecharespuesta LIKE '%$buscador%' OR horarespuesta LIKE '%$buscador%' OR fechaproxima LIKE '%$buscador%') ";
      $select = "SELECT * FROM ".TABLE2." WHERE ( id_comentarios_s LIKE '%$buscador%' OR id_seguimiento LIKE '%$buscador%' OR usuario LIKE '%$buscador%' OR termometro LIKE '%$buscador%' OR estadodeventa LIKE '%$buscador%' OR comentariovendedor LIKE '%$buscador%' OR factura LIKE '%$buscador%' OR fechaasignacion LIKE '%$buscador%' OR horaasignacion LIKE '%$buscador%' OR fecharespuesta LIKE '%$buscador%' OR horarespuesta LIKE '%$buscador%' OR fechaproxima LIKE '%$buscador%') ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      echo '<pre style="background-color:black;">' .$select. '</pre>';  
      # </BUSCADOR>
      }

      

  }

  else {

  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor != '') {
        # <SOLO POR VENDEDOR>
      $where = "(usuario = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE2." WHERE $where";
      $select = "SELECT * FROM ".TABLE2." WHERE $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </SOLO POR VENDEDOR>
      }
      else {
        if ($filtrarStatus != '') {
          # <STATUS>
          $where = "WHERE (estadodeventa LIKE '$filtrarStatus')";
      $count="SELECT COUNT(*) FROM ".TABLE2." $where";
      $select = "SELECT * FROM ".TABLE2." $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      mysql_query ("SET NAMES 'utf8'");
      # </STATUS>
        }
        else {
            # <DEFAULT>
      $count="SELECT COUNT(*) FROM ".TABLE2." ";
      $select = "SELECT * FROM ".TABLE2." ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      mysql_query ("SET NAMES 'utf8'");
      # </DEFAULT>    
        }
      
      }

    }

    else {
      # else de fechas


      if ($filtrarporvendedor != '') {
        # <VENDEDOR Y FECHA>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' $where";
      $select = "SELECT *FROM ".TABLE." WHERE estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </VENDEDOR Y FECHA>
      }
      else {
      # <FECHA>
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro'";
      $select = "SELECT *FROM ".TABLE." WHERE estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </FECHA>
      }




    }

  } // Termina IF del Buscador

  } // Termina Administrador
  else {


  if ($buscador != '') {
      # $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' ORDER BY fechaasignacion desc, id desc limit $start,$per_page");

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') AND asignadoa = '$usuario'";
      $select = "SELECT *FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') AND asignadoa = '$usuario' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

  }

  else {

  if ($fecha_inicio_filtro == '--') {
      
      # DEFAULT
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE usuario != 'perlA' AND asignadoa != 'trash' AND email != 'automail@portal-cosmos.com'";
      $select = "SELECT *FROM ".TABLE." WHERE usuario != 'perlA' AND asignadoa != 'trash' AND email != 'automail@portal-cosmos.com' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

    else {      

      $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro'";
      $select = "SELECT *FROM ".TABLE." WHERE asignadoa = '$usuario' AND fecha >= '2014-08-28' AND estadodeventa != 'descartado' AND fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

  } // Termina IF del Buscador
}

# PAGINATION >

$mysql = new mysqli(HOST, USER, PASSWD, DB);

$num = $mysql->query($count);
$x = $num->fetch_array();

$total = ceil($x[0]/$limit_end);

# PAGINATION <

?>