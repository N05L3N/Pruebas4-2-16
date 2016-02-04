<?php
	
	session_start();

	$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cargando..</title>
	<script type="text/javascript">
	if(top.location!=this.location) top.location=this.location;
	</script>
	<meta http-equiv="refresh" content="0; url=http://www.kumasoftware.com/apps/crm/support/cliente.php?id=<?= $id ?>" />
	<style>
		* {
			font-family: calibri;
		}
		div {
			text-align: center;
			width: 100%;
		}
	</style>
</head>
<body>
	<div>
		<img src="../bigLoader.gif" alt="">
		<p>
			<?= 'Folio: '. $id .'' ?>
		</p>
	</div>
</body>
</html>