<?php

  # Incluir Filtro por fecha
  
  $_SESSION["v3"];
  $_SESSION["v2"];
  $_SESSION["v1"];

  $id_view = $_SESSION["id_view"];
  $tipo = $_SESSION["tipo"];


  if ($_POST['filtro1_2'] == '') {

    $classActive1 = 'active';
    $classActive2 = 'Noactive';

  }

  else {

    $classActive1 = 'Noactive';
    $classActive2 = 'active';

  }

include('controller/c.load.session.php');
?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist" style="width:75%; margin:auto;">
  <li class="active">
    <a href="#filtros" role="tab" data-toggle="tab">
      Filtros
    </a>
  </li>

<?php

  if($tipo == 'administrador' || $tipo == 'programador') {

?>

  <li>
    <a href="#profile" role="tab" data-toggle="tab">
      Vendedor
    </a>
  </li>

<?php
  
  }
  
  else {

  }

?>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="width:75%; margin:auto;">
  <div class="tab-pane" id="home">
    <?php include('modules/m.filtro.fecha.php'); ?>
    </div>
  <div class="tab-pane" id="profile">
    <?php include('modules/m.filtro.vendedor.php'); ?>
  </div>
    <div class="tab-pane active" id="filtros">
      <?php include('modules/m.filtro.individual.php'); ?>
    </div>
</div>



<div class="table-responsive">
<br>
  <table class="table table-condensed" style="width:75%; margin:auto;">
    <caption style="background-color:White;">
       <h4><?= $_SESSION["h4"] ?></h4>
    </caption>
<?php
  
  

  # TR
  include('view/v.asignaciones-01.php');
  
  $c = $mysql->query($select);
  
  while($rows = $c->fetch_array(MYSQLI_ASSOC)) {

  $id = $rows['id'];
  $nombre = $rows['nombre'];
  $apellidos = $rows['apellidos'];
  $email = $rows['email'];
  $telefono = $rows['telefono'];
    $Etelefono = substr($telefono, 0, 50);
    $telefono = ''.$Etelefono['0'].$Etelefono['1'].$Etelefono['2'].' '.$Etelefono['3'].$Etelefono['4'].$Etelefono['5'].' '.$Etelefono['6'].$Etelefono['7'].' '.$Etelefono['8'].$Etelefono['9'].' '.$Etelefono['10'].$Etelefono['11'].' '.$Etelefono['12'].$Etelefono['13'].' '.$Etelefono['14'].$Etelefono['15'].' '.$Etelefono['16'].$Etelefono['17'].' '.$Etelefono['18'].$Etelefono['19'].'';

  $nombre_recomendador = $rows['nombre_recomendador'];
    $Ecelular = substr($nombre_recomendador, 0, 50);
    $nombre_recomendador = ''.$Ecelular['0'].$Ecelular['1'].$Ecelular['2'].' '.$Ecelular['3'].$Ecelular['4'].$Ecelular['5'].' '.$Ecelular['6'].$Ecelular['7'].' '.$Ecelular['8'].$Ecelular['9'].' '.$Ecelular['10'].$Ecelular['11'].' '.$Ecelular['12'].$Ecelular['13'].' '.$Ecelular['14'].$Ecelular['15'].' '.$Ecelular['16'].$Ecelular['17'].' '.$Ecelular['18'].$Ecelular['19'].'';

        $contacto2 = $rows['contacto2'];
        $eqclosqcuenta = $rows['eqclosqcuenta'];
        $empresa = $rows['empresa'];
        $pais = $rows['pais'];
        $estado = $rows['estado'];
        $ciudad = $rows['ciudad'];
        $equipodeinteres = $rows['equipodeinteres'];
        $formulario = $rows['formulario'];
        $fecha = $rows['fecha'];
    $fechaE = explode("-", $fecha);

    if ($rows['id_seguimiento'] =='') {
      # TD
      include('view/v.asignaciones-02.php');    
    }
    else {

      $rowsid_seguimiento = $rows['id_seguimiento'];
      $result = mysql_query("SELECT * FROM contacto WHERE id = '$rowsid_seguimiento' ORDER BY id desc");
      # mysql_query ("SET NAMES 'utf8'");

      $i = 0;

        while ($row = mysql_fetch_array($result)) {
            if ($i > 0) {
            }
            
            $rows['id'] = $row['id'];
        $rows['apellidos'] = $row['apellidos'];
        $rows['email'] = $row['email'];
        # $rows['email'] = $rows['estadodeventa'].'/'.$row['asignadoa'].'';
        $rows['telefono'] = $row['telefono'];
        $rows['nombre_recomendador'] = $row['nombre_recomendador'];
        $rows['pais'] = $row['pais'];
        $rows['estado'] = $row['estado'];
        $rows['ciudad'] = $row['ciudad'];
        $rows['equipodeinteres'] = $row['equipodeinteres'];
        $rows['formulario'] = $row['formulario'];
        $rows['fecha'] = $row['fecha'];
        $rows['comentarios'] = $row['comentarios'];

        if ($row['asignadoa'] == 'trash') {
            # include('view/v.asignaciones-02.php');

          }
          else {
            include('view/v.asignaciones-02.php');
          }

      }

        $i++;
      
    }

  

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