<tr>
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active" colspan="5">

<div class="row">
  <div class="col-md-2">
    <a href="panel.php?dataview=grid">
        <button type="submit" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-th"></span> Vista Detallada
        </button>
      </a>
  </div>
  <div class="col-md-2">
        <a href="panel.php?dataview=list">
          <button type="submit" class="btn btn-default btn-xs">
            <span class="glyphicon glyphicon-th-list"></span> Vista Compacta
          </button>
        </a>
  </div>
  <div class="col-md-8"></div>
</div>

  </th>
<?php
}
else {

  include('model/m.menu-superior-vendedor.php');
?>

  <th class="active">
    <ul>
      <li><a href="">Hoy » <button type="button" class="btn btn-success btn-xs"><?= $numero_asignacionesHoy ?></button></a></li>
      <li><a href="">Asignaciones » <button type="button" class="btn btn-primary btn-xs"><?= $numero_asignacionesTotal ?></button></a></li>
      <li><a href="">Atrasados » <button type="button" class="btn btn-danger btn-xs"> <?= $numero_pendientes?></button></a></li>
    </ul>
  </th>
  <th colspan="2"></th>


<?php
}
?>  
</tr>







<tr>
  <!--<th class="active">No:</th>-->
<?php
if ($filtrarporvendedor == '') {
?>
  <th class="active">Folio</th>
  <th class="active">Comentario</th>
  <th class="active" width="20%">Pais / Estado</th>
  <th class="active" width="20%">Vendedor</th>
  <th class="active">Estado de la Venta</th>
<?php
}
else {
?>
  <th class="active">Información General</th>
  <th class="active" width="20%">Datos del Cliente</th>
  <th class="active">Estado de la Venta</th>
<?php
}
?>  
  
</tr>
<!-- Primera Columna -->
<?php
  # mysql_query ("SET NAMES 'utf8'");

  $per_page = 500;



$buscador = $_SESSION['buscador'];

  if ($buscador != '') {
      $result = mysql_query("SELECT * FROM contacto WHERE nombre LIKE '%$buscador%' OR email LIKE '%$buscador%' OR comentarios LIKE '%$buscador%' OR formulario LIKE '%$buscador%' OR id LIKE '%$buscador%' ORDER BY fecha desc, id desc limit $start,$per_page");
      mysql_query ("SET NAMES 'utf8'");
  }

  else {



  if ($fecha_inicio_filtro == '--') {
      if ($filtrarporvendedor == '') {
          $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");
      }
      else {
          $result = mysql_query("SELECT * FROM contacto WHERE usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");
      }
  }



  else {
      if ($filtrarporvendedor == '') {
        $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' ORDER BY fecha desc, id desc limit $start,$per_page");   
      }
      else {
       $result = mysql_query("SELECT * FROM contacto WHERE fecha >= '$fecha_inicio_filtro' AND fecha <= '$fecha_fin_filtro' AND usuario != 'perlA' AND email != 'automail@portal-cosmos.com' AND asignadoa = '$filtrarporvendedor' ORDER BY fecha desc, id desc limit $start,$per_page");   
      }
  }


  } # Buscador
  
  # SELECT * FROM contacto WHERE fecha <= '2014-03-20' AND fecha >= '2014-03-26' ORDER BY fecha desc, id desc
  mysql_query ("SET NAMES 'utf8'");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    
    if ($i > 0) {

    }



?>
<tr>
  
  <td style="background-color:#ffffff;" width="20">
    <a href="cliente.php?id=<?= $row['id'] ?>&vendedor=<?= $row['asignadoa'] ?>" style="text-decoration:none; color:black;">
    <?= $row['id'] ?>
  </a>
  </td>
  
  <td style="background-color:#ffffff;" width="400">
    <a href="cliente.php?id=<?= $row['id'] ?>&vendedor=<?= $row['asignadoa'] ?>" style="text-decoration:none; color:black;">
    <div id="<?= $row['id'] ?>"></div>
    <p data-toggle="tooltip" data-placement="left" title="<?= $row['comentarios'] ?>"><?= substr($row['comentarios'], 0, 100); ?></p>
  </a>
  </td>
  <td style="background-color:#ffffff;">
    <?= $row['estado'] ?>
  </td>
  
<?php  

if ($filtrarporvendedor == '') {
?>
<td style="background-color:#ffffff;">
<?php
  include('inc/i.form.asignar-seguimiento-list.php');
?>
</td>
<?php
}
else {
  
}

# Incluye un TD width 300
?>
<td width="100">
<?php include('model/m.panel.administrador.td5-list.php');?>
</td>



  
</tr>
<?php
      
  }
  
  $i++;
  $cont++;
?>