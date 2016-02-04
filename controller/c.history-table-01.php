<?php

    # echo '' .$r['id_seguimiento_tipo'] . '';
    # echo '' .$r['id_seguimiento'] . '';
    # echo '' .$r['usuario'] . '>';
    # echo '' .$r['tipo'] . '';
    # echo '' .$r['t1'] . ''; # No contesto
    # echo '' .$r['t2'] . ''; # Envío de correo
    # echo '' .$r['t3'] . ''; # Llamada Efectiva
    # echo '' .$r['t4'] . ''; # Demo Online
    # echo '' .$r['t5'] . ''; # Demo Presencial
    # echo '' .$r['t6'] . ''; # Visita
    # echo '' .$r['t7'] . '';
    # echo '' .$r['fecha'] . '';
    
            /**/

            $filterDate1E = explode("-", $filterDate1);
            $filterDate1US = ''.$filterDate1E[2].'-'.$filterDate1E[1].'-'.$filterDate1E[0].'';
            $filterDate2E = explode("-", $filterDate2);
            $filterDate2US = ''.$filterDate2E[2].'-'.$filterDate2E[1].'-'.$filterDate2E[0].'';


            if ($filterDate1US == '--' OR $filterDate2US == '--' OR $filterDate1US == '' OR $filterDate2US == '') {
                
                $whereDateRecords = "fecharespuesta > '2010-12-10'";
                $whereDateRecords2 = "fecha > '2010-12-10'";

            }
            
            else {

                    $whereDateRecords = "fecharespuesta >= '$filterDate1US' AND fecharespuesta <= '$filterDate2US'";
                    # $whereDateRecords2 = "fecha > '$filterDate1US' OR fecha = '$filterDate2US'";
                    $whereDateRecords2 = "fecha >= '$filterDate1US 00:00:00' AND fecha <= '$filterDate2US 23:59:59'";

            }            

            $res = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'sdelacruz' OR usuario = 'ccastillo' OR usuario = 'dfernandez' OR usuario ='aaranza') AND $whereDateRecords ORDER BY usuario ASC LIMIT 0,9999");

            $i = 1;
            $seguimientosV1 = 0;
            $seguimientosV2 = 0;
            $seguimientosV3 = 0;
            $seguimientosV4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $seguimientosV1 = $seguimientosV1;
                        $seguimientosV1++;
                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $seguimientosV2 = $seguimientosV2;
                        $seguimientosV2++;
                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $seguimientosV3 = $seguimientosV3;
                        $seguimientosV3++;
                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $seguimientosV4 = $seguimientosV4;
                        $seguimientosV4++;
                    }

                    else {

                    }

                    $i++;

            }

            /**/

            $res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t2 = 'Envío de correo') AND $whereDateRecords2 ORDER BY id_seguimiento_tipo ASC LIMIT 0,9999");
            $resTest = $res;
            
            $i = 1;
            $correosV1 = 0;
            $correosV2 = 0;
            $correosV3 = 0;
            $correosV4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $correosV1 = $correosV1;
                        $correosV1++;

                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $correosV2 = $correosV2;
                        $correosV2++;

                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $correosV3 = $correosV3;
                        $correosV3++;

                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $correosV4 = $correosV4;
                        $correosV4++;

                    }

                    else {

                    }

                    $i++;

            }
            

            /**/

            $res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t4 = 'Demo Online' OR t5 = 'Demo Presencial') AND ($whereDateRecords2) ORDER BY id_seguimiento_tipo ASC LIMIT 0,9999");
            
            $i = 1;
            $demosV1 = 0;
            $demosV2 = 0;
            $demosV3 = 0;
            $demosV4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $demosV1 = $demosV1;
                        $demosV1++;

                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $demosV2 = $demosV2;
                        $demosV2++;

                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $demosV3 = $demosV3;
                        $demosV3++;

                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $demosV4 = $demosV4;
                        $demosV4++;

                    }

                    else {

                    }

                    $i++;

            }

        /**/

        $res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t6 = 'Visita') AND $whereDateRecords2 ORDER BY id_seguimiento_tipo ASC LIMIT 0,9999");
            
            $i = 1;
            $visitasV1 = 0;
            $visitasV2 = 0;
            $visitasV3 = 0;
            $visitasV4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $visitasV1 = $visitasV1;
                        $visitasV1++;

                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $visitasV2 = $visitasV2;
                        $visitasV2++;

                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $visitasV3 = $visitasV3;
                        $visitasV3++;

                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $visitasV4 = $visitasV4;
                        $visitasV4++;

                    }

                    else {

                    }

                    $i++;

            }

        /**/

?>