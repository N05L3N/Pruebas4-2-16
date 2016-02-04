<?php
	
	$jcnoble = 'crm@kumasoftware.com';
	$header = "From: " . $jcnoble . " \r\n"; 
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/html"; 

	$id_seguimiento = 7948;

	$mensaje .= '<table border="0" cellpadding="3" cellspacing="3" style="color:#111; background-color: #fff; width: 800px; margin:auto;">
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
				
	$result_mail = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE id_seguimiento = '$id_seguimiento' ORDER BY id_seguimiento desc limit 1,999");
				
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

	$mensaje .= '<tr>
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
				</tr>';
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
		$para = 'eurrutia@kumasoftware.com, ventas4@kumasoftware.com, auxdiseno@avanceytec.com.mx';
	}
	else {
		$para = 'eurrutia@kumasoftware.com, ventas4@kumasoftware.com, auxdiseno@avanceytec.com.mx, '.$asignadoa.'@kumasoftware.com';	
	}
				
	$asunto = 'Mensaje de Seguimiento Folio #'.$id_seguimiento.'';
	mail($para, $asunto,utf8_decode($mensaje), $header); 

?>