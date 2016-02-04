<style>
	body {
		margin-top:0;
		margin-left: 0;
		background-color: White;
	}
</style>
<table class="table table-condensed" style="background-color:White; margin-top:-60px;">

<?php
	
	$usuario = $_SESSION["usuario"];
	$id  = $_GET["id"];

	mysql_query ("SET NAMES 'utf8'");
	$result3 = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id' AND estadodeventa != 'Pendiente' ORDER BY id_comentarios_v desc limit 0,100");

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