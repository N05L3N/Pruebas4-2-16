<li><a href="usuarios.php">Administrar Usuarios</a></li>
<li><a href="consultas.php">Reportes</a></li>
<li class="divider"></li>
<li><span style="margin-left:20px; font-weight:bold;"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtros:</span></li>
<li class="divider"></li>


<?php 
if ($_GET['s'] == 'f') {
?>
<li class="dropdown-header">
<a href="panel">
<button type="button" class="btn btn-success btn-xs" onclick="document.getElementById('form-filters-status1').submit();" style="width:100px; text-align:left;">
<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Facturados
</button>
</a>
</li>
<?php
}
else {
?>
<li class="dropdown-header">
<a href="panel?s=f">
<button type="button" class="btn btn-success btn-xs" onclick="document.getElementById('form-filters-status1').submit();" style="width:100px; text-align:left;">
<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Facturados
</button>
</a>
</li>
<?php    
}
?>



<!-- <li><a href="panel?filter=sinasignacion">Ver Registros sin Asignación</a></li>-->
<li class="dropdown-header"><a href="panel-sinasignar"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Sin Asignación</button></a></li>



        <li class="divider"></li>
        <li><a href="exit/">Cerrar Sesión</a></li>
        <li class="divider"></li>
  </ul>
</li>