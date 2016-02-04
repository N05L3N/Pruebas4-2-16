<div class="row">
		<div class="col-xs-9">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
  				<li class="active"><a href="#pr1" role="tab" data-toggle="tab">Historial</a></li>
				<li><a href="#pr2" role="tab" data-toggle="tab">Agenda 2014</a></li>
                                    <li><a href="#pr3" role="tab" data-toggle="tab">Agenda 201a5</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
  				<div class="tab-pane active" id="pr1">

<!-- TAB 1-->



<table class="table table-condensed">

<!--
	<tr>
		<td>
			<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert">
  		<span aria-hidden="true">&times;</span>
  		<span class="sr-only">Close</span></button>
  		<strong>Atención</strong> Barra de progreso aún no muestra un porcentaje real.
	</div>
	<div class="progress">
  		<div class="progress-bar progress-bar-alert progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
    			45%
  		</div>
  	</div>
		</td>
	</tr>
-->

<?php
	
	$usuario = $_SESSION["usuario"];
	$id  = $_GET["id"];

	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id' AND estadodeventa != 'Pendiente' ORDER BY id_comentarios_v desc limit 0,100");
	mysql_query ("SET NAMES 'utf8'");
	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) {
		if ($i3 > 0) {
		}

?>
	<tr>
		<td>
			<i><?= $row3['comentariovendedor'] ?></i>
			<br>
			<?php
				$fecharespuesta = explode("-", $row3['fecharespuesta']);
			?>
			<ol class="breadcrumb">
				<li><span class="glyphicon glyphicon-user"></span> <?= $row3['usuario'] ?></li>
				<li><span class="glyphicon glyphicon-calendar"></span> <?= ''.$fecharespuesta[2].'-'.$fecharespuesta[1].'-'.$fecharespuesta[0].'' ?></li>
  				<li class="active"><?= $row3['horarespuesta'] ?></li>
			</ol>
		</td>  
	</tr>
<?php
	
	$i3++; 

	}

?>
</table>


<!-- TAB 2-->
  				</div>
  				
  				<div class="tab-pane" id="pr2">
<!-- -->
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Noviembre
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
<?php
	include('inc/calendar.11.php');
?>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Diciembre
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
<?php
	include('inc/calendar.12.php');
?>        
    </div>
  </div>
</div>
<!-- -->
  				</div>
<div class="tab-pane" id="pr3">
  <!-- -->
<div class="panel-group" id="accordion15">
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseEnero15">
          Enero
        </a>
      </h4>
    </div>
    <div id="collapseEnero15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1501.php');
?>        
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseFebrero15">
          Febrero
        </a>
      </h4>
    </div>
    <div id="collapseFebrero15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1502.php');
?>        
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseMarzo15">
          Marzo
        </a>
      </h4>
    </div>
    <div id="collapseMarzo15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1503.php');
?>        
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseAbril15">
          Abril
        </a>
      </h4>
    </div>
    <div id="collapseAbril15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1504.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseMayo15">
          Mayo
        </a>
      </h4>
    </div>
    <div id="collapseMayo15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1505.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseJunio15">
          Junio
        </a>
      </h4>
    </div>
    <div id="collapseJunio15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1506.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseJulio15">
          Julio
        </a>
      </h4>
    </div>
    <div id="collapseJulio15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1507.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseAgosto15">
          Agosto
        </a>
      </h4>
    </div>
    <div id="collapseAgosto15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1508.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseSeptiembre15">
          Septiembre
        </a>
      </h4>
    </div>
    <div id="collapseSeptiembre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1509.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseOctubre15">
          Octubre
        </a>
      </h4>
    </div>
    <div id="collapseOctubre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1510.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseNoviembre15">
          Noviembre
        </a>
      </h4>
    </div>
    <div id="collapseNoviembre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1511.php');
?>        
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion15" href="#collapseDiciembre15">
          Diciembre
        </a>
      </h4>
    </div>
    <div id="collapseDiciembre15" class="panel-collapse collapse">
<?php
  include('inc/calendar.1512.php');
?>        
    </div>
  </div>

</div>
<!-- -->
</div>

			</div>		
		</div>
	</div>