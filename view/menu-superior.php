<?php
  if ($_SESSION["usuario"] == '') {
    header('Location: http://www.kumasoftware.com/apps/crm/support/exit/');
  }

  else {
    include('model/m.menu-superior.php');

    if ($_SESSION["usuario"] == 'temporal') {
      ?>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="history">CRM</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="dropdown active"></li>
<li>
<form action="controller/c.buscador.php" method="post" id="buscador" class="navbar-form navbar-right" role="form">
<div class="form-group">
<input placeholder="" class="form-control" name="buscador" type="text" value="<?= $buscador ?>">
</div>
<button type="submit" class="btn btn-default"> Buscar</button>
</form>
</li>
<li><a href="exit/">Cerrar Sesión</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>      
<?php      
    }
    else {
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
        <iframe src="iframe-calendario-menu.php" width="700" height="500" frameborder="0"></iframe>
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
            <li data-toggle="modal" data-target="#myModalCalendar">
              <span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-left:20px;"></span> Calendario</li>
            <li class="divider"></li>
            
            <?php
              if ($_SESSION["tipo"] == 'vendedor') {
            ?>
            
            <?php
              }
              else {
            ?>
            <li><a href="usuarios.php">Administrar Usuarios</a></li>
            <li><a href="consultas.php">Reportes</a></li>
            <li class="divider"></li>
            <li><span style="margin-left:20px; font-weight:bold;"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtros:</span></li>

            <li class="divider"></li>
            <!-- <li><a href="panel?filter=sinasignacion">Ver Registros sin Asignación</a></li>-->
            <li class="dropdown-header">
              <form action="panel.php" method="post" id="form-filters-sinasignacion">
                <input type="hidden" name="filter" value="sinasignacion" readonly="readonly">
                <span onclick="document.getElementById('form-filters-sinasignacion').submit();" style="cursor:pointer; margin-left:20px;">
                  Sin Asignación
                </span>
              </form>
              </li>
              <li class="divider"></li>
              <li class="dropdown-header">
              <form action="panel.php" method="post" id="form-filters-quitarfiltro">
                <input type="hidden" name="filter" value="quitarfiltro" readonly="readonly">
                <span onclick="document.getElementById('form-filters-quitarfiltro').submit();" style="cursor:pointer; margin-left:20px;">
                  Quitar Filtro
                </span>
              </form>
              </li>
              

            <?php
              }
            ?>
            <li class="divider"></li>
            <li><a href="registrar_cliente.php">Agregar cliente</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Usuario: <?php echo $usuario;?></li>
            <li class="dropdown-header">Tipo: <?php echo $tipo;?></li>
            <li class="divider"></li>
            <?php
              if ($_SESSION["tipo"] == 'vendedor') {
            ?>
            <li><span style="margin-left:20px; font-weight:bold;"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtros:</span></li>

            <li class="divider"></li>
            
            <li class="dropdown-header">
              
<?php 
  if ($_SESSION['form-filters-status'] == 'Caliente') {
?>       
<form action="asignaciones.php" method="post" id="form-filters-status1">
                <input type="hidden" name="form-filters-status" value="Caliente" readonly="readonly">
                <button type="button" class="btn btn-danger btn-xs" onclick="document.getElementById('form-filters-status1').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Calientes
                </button>
              </form>           
<?php
}
  else {
?>
<form action="asignaciones.php" method="post" id="form-filters-status1">
                <input type="hidden" name="form-filters-status" value="Caliente" readonly="readonly">
                <button type="button" class="btn btn-danger btn-xs" onclick="document.getElementById('form-filters-status1').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Calientes
                </button>
              </form>
<?php    
  }
?>

<br>

<?php 
  if ($_SESSION['form-filters-status'] == 'tibio') {
?>                  
<form action="asignaciones.php" method="post" id="form-filters-status2">
                <input type="hidden" name="form-filters-status" value="tibio" readonly="readonly">
                <button type="button" class="btn btn-warning btn-xs" onclick="document.getElementById('form-filters-status2').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Tibios
                </button>
              </form>
<?php
}
  else {
?>
<form action="asignaciones.php" method="post" id="form-filters-status2">
                <input type="hidden" name="form-filters-status" value="tibio" readonly="readonly">
                <button type="button" class="btn btn-warning btn-xs" onclick="document.getElementById('form-filters-status2').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Tibios
                </button>
              </form>
<?php    
  }
?>

<br>

<?php 
  if ($_SESSION['form-filters-status'] == 'frio') {
?>        
<form action="asignaciones.php" method="post" id="form-filters-status3">
                <input type="hidden" name="form-filters-status" value="frio" readonly="readonly">
                <button type="button" class="btn btn-info btn-xs" onclick="document.getElementById('form-filters-status3').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Frios
                </button>
              </form>          
<?php
}
  else {
?>
<form action="asignaciones.php" method="post" id="form-filters-status3">
                <input type="hidden" name="form-filters-status" value="frio" readonly="readonly">
                <button type="button" class="btn btn-info btn-xs" onclick="document.getElementById('form-filters-status3').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Frios
                </button>
              </form>
<?php    
  }
?>

<br>

            <form action="asignaciones.php" method="post" id="form-filters-status4">
                <input type="hidden" name="form-filters-status" value="" readonly="readonly">
                <button type="button" class="btn btn-default btn-xs" onclick="document.getElementById('form-filters-status4').submit();" style="width:100px; text-align:left;">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Quitar Filtro
                </button>
              </form>

              

              </li>
            <li class="divider"></li>
            <li><a href="trash">Descartados: <span class="badge"><?= $numero_descartados ?></span></a></li>
            <li class="divider"></li>
            <?php
              }
              else {
            
              }
        ?>
            <li><a href="exit/">Cerrar Sesión</a></li>
          </ul>
        </li>
          <?php
              if ($_SESSION["tipo"] == 'vendedor') {
            ?>
        <li>
          <?php
          $h4 = $_SESSION["h4"];
            if ($h4 == 'Hoy') {
                $diaryColor = 'success';
            }
            else {
                $diaryColor = 'default'; 
            }
          ?>
          <?php
          $h4 = $_SESSION["h4"];
            if ($h4 == 'Asignaciones') {
                $asignacionesColor = 'primary';
            }
            else {
                $asignacionesColor = 'default'; 
            }
          ?>
          <?php
          $h4 = $_SESSION["h4"];
            if ($h4 == 'late') {
                $lateColor = 'danger';
            }
            else {
                $lateColor = 'default'; 
            }
          ?>
          <a href="diary">
            Hoy » <button type="button" class="btn btn-<?= $diaryColor ?> btn-xs"><?= $numero_asignacionesHoy ?></button>
          </a>
        </li>

        <li>
          <a href="asignaciones">
            Asignaciones » <button type="button" class="btn btn-<?= $asignacionesColor ?> btn-xs"><?= $numero_asignacionesTotal ?></button>
          </a>
        </li>

        <li>
          <a href="late">
            <!-- Pendientes --> Atrasados » <button type="button" class="btn btn-<?= $lateColor ?> btn-xs"> <?= $numero_pendientes?></button>
          </a>
        </li>
        <?php
              }
              else {
            
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

        
        <!--
        <li><a href="exit/">Cerrar Sesión</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bases <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="ryg.php">Recomienda y Gana</a></li>
          </ul>
        </li>
      -->
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