<?php
  if ($_SESSION["usuario"] == '') {
    header('Location: http://www.kumasoftware.com/apps/crm/support/exit/');
  }

  else {
    include('model/m.menu-superior.php');

    if ($_SESSION["usuario"] == 'temporal') {
    }
    else {

  $usuario = $_SESSION['usuario'];



?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

<?php

    if ($_SESSION["tipo"] == 'vendedor') {

?>

  <a class="navbar-brand" href="asignaciones" style="color:#fff;"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Ventas</a>

<?php

    }

    else {

?>

    <a class="navbar-brand" href="panel" style="color:#fff;"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Ventas</a>

<?
  
  }

?>

<?php

    if ($_SESSION["tipo"] == 'soporte') {

?>
  
  <a class="navbar-brand" href="support/asignaciones"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Soporte</a>

<?php

    }

    else {

      if ($_SESSION["tipo"] == 'vendedor') {
        
        ?>

        <?php

      }
      else {

        ?>

        <a class="navbar-brand" href="support/panel"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Soporte</a>
        
        <?php

      }
  
  }

?>

    </div>




<style>
div.modal-backdrop {
  display: none;
}
.modal-lg {
  width: 835px;
}
.modal-dialog {
  width: 800px;
}
</style>
<!-- Modal -->
<div class="modal fade" id="myModalCalendar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content  modal-lg">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title" id="myModalLabel">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendario</h4>
      </div>
      <div class="modal-body">
        <?php
          include('view/v.iframe-calendario-menu.php');
        ?>
        <!-- <iframe src="iframe-calendario-menu.php" width="800" height="600" frameborder="no" scrolling="no"></iframe> -->
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>

</div>




    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!--
        <li><a href="registrar_cliente.php">Altas</a></li>
        <li><a href="consultas.php">Consultas</a></li>
        -->
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="panel.php">Inicio</a></li>
            <li class="divider"></li>
            <li><a href="history.php">Bitácoras</a></li>
            <li class="divider"></li>
            <li data-toggle="modal" data-target="#myModalCalendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-left:20px;"></span> Calendario</li>
            <li class="divider"></li>
            <li><a href="registrar_cliente.php">Agregar cliente</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Usuario: <?= $usuario ?></li>
            <li class="dropdown-header">Tipo: <?= $tipo ?></li>

<li class="divider"></li>            
<?php
if ($_SESSION["tipo"] == 'vendedor') {
  include('inc/menu-superior.filtros.vendedor.php');
}
else {
include('inc/menu-superior.filtros.admin.php');
}
$buscador = $_SESSION['buscador'];
?>
        <li>
          <form action="controller/c.buscador.php" method="post" id="buscador" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input placeholder="" class="form-control" name="buscador" type="text" value="<?= $buscador ?>">
            </div>
            <button type="submit" class="btn btn-default"> Buscar</button>
            <button type="submit" class="btn btn-default"> Quitar Filtro</button>
          </form>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<?php

  if ($_SESSION["id_view"] == 'usuarios') {
    include('inc/menu.usuarios.php');
  }
  else {

  }

  if ($_SESSION["id_view"] == 'reportes') {
    #include('inc/menu.reportes.php');
  }
  else {

  }

  }


} /**/
?>