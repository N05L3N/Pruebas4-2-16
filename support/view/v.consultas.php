<?php
  include('inc/menu-superior.php');
?>
<div class="container theme-showcase">
	<div class="page-header"></div>
	<div class="row">

	<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Consultas</h3>
				</div>
				<div class="panel-body">
<?php
	# include('inc/i.consultas.php');
?>
					<ul>
						
						<li><a href="reportes.php?idReporte=01">Exportar a Excel base de datos.</a>
						<!--
						<li><a href="reportes.php?idReporte=10">Exportar a Excel base de datos por Vendedor.</a>
						-->
							<!--
						<li><a href="model/m.reportes-02-dbdate.php"><i style="color:#666;">Consultar Asignaciones por vendedor al mes.</i></a>
						<li><a href="model/m.reportes-03-dbdate.php"><i style="color:#666;">Consultar Asignaciones sin seguimiento.</i><span style="color:red;"> Pendiente</span></a>
						<li><a href="#"><i style="color:#666;">Consultar Asignaciones del día.</i><span style="color:red;"> Pendiente</span></a>
						<li><a href="#"><i style="color:#666;">Consultar el usuario con más recomendaciones realizadas.</i><span style="color:red;"> Pendiente</span></a>
						-->
					</ul>
<!--
					<hr>

					<ul>
						<li><a href="reportes/grafica.como-se-entero-de-nosotros.php" target="_blank">Gráfica cómo se entero de nosotros:</a></li>
						
					</ul>
-->

				</div>
			</div>
		</div><!-- /.col-sm-3 -->
		<div class="col-sm-3"></div>
	</div>

</div> <!-- /container -->