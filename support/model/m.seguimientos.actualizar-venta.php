<?php

function tmplate() {
	echo 'prueba x;';
}

# < Conexión

$conexion = mysql_connect("$dbh", "$dbu", "$dbp") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("$dbn", $conexion);
mysql_query("SET NAMES 'utf8'");

# > Conexión

$user = $_SESSION["usu"];

	if ($_POST["fechaprox"] != '') {
	
		$fechaprox = $_POST["fechaprox"];
		$fechaproxE = explode("-", $fechaprox);	
	
		$fechadia = $fechaproxE[0];
		$fechames = $fechaproxE[1];
		$fechaano = $fechaproxE[2];
	}

	else {

		$fechadia = $_POST["fechadia"];
		$fechames = $_POST["fechames"];
		$fechaano = $_POST["fechaano"];

	}

	
	if ($_POST["tipodeseguimiento"] == 'admin') {
			
		$fechadiaprox = $_POST["fechadiaprox"];
		$fechamesprox = $_POST["fechamesprox"];
		$fechaanoprox = $_POST["fechaanoprox"];

	}
		
	else {

		$fechadiaprox = $fechadia;

		if ($fechadiaprox == '1' OR $fechadiaprox == '2' OR $fechadiaprox == '3' OR $fechadiaprox == '4' OR $fechadiaprox == '5' OR $fechadiaprox == '6' OR $fechadiaprox == '7' OR $fechadiaprox == '8' OR $fechadiaprox == '9') {
			$fechadiaprox = '0'.$fechadiaprox.'';
		}
		else {
		}

		$fechamesprox = $fechames;
		$fechaanoprox = $fechaano;

	}

	$numerodefactura = $_POST["numerodefactura"];

	if (isset($_POST["estadodeventa"])) {

		$id_comentarios_s = 0;
		$id_seguimiento = $_POST["idedit"];
		$usuario = $_SESSION["usuario"];
		$termometro = $_POST["termometro"];
		$estadodeventa = $_POST["estadodeventa"];
		$comentariovendedor = $_POST["comentariovendedor"];
		$num_factura = $_POST["num_factura"];
		
		

		$tipodeseguimiento = $_POST['tipodeseguimiento'];
		
		if ($tipodeseguimiento == 'admin') {
			$fechaasignacion = $_POST["fechaasignacion"];
		}
		else {
			$fechaasignacion = $_POST["fechaasignacion"];
		}


		$horaasignacion = 'a';
		$dte = date(ymdhis);  
		$dia = date(d);
		$mes = date(m);
		$ano = date(Y);
		$horaServ = date(h);
		$minuto = date(i);
		$fecharespuesta = ''.$ano.''.$mes.''.$dia.'';
		$hora = $horaServ - 7;
		$horarespuesta = ''.$hora.':'.$minuto.' pm';
		$hotcake = $_POST['hotcake'];
		$_SESSION['pruebadehora'] = ''.$horarespuesta.''.$fecharespuesta.'';

		/* Facturado */
		$montodeventa = $_POST['montodeventa'];
		$softwarevendido = $_POST['softwarevendido'];
		$fechaventa = $_POST['fechaventa'];
		$fechaventaE = explode("-", $fechaventa);
		$fechaventa = ''.$fechaventaE[2].'-'.$fechaventaE[1].'-'.$fechaventaE[0].'';
		
		

		/* Hora */

		if ($hora == '-5') {
			$hora = '7';
			$ampm = 'am';
		}

		else if ($hora == '-4') {
			$hora = '8';
			$ampm = 'am';
		}

		else if ($hora == '-3') {
			$hora = '9';
			$ampm = 'am';
		}

		else if ($hora == '-2') {
			$hora = '10';
			$ampm = 'am';
		}

		else if ($hora == '-1') {
			$hora = '11';
			$ampm = 'am';
		}

		else {
			
		}

		$horarespuesta = ''.$hora.':'.$minuto.' '.$ampm.'';
	
		/* Hora */

		$fechaproxima = ''.$fechaanoprox.'-'.$fechamesprox.'-'.$fechadiaprox.'';

		$sql = "INSERT INTO ecrm_comentarios_s (id_comentarios_s,id_seguimiento,usuario,termometro,estadodeventa,comentariovendedor,factura,fechaasignacion,horaasignacion,fecharespuesta,horarespuesta,fechaproxima)";
    		$sql.= "VALUES ('".$id_comentarios_s."','".$id_seguimiento."','".$usuario."','".$termometro."','".$estadodeventa."','".$comentariovendedor."','".$factura."','".$fechaasignacion."','".$horaasignacion."','".$fecharespuesta."','".$horarespuesta."','".$fechaproxima."')";
    		$_SESSION['testerboom'] = $sql;

    		$sql_hotcake = "INSERT INTO ecrm_seguimiento_tipo (id_seguimiento_tipo,id_seguimiento,usuario,tipo,fecha)";
    		#$sql_hotcake.= "VALUES (0,'".$id_seguimiento."','".$usuario."','".$tipo."','2015-01-27 18:30:00')";
    		$sql_hotcake.= "VALUES (0,'".$id_seguimiento."','".$usuario."','".$hotcake."',now())";

    		$sql_facturado = "INSERT INTO ecrm_seguimiento_facturado (id_seguimiento_facturado,id_seguimiento,usuario,montodeventa,softwarevendido,fechaventa,fecha)";
    		$sql_facturado.= "VALUES (0,'".$id_seguimiento."','".$usuario."','".$montodeventa."','".$softwarevendido."','".$fechaventa."',now())";
			
			$camino = '2';
			if ($_POST["tipodeseguimiento"] == 'admin') {

			}
			else {
				$sql2 = "UPDATE `crmk`.`ecrm_comentarios_s` SET `horaasignacion`='ok', `fechaproxima`='$fechaproxima' WHERE `id_seguimiento`='$id_seguimiento';";
				mysql_query($sql2, $conexion);
			}

			mysql_query($sql, $conexion);
			mysql_query($sql_hotcake, $conexion);
			
			if ($montodeventa != '') {
				mysql_query($sql_facturado, $conexion);	
			}
			else {

			}
			

			$status = "ok";
			
			$_SESSION["titleMensaje"] = '22';
			$_SESSION["h4Mensaje"] = '22';

			/*AB*/
			if ($_POST["update"] == 'update') {
				$sql3 = "UPDATE `crmk`.`agenda` SET `fecha`='2015-01-08', `hora`='11:11:11' WHERE `id_seguimiento`='$id';";
			}
		
			else {
				$sql3 = "INSERT INTO agenda (id,id_seguimiento,fecha,hora)";
				$sql3.= "VALUES ('0','".$id_seguimiento."','".$fecharespuesta."','".$horarespuesta."')";	
			}
			/*AB*/
			mysql_query($sql3, $conexion);

		

		$_SESSION["titleMensaje"] = 'CRM';

		# INICIA ENVIO

				$fcasignadoa = $_POST["fcasignadoa"];
				$jcnoble = 'crm@kumasoftware.com';
				$header = "From: " . $jcnoble . " \r\n"; 
				$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
				$header .= "Mime-Version: 1.0 \r\n"; 
				$header .= "Content-Type: text/html"; 

				 $mensaje .= '
<table border="0" cellpadding="3" cellspacing="3" style="color:#111; background-color: #fff; width: 800px; margin:auto;">
	<tbody>
		<tr>
			<td colspan="2" style="background-color:#2ca8e4;">
				<table style="color:white; font-family: century gothic, calibri, arial; font-weight:bold; width:800px;">
					<tr>
						<td style="text-align:left;">
							Folio: #'.$id_seguimiento.'
						</td>
					</tr>
				</table>
			</td>
		</tr>';

				 /* SELECT ENVIO*/
				
				$result_mail = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento desc limit 1,999");
				
				$i_mail = 0;

				while ($row_mail = mysql_fetch_array($result_mail)) {
					if ($i_mail > 0) {

					}

					if ($row_mail['usuario'] == $usuario) {
						$color = 'ffffff';
					}

					else {
						$color = 'f8f8f8';	
					}

					$fecharespuestaE = explode("-", $row_mail['fecharespuesta']);

					$mensaje .= '
					<tr>
						<td style="background-color:#'.$color.'; border:2px #eeeeee solid;" colspan="2">
							'.$row_mail['comentariovendedor'].'
							<table border="0" cellpadding="2" cellspacing="2" style="width:800px; border:1px #eeeeee dashed;">
								<tr>
									<td>
										<i>'.$row_mail['usuario'].'</i>
									</td>
									<td style="text-align:right;">
										<small>'.$fecharespuestaE[2].'-'.$fecharespuestaE[1].'-'.$fecharespuestaE[0].'</small>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					';
				}




				/*  */

					$result_asignadoa = mysql_query("SELECT asignadoa FROM contacto WHERE id = '$id_seguimiento' ORDER BY id desc");

					$i_asignadoa = 0;

					while ($row_asignadoa = mysql_fetch_array($result_asignadoa)) {
						
						if ($i_asignadoa > 0) {

						}
					
						$asignadoa = $row_asignadoa['asignadoa'];

					}

				/*  */




				$mensaje .= '</tbody></table>';

				/* / SELECT ENVIO*/
				if ($asignadoa == '') {
					$para = 'eurrutia@kumasoftware.com, aarvizo@kumasoftware.com, auxdiseno@avanceytec.com.mx';
				}
				else {
					$para = 'eurrutia@kumasoftware.com, aarvizo@kumasoftware.com, auxdiseno@avanceytec.com.mx, '.$asignadoa.'@kumasoftware.com';	
				}
				
				
				# $para = 'auxdiseno@avanceytec.com.mx';
				
				$asunto = 'Mensaje de Seguimiento Folio #'.$id_seguimiento.'';
				mail($para, $asunto,utf8_decode($mensaje), $header); 
			
			# TERMINA ENVIO

		if ($tipo == 'administrador' OR $tipodeseguimiento == 'admin') {
			header("Location: modules/m.iframe-breaker.php?id=$id_seguimiento");
		}
		else {
			header("Location: {$_SERVER['HTTP_REFERER']}".SID);
		}

		$fcasignadoa = $_POST["fcasignadoa"];
	
	} # Cierra if del insert

# Variables
$status = "";
$im1 = $_SESSION["im1"];
$conf = 'test';

?>