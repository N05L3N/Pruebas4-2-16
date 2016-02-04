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

# PAGINATION
const HOST = 'localhost';
const USER = 'ucrmk';
const PASSWD = 'Pcrmk#2014';
const DB = 'crmk';
const TABLE = 'contacto';
const TABLE2 = 'ecrm_comentarios_v';

$order="fecha DESC, id DESC";
$url = basename($_SERVER ["PHP_SELF"]);
$limit_end = 30;
$init = ($ini-1) * $limit_end;

# / PAGINATION


$buscador = $_SESSION['buscador'];

  if ($_SESSION['tipo'] == 'administrador') {
    if ($buscador != '') {

      if ($filtrarporvendedor != '') {
        # <VENDEDOR>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') $where $whereFechaRango";
      $select = "SELECT * FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' OR formulario LIKE '%$buscador%') AND (fecha >= '2000-08-28' AND estadodeventa != 'descartado') $where $whereFechaRango ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </VENDEDOR>
      }

      else {
      # <BUSCADOR>
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%') ";
      $select = "SELECT * FROM ".TABLE." WHERE (nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR id LIKE '%$buscador%' OR fecha LIKE '%$buscador%' OR formulario LIKE '%$buscador%') AND (fecha >= '2000-08-28' AND estadodeventa != 'descartado') ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </BUSCADOR>
      }

      

  }

  else {

  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor != '') {
        # <SOLO POR VENDEDOR>
      $where = "AND (asignadoa = '$filtrarporvendedor')";
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE estadodeventa != 'descartado' $where";
      $select = "SELECT * FROM ".TABLE." WHERE estadodeventa != 'descartado' $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # </SOLO POR VENDEDOR>
      }
      else {


            /**/
        if ($_POST['filtro1_2'] != '') {
          $filtro1_1 = $_POST['filtro1_1'];
          $filtro1_2 = $_POST['filtro1_2'];

            if ($filtro1_1 == 'fechaasignacion') {
                $filtro1_2E = explode("-", $filtro1_2);
                $filtro1_2 = ''.$filtro1_2E[2].'-'.$filtro1_2E[1].'-'.$filtro1_2E[0].'';
            }
            else {

            }

          $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND $filtro1_1 LIKE '%$filtro1_2%'";
          $select = "SELECT *FROM ".TABLE." WHERE usuario != 'perlA' AND asignadoa != 'trash' AND email != 'automail@portal-cosmos.com' AND $filtro1_1 LIKE '%$filtro1_2%' ORDER BY $order";
          $select .= " LIMIT $init, $limit_end";
      }
      else {
                        /**/


                      if ($_GET['s'] == 'f') {

                              include('controller/c.panel.2.facturados.php');

                      }
                      else {
                            # <DEFAULT>
                            $count="SELECT COUNT(*) FROM ".TABLE." WHERE estadodeventa != 'descartado' AND (asignadoa != 'trash') ";
                            $select = "SELECT * FROM ".TABLE." WHERE estadodeventa != 'descartado' AND (asignadoa != 'trash')  ORDER BY $order";
                            $select .= " LIMIT $init, $limit_end";
                            # </DEFAULT>                  
                      }
      

      
      }




      }

    }

    else {



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

  }

















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

# <pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;"><br>'.$where.'</pre>

?>