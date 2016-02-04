<?php

# Informacion de la tabla de Comentarios para buscar el estado de la venta y la fecha proxima

  $result_ecrm_comentarios_s1 = mysql_query("SELECT * FROM ecrm_comentarios_s WHERE usuario = '$usuario' AND id_seguimiento = '$id' ORDER BY id_comentarios_s desc limit 0,1");
  $i_result_ecrm_comentarios_s1 = 0;
    while ($row_result_ecrm_comentarios_s1 = mysql_fetch_array($result_ecrm_comentarios_s1))
      {
        if ($i_result_ecrm_comentarios_s1 > 0)
          { }
            echo '<b>Próxima llamada: </b>'.$row_result_ecrm_comentarios_s1['fechaproxima'].'<br />';
            echo '<b>Estado de la venta: </b>'.$row_result_ecrm_comentarios_s1['estadodeventa'].'<br />';

            $i_result_ecrm_comentarios_s1++; 
      }      
/*PRUEBA EXTRA*/
?>
