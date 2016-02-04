<?php

function selectFacturados() {

$q = mysql_query("SELECT DISTINCT (id_seguimiento) FROM ecrm_comentarios_v WHERE horaasignacion = 'ok' AND estadodeventa = 'facturado'  AND id_seguimiento != '' ORDER BY id_comentarios_v desc limit 1000");

$i = 0;
while ($r = mysql_fetch_array($q)) {

        if ($i > 0) {}
            
            $fxy = ''.$fxy.'id = '.$r['id_seguimiento'].' OR ';
            
        $i++; 
}

      $where = substr($fxy, 0, -4);
      
      $count="SELECT COUNT(*) FROM ".TABLE." WHERE $where";
      $select = "SELECT * FROM ".TABLE." WHERE $where ORDER BY $order";
      $select .= " LIMIT $init, $limit_end";
      # $_SESSION['a15012801'] =  '<pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;"><br>'.$where.'</pre>';
      # $_SESSION['a15012802'] =  '<pre style="background-color:#112435; color:#f4dd0b; width:1000px; height:100px;">'.$count.'<br>'.$select.'</pre>';
      # echo $_SESSION['a15012801'];
      # echo $_SESSION['a15012802'];

}

?>