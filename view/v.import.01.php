<?php
$dbh = 'localhost';
$dbu = 'ucrmk';
$dbp = 'Pcrmk#2014';
$dbn = 'crmk';

$mysql_hostname = $dbh;
$mysql_user = $dbu;
$mysql_password = $dbp;
$mysql_database = "$dbn";
$prefix = "";
$conexion = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $conexion) or die("Opps some thing went wrong");
mysql_set_charset('utf8', $link);
?>

<h3>Seleccione un archivo .csv</h3>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
	<div class="row">
		<div class="col-md-8">
			<input name="csv" type="file" id="csv" class="form-control" /> 
		</div>
		<div class="col-md-4">
			<button type="submit" class="btn btn-primary btn-md">
  				<span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Cargar Base
			</button>
		</div>
	</div>
</form>


<h4>Plantilla</h4>
<ul>
	<li>
		<a href="plantilla.csv">
			<span class="glyphicon glyphicon-close-file" aria-hidden="true"></span> Descargar Plantilla</li>
		</a>
</ul>

<hr>

<br>

<table class="table table-striped table-bordered">
	<caption>
		Último registro
	</caption>
<?php

	$result3 = mysql_query("SELECT * FROM contacto ORDER BY id DESC limit 0,1");
	mysql_query ("SET NAMES 'utf8'");

	$i3 = 0;
	
	while ($row3 = mysql_fetch_array($result3)) { 
		if ($i3 > 0) {
	}
					
					echo '<tr><th style="width:30px;">Id</th><td>' . $row3['id'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Nombre</th><td>' . $row3['nombre'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="contacto2">Profesión</th><td>' . $row3['contacto2'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="contacto3">Detalle Especialidad</th><td>' . $row3['contacto3'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Direccion</th><td>' . $row3['direccion'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Ciudad</th><td>' . $row3['ciudad'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Pais</th><td>' . $row3['pais'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Estado</th><td>' . $row3['estado'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Lada</th><td>' . $row3['lada'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Telefono</th><td>' . $row3['telefono'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Email</th><td>' . $row3['email'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Medio</th><td>' . $row3['medio'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Giro</th><td>' . $row3['giro'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Comentarios</th><td>' . $row3['comentarios'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Fecha</th><td>' . $row3['fecha'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Hora</th><td>' . $row3['Hora'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Formulario</th><td>' . $row3['formulario'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="equipodeinteres">Software</th><td>' . $row3['equipodeinteres'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="comeqenatp">Página Web</th><td>' . $row3['comeqenatp'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="eqclosqcuenta">Puesto</th><td>' . $row3['eqclosqcuenta'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="antacteq"></th><td></td></tr>'; # echo '<td>' . $row3['antacteq'] . '</td>';
					echo '<tr><th style="width:30px;" class="escliente"></th><td></td></tr>'; # echo '<td>' . $row3['escliente'] . '</td>';
					echo '<tr><th style="width:30px;" class="numerodecliente"></th><td></td></tr>'; # echo '<td>' . $row3['numerodecliente'] . '</td>';
					echo '<tr><th style="width:30px;" class="motivodeconsulta">Motivo de consulta</th><td>' . $row3['motivodeconsulta'] . '</td></tr>';
					echo '<tr><th style="width:30px;">Empresa</th><td>' . $row3['empresa'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="nombre_recomendador">Celular</th><td>' . $row3['nombre_recomendador'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="sucursal_recomendador"></th><td></td></tr>'; # echo '<td>' . $row3['sucursal_recomendador'] . '</td>';
					echo '<tr><th style="width:30px;" class="comentario_vendedor"></th><td></td></tr>'; # echo '<td>' . $row3['comentario_vendedor'] . '</td>';
					echo '<tr><th style="width:30px;" class="asignadoa">Asignado</th><td>' . $row3['asignadoa'] . '</td></tr>';
					echo '<tr><th style="width:30px;" class="fechadecontacto"></th><td></td></tr>'; # echo '<td>' . $row3['fechadecontacto'] . '</td>';
					echo '<tr><th style="width:30px;" class="fechaasignacion"></th><td></td></tr>'; # echo '<td>' . $row3['fechaasignacion'] . '</td>';
					echo '<tr><th style="width:30px;" class="fechaventa"></th><td></td></tr>'; # echo '<td>' . $row3['fechaventa'] . '</td>';
					echo '<tr><th style="width:30px;" class="estadodeventa"></th><td></td></tr>'; # echo '<td>' . $row3['estadodeventa'] . '</td>';
					echo '<tr><th style="width:30px;" class="numerodefactura"></th><td></td></tr>'; # echo '<td>' . $row3['numerodefactura'] . '</td>';
					echo '<tr><th style="width:30px;" class="usuario">Usuario</th><td>' . $row3['usuario'] . '</td></tr>';
					echo '</tr>';

	$i3++; 
	
	}

?>
</table>

<?php  

if ($_FILES[csv][size] > 0) { 
	
	$file = $_FILES[csv][tmp_name]; 
	$handle = fopen($file,"r"); 
     	
     	# $handle = str_replace(",","",$handle1));
     	# $dat4 = str_replace(",","+",addslashes($data[4]));

	do { 
		if ($data[0]) { 
			mysql_query("INSERT INTO contacto (id,nombre,contacto2,contacto3,direccion,ciudad,pais,estado,lada,telefono,email,medio,giro,comentarios,fecha,Hora,formulario,equipodeinteres,comeqenatp,eqclosqcuenta,antacteq,escliente,numerodecliente,motivodeconsulta,empresa,nombre_recomendador,sucursal_recomendador,comentario_vendedor,asignadoa,fechadecontacto,fechaasignacion,fechaventa,estadodeventa,numerodefactura,usuario) VALUES 
				( 
					'0', 
					'".addslashes($data[1])."', 
					'".addslashes($data[2])."',
					'".addslashes($data[3])."',
					'".addslashes($data[4])."',
					'".addslashes($data[5])."',
					'".addslashes($data[6])."',
					'".addslashes($data[7])."',
					'".addslashes($data[8])."',
					'".addslashes($data[9])."',
					'".addslashes($data[10])."',
					'".addslashes($data[11])."',
					'".addslashes($data[12])."',
					'".addslashes($data[13])."',
					'2015-12-10',
					'1:00 pm',
					'".addslashes($data[16])."',
					'".addslashes($data[17])."',
					'".addslashes($data[18])."',
					'".addslashes($data[19])."',
					'".addslashes($data[20])."',
					'".addslashes($data[21])."',
					'".addslashes($data[22])."',
					'".addslashes($data[23])."',
					'".addslashes($data[24])."',
					'".addslashes($data[25])."',
					'".addslashes($data[26])."',
					'".addslashes($data[27])."',
					'".addslashes($data[28])."',
					'0000-00-00',
					'0000-00-00',
					'".addslashes($data[31])."',
					'".addslashes($data[32])."',
					'".addslashes($data[33])."',
					'csv2015'
				) 
			"); 
			# id+# nombre+# contacto2+# contacto3+# direccion+# ciudad+# pais+# estado+# lada+# telefono+# email+# medio+# giro+# comentarios+# fecha+# Hora+# formulario+# equipodeinteres+# comeqenatp+# eqclosqcuenta+# antacteq+# escliente+# numerodecliente+# motivodeconsulta+# empresa+# nombre_recomendador+# sucursal_recomendador+# comentario_vendedor+# asignadoa+# fechadecontacto+# fechaasignacion+# fechaventa+# estadodeventa+# numerodefactura+# usuario+
		} 
	} 
	while ($data = fgetcsv($handle,1000,";","'")); 
    
	header('Location: import.php?success=1'); die; 
}

?> 