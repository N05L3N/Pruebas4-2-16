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

      else if ($_POST['filtro1_2'] != '') {
          $filtro1_1 = $_POST['filtro1_1'];
          $filtro1_2 = $_POST['filtro1_2'];

            if ($filtro1_1 == 'fechaasignacion') {
                $filtro1_2E = explode("-", $filtro1_2);
                $filtro1_2 = ''.$filtro1_2E[2].'-'.$filtro1_2E[1].'-'.$filtro1_2E[0].'';
            }
            else {

            }

          $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND $filtro1_1 LIKE '%$filtro1_2%'";
          $select = "SELECT *FROM ".TABLE." WHERE asignadoa = '$usuario' AND $filtro1_1 LIKE '%$filtro1_2%' ORDER BY $order";
          $select .= " LIMIT $init, $limit_end";

          # echo '
          # <pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;">'.$count.'
          # <br>'.$select.'
          # </pre>
          # ';
      }

      else {





                    if ($_GET['s'] == 'f') {

                              include('controller/c.panel.2.facturados.php');

                      }
                      else {
                            # <DEFAULT>
                                # DEFAULT
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND estadodeventa != 'descartado'";
      $select = "SELECT *FROM ".TABLE." WHERE asignadoa = '$usuario' AND estadodeventa != 'descartado' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

      # echo '
      # <pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;">'.$count.'
      # <br>'.$select.'
      # </pre>
      # ';
                            # </DEFAULT>                  
                      }



        
    











      }

    }

    else {      

      # FILTRO POR FECHAS
      # Desactivado Temporalmente
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE asignadoa = '$usuario' AND estadodeventa != 'descartado' AND fecha >= '2014-08-28'";
      $select = "SELECT *FROM ".TABLE." WHERE asignadoa = '$usuario' AND estadodeventa != 'descartado' AND fecha >= '2014-08-28' ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";

    }

  } // Termina ELSE del Buscador

         

# PAGINATION >

$mysql = new mysqli(HOST, USER, PASSWD, DB);

$num = $mysql->query($count);
$x = $num->fetch_array();

$total = ceil($x[0]/$limit_end);

# PAGINATION <

$cjConexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("$dbn", $cjConexion);


$cjQuery_pais_a1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã¡', 'á') WHERE id >= '4300';";
$cjQuery_pais_e1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã©', 'é') WHERE id >= '4300';";
$cjQuery_pais_i1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã­', 'í') WHERE id >= '4300';";
$cjQuery_pais_o1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã³', 'ó') WHERE id >= '4300';";

$cjQuery_pais_a1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã¡', 'á') WHERE id >= '4300';";
$cjQuery_pais_e1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã©', 'é') WHERE id = '4355';";
$cjQuery_pais_i1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã­', 'í') WHERE id >= '4300';";
$cjQuery_pais_o1 = "UPDATE crmk.contacto SET pais = replace(pais,'Ã³', 'ó') WHERE id >= '4300';";

$cjQuery_direccion_a2 = "UPDATE crmk.contacto SET direccion = replace(direccion,'á', 'a') WHERE id >= '4300';";
$cjQuery_direccion_e2 = "UPDATE crmk.contacto SET direccion = replace(direccion,'é', 'e') WHERE id >= '4300';";
$cjQuery_direccion_i2 = "UPDATE crmk.contacto SET direccion = replace(direccion,'í', 'i') WHERE id >= '4300';";
$cjQuery_direccion_o2 = "UPDATE crmk.contacto SET direccion = replace(direccion,'ó', 'o') WHERE id >= '4300';";


$cjQuery_comentarios_a1 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Ã¡', 'a') WHERE id >= '4300';";
$cjQuery_comentarios_e1 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Ã©', 'e') WHERE id >= '4300';";
$cjQuery_comentarios_i1 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Ã­', 'i') WHERE id >= '4300';";
$cjQuery_comentarios_o1 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Ã³', 'o') WHERE id >= '4300';";

$cjQuery_comentarios_s1 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Â¡', '¡') WHERE id >= '4300';";;



$cjQuery_comentarios_a2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'á', 'a') WHERE id >= '4300';";
$cjQuery_comentarios_e2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'é', 'e') WHERE id >= '4300';";
$cjQuery_comentarios_i2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'í', 'i') WHERE id >= '4300';";
$cjQuery_comentarios_o2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'ó', 'o') WHERE id >= '4300';";
$cjQuery_comentarios_u2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'ú', 'u') WHERE id >= '4300';";

$cjQuery_comentarios_s2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'¡', '') WHERE id >= '4300';";
$cjQuery_comentarios_n2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'ñ', 'n') WHERE id >= '4300';";;

$cjQuery_comentarios_A2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Á', 'A') WHERE id >= '4300';";
$cjQuery_comentarios_E2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'É', 'E') WHERE id >= '4300';";
$cjQuery_comentarios_I2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Í', 'I') WHERE id >= '4300';";
$cjQuery_comentarios_O2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Ó', 'O') WHERE id >= '4300';";
$cjQuery_comentarios_U2 = "UPDATE crmk.contacto SET comentarios = replace(comentarios,'Ú', 'U') WHERE id >= '4300';";

$cleaner = $_GET['cleaner'];

if ($cleaner == 1) {

  
  mysql_query($cjQuery_direccion_a2, $cjConexion);
  mysql_query($cjQuery_direccion_e2, $cjConexion);
  mysql_query($cjQuery_direccion_i2, $cjConexion);
  mysql_query($cjQuery_direccion_o2, $cjConexion);

  mysql_query($cjQuery_pais_a1, $cjConexion);
  mysql_query($cjQuery_pais_e1, $cjConexion);
  mysql_query($cjQuery_pais_i1, $cjConexion);
  mysql_query($cjQuery_pais_o1, $cjConexion);
  
  mysql_query($cjQuery_pais_a2, $cjConexion);
  mysql_query($cjQuery_pais_e2, $cjConexion);
  mysql_query($cjQuery_pais_i2, $cjConexion);
  mysql_query($cjQuery_pais_o2, $cjConexion);
  
  mysql_query($cjQuery_comentarios_a1, $cjConexion);
  mysql_query($cjQuery_comentarios_e1, $cjConexion);
  mysql_query($cjQuery_comentarios_i1, $cjConexion);
  mysql_query($cjQuery_comentarios_o1, $cjConexion);
  
  mysql_query($cjQuery_comentarios_s1, $cjConexion);
  
  mysql_query($cjQuery_comentarios_a2, $cjConexion);
  mysql_query($cjQuery_comentarios_e2, $cjConexion);
  mysql_query($cjQuery_comentarios_i2, $cjConexion);
  mysql_query($cjQuery_comentarios_o2, $cjConexion);
  mysql_query($cjQuery_comentarios_u2, $cjConexion);
  
  mysql_query($cjQuery_comentarios_s2, $cjConexion);
  mysql_query($cjQuery_comentarios_n2, $cjConexion);
  
  mysql_query($cjQuery_comentarios_A2, $cjConexion);
  mysql_query($cjQuery_comentarios_E2, $cjConexion);
  mysql_query($cjQuery_comentarios_I2, $cjConexion);
  mysql_query($cjQuery_comentarios_O2, $cjConexion);
  mysql_query($cjQuery_comentarios_U2, $cjConexion);
}

else {

}
?>