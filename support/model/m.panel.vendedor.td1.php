<?php 

  $id = $row['id'];

?>
<!--
<form action="cliente.php" method="post" id="cliente<?php echo $id; ?>">
	<input type="text" name="id" value="<?php echo $id; ?>">

	<a href="javascript:{}" onclick="document.getElementById('cliente<?php echo $id;?>').submit();">
		<button class="btn btn-primary btn-md">
			Actualizar
    	</button>
    </a>
</form>
-->

<a href="cliente.php?id=<?php echo $id;?>">
	<button class="btn btn-primary btn-md">
		Actualizar
	</button>
</a>
	
<br>
<br>

<?php
	if ($_SESSION['usuario'] == 'auxdiseno') {
?>
<button class="btn btn-success btn-xs" style="cursor:pointer;" alt="Aún en desarrollo" title="Aún en desarrollo">
	Realizar Cotización
</button>
<?php		
	}
	else {
?>
<button class="btn btn-success btn-xs" style="cursor:wait;" alt="Aún en desarrollo" title="Aún en desarrollo">
	Realizar Cotización
</button>
<?php
	}
?>

