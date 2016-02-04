<?php
	
	if ($_SESSION["usuario"] == '') {
	
		header('Location: http://www.kumasoftware.com/apps/crm/support/exit/');

	}
	
	else {
		
		$buscador = $_SESSION['buscador'];
		include('model/m.menu-superior.php');

?>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="history">
				CRM
			</a>
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
		</div>
	</div>
</div>      

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<?php

				if ($tipo == 'administrador') {
			
			?>
			
			<a class="navbar-brand" href="../panel"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Ventas</a>  
			<a class="navbar-brand" href="asignaciones" style="color:#fff;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Soporte</a>


			<?php
				}
			
				else {
					if ($tipo == 'administrador') {
			?>
				<a class="navbar-brand" href="panel" style="color:#fff;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Soporte</a>
			<?php
					}
					else {
			?>
				<a class="navbar-brand" href="asignaciones" style="color:#fff;"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Soporte</a>
			<?php
					}

				}

			?>

		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="panel.php">Escritorio</a></li>
						<li><a href="usuarios.php">Administrar Usuarios</a></li>
						<li><a href="consultas.php">Reportes</a></li>
						<li class="divider"></li>
						<li><span style="margin-left:20px; font-weight:bold;"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtros:</span></li>
						<li class="divider"></li>
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
						<li class="divider"></li>
						<li><a href="registrar_cliente.php">Agregar cliente</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Usuario: <?= $usuario ?></li>
						<li class="dropdown-header">Tipo: <?= $tipo ?></li>
						<li class="divider"></li>
						<li><a href="exit/">Cerrar Sesión</a></li>
					</ul>
				</li>
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
		</div>
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

?>