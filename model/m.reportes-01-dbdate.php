<?php 
session_start();
//
$fecha = date(ymd);
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=dbdate($fecha).xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<style>
	tr {
		border: 1px solid #999;
	}
</style>

<table border='1' cellpadding='0'cellspacing='0' width='1024' style='font-size:12px;'>
	<tr>
		<td align='left'><b>Folio</b></td>
		<td align='left'><b>Registro de:</b></td>
		<td align='left'><b>Nombre</b></td>
		<td align='left'><b>Profesión</b></td>
		<td align='left'><b>Especialidad</b></td>
		<td align='left' width='200'><b>Dirección</b></td>
		<td align='left'><b>Ciudad</b></td>
		<td align='left'><b>Pais</b></td>
		<td align='left'><b>Estado</b></td>
		<td align='left'><b>Telefono</b></td>
		<td align='left'><b>E-mail</b></td>
		<td align='left'><b>Medio</b></td>
		<td align='left'><b>Giro</b></td>
		<td align='left'><b>Software de interes</b></td>
		<td align='left'><b>Página Web</b></td>
		<td align='left'><b>Puesto</b></td>
		<td align='left'><b>Motivo de consulta</b></td>
		<td align='left'><b>Empresa</b></td>
		<td align='left' width='750'><b>Comentarios</b></td>
		<td align='left'><b>Fecha</b></td>
		<td align='left'><b>Vendedor</b></td>

		<td align='left'>No contesto</td>
		<td align='left'>Envío de correo</td>
		<td align='left'>Llamada Efectiva</td>
		<td align='left'>Demo Online</td>
		<td align='left'>Demo Presencial</td>
		<td align='left'>Visita</td>
		<td align='left'>Envío de cotización</td>
		
		<td align='left'><b>No contesto</b></td>
		<td align='left'><b>Envío de correo</b></td>
		<td align='left'><b>Llamada Efectiva</b></td>
		<td align='left'><b>Demostración</b></td>
		<td align='left'><b>Visita</b></td>
		
		<td align='left'><b>1- Estado de venta</b></td>
		<td align='left'><b>1- Próxima Llamada</b></td>
		<td align='left'><b>1- Comentario</b></td>
		
		<td align='left'><b>2.- Estado de venta</b></td>
		<td align='left'><b>2.- Próxima Llamada</b></td>
		<td align='left'><b>2.- Comentario</b></td>
		
		<td align='left'><b>3.- Estado de venta</b></td>
		<td align='left'><b>3.- Próxima Llamada</b></td>
		<td align='left'><b>3.- Comentario</b></td>
		
		<td align='left'><b>4.- Estado de venta</b></td>
		<td align='left'><b>4.- Próxima Llamada</b></td>
		<td align='left'><b>4.- Comentario</b></td>
		
		<td align='left'><b>5.- Estado de venta</b></td>
		<td align='left'><b>5.- Próxima Llamada</b></td>
		<td align='left'><b>5.- Comentario</b></td>

		<td align='left'><b>6.- Estado de venta</b></td>
		<td align='left'><b>6.- Próxima Llamada</b></td>
		<td align='left'><b>6.- Comentario</b></td>

		
	</tr>

<?php
/////////////////////////////////////////////// filtro por fecha


$contacto = 'contacto';

$v1 = $_SESSION["v1"];
$v2 = $_SESSION["v2"];
$v3 = $_SESSION["v3"];
$inicio = ''.$v3.'-'.$v2.'-'.$v1.'';
$v11 = $_SESSION["v11"];
$v22 = $_SESSION["v22"];
$v33 = $_SESSION["v33"];
$fin = ''.$v33.'-'.$v22.'-'.$v11.''; 
$v_estado = $_SESSION["v_estado"];
$v_giro = $_SESSION["v_giro"];


///////////////////////////////////////////////	

if(!@mysql_connect("localhost", "ucrmk", "Pcrmk#2014")) 
	{}

	#$result = mysql_query("");


/* FILTRO POR FILTROS */

	$result = mysql_query("SELECT * FROM crmk.contacto WHERE (fecha >= '".$inicio."' AND fecha <= '".$fin."') AND (usuario != 'perl') AND (asignadoa != 'trash') ORDER BY id desc limit 0,999999");

/* FILTRO POR FILTROS */



	
	

	
	
	
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
	if ($i > 0) { 
	
	}
?>	
					<tr>
					<td align='left'>
						<?= $row['id'] ?>
						<?php
							$busca = $row['id'];
						?>
					</td>
					<td align='left'><?= $row['formulario'] ?></td>
					<td align='left'><font color='black'><?= $row['nombre'] ?></font></td>
					<td align='left'><?= $row['contacto2'] ?></td>
					<td align='left'><?= $row['contacto3'] ?></td>
					<td align='left'><?= $row['direccion'] ?></td>
					<td align='left'><?= $row['ciudad'] ?></td>
					<td align='left'><?= $row['pais'] ?></td>
					<td align='left'><?= $row['estado'] ?></td>
					<td align='left'><?= $row['telefono'] ?></td>
					<td align='left'><font color='blue'><?= $row['email'] ?></font></td>
					<td align='left'><?= $row['medio'] ?></td>
					<td align='left'><?= $row['giro'] ?></td>
					<td align='left'><?= $row['equipodeinteres'] ?></td>
					<!-- Página Web -->
					<td align='left'><?= $row['comeqenatp'] ?></td>
					<!-- Puesto -->
					<td align='left'><?= $row['eqclosqcuenta'] ?></td>
					<!--  -->
					<!-- 
					<td align='left'><?= $row['antacteq'] ?></td> 
					<td align='left'><?= $row['escliente'] ?></td>
					<td align='left'><?= $row['numerodecliente'] ?></td>
					-->
					<td align='left'><?= $row['motivodeconsulta'] ?></td>
					<td align='left'><?= $row['empresa'] ?></td>
					<td align='left'><?= $row['comentarios'] ?></td>
					<td align='left'><?= $row['fecha'] ?></td>
					<td align='left'><?= $row['asignadoa'] ?></td>
					

<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t1 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t1'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t2 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t2'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t3 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t3'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t4 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t4'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t5 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t5'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t6 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t6'] . '';

		$i_nombre++;

		}

?>
</td>
<td align='left'>
<?php
	
	$result_nombre = mysql_query("SELECT t7 FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento_tipo DESC limit 0,1");
	$i_nombre = 0;
		while ($row_nombre = mysql_fetch_array($result_nombre)) {
			if ($i_nombre > 0) {}

				echo '' . $row_nombre['t7'] . '';

		$i_nombre++;

		}

?>
</td>

					<!-- 

					<td align='left'><?= $row['Hora'] ?></td>
					<td align='left'><?= $row['formulario'] ?></td>
					<td align='left'><?= $row['usuario'] ?></td>
				
					-->
<?php					
					
					
					









#echo $row['id'];




/*
	$sql_asignacionesTotal = "SELECT * FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' AND tipo = 'No contesto'";
  	$result_asignacionesTotal = mysql_query($sql_asignacionesTotal);
  	$numero_asignacionesTotal = mysql_num_rows($result_asignacionesTotal);
  	echo '<td>'.$numero_asignacionesTotal.'</td>';
*/  	
/*
1 No contesto
2 Envío de correo
3 Llamada Efectiva
4 Demostración
5 Visita
*/




	$result111 = mysql_query("SELECT * FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca' ORDER BY fecha DESC limit 0,999");
	$i111 = 0;
		while ($row111 = mysql_fetch_array($result111)) {
			if ($i111 > 0) {
			}

			$row111_t1 = $row111['t1'];
				
			$i111++; 

		}
	echo '<td>'.$row111_t1.'-'.$row111['t2'].'-'.$row111['t3'].'-'.$row111['t4'].'-'.$row111['t5'].'-'.$row111['t6'].'-'.$row111['t7'].'-'.$row111['t8'].'</td>';

	$result222 = mysql_query("SELECT * FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca'  AND tipo = 'Envío de correo' ORDER BY fecha desc limit 0,999");
	$i222 = 0;
		while ($row222 = mysql_fetch_array($result222)) {
			if ($i222 > 0) {
			}
				
			$i222++; 

		}
	echo '<td>'.$i222.'</td>';

	$result333 = mysql_query("SELECT * FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca'  AND tipo = 'Llamada Efectiva' ORDER BY fecha desc limit 0,999");
	$i333 = 0;
		while ($row333 = mysql_fetch_array($result333)) {
			if ($i333 > 0) {
			}
				
			$i333++; 

		}
	echo '<td>'.$i333.'</td>';

	$result444 = mysql_query("SELECT * FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca'  AND tipo = 'Demostración' ORDER BY fecha desc limit 0,999");
	$i444 = 0;
		while ($row444 = mysql_fetch_array($result444)) {
			if ($i444 > 0) {
			}
				
			$i444++; 

		}
	echo '<td>'.$i444.'</td>';

	$result555 = mysql_query("SELECT * FROM crmk.ecrm_seguimiento_tipo WHERE id_seguimiento = '$busca'  AND tipo = 'Visita' ORDER BY fecha desc limit 0,999");
	$i555 = 0;
		while ($row555 = mysql_fetch_array($result555)) {
			if ($i555 > 0) {
			}
				
			$i555++; 

		}
	echo '<td>'.$i555.'</td>';











#$result2 = mysql_query("SELECT * FROM crmk.ecrm_comentarios_v WHERE id_seguimiento = '$busca' ORDER BY id_seguimiento desc limit 0,1");
$result2 = mysql_query("SELECT * FROM crmk.ecrm_comentarios_v WHERE id_seguimiento = '$busca' ORDER BY fechaproxima desc limit 0,999");
	$i2 = 0;
		while ($row2 = mysql_fetch_array($result2))
			{
				if ($i2 > 0)
					{ }
				/*
						echo '<b>Estado de venta: </b>'.$row2['estadodeventa'].'<br />';
						echo '<b>Próxima Llamada: </b>'.$row2['fechaproxima'].'<br />';
						echo '<b>Último Comentario: </b>'.$row2['comentariovendedor'].'<br />';
				*/
						
						echo '<td>'.$row2['estadodeventa'].'</td>';
						echo '<td>'.$row2['fechaproxima'].'</td>';
						echo '<td>'.$row2['comentariovendedor'].'</td>';
						

							$i2++; 
			}

















					
					
                    echo "</tr>";
                    $i++;
					
                }
/*
}

else{
echo 'Error de conexión';
}
*/
?>