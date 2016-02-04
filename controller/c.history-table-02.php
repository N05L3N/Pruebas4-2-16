<?php

            ini_set('date.timezone', 'America/Chihuahua');

            $time2 = date('Y-m-d', gmdate('U'));

            $whereDateRecords = "fecharespuesta = '$time2'";
            $whereDateRecords2 = "fecha = '$time2'";

            $res = mysql_query("SELECT * FROM ecrm_comentarios_v WHERE (usuario = 'sdelacruz' OR usuario = 'ccastillo' OR usuario = 'dfernandez' OR usuario ='aaranza') AND $whereDateRecords ORDER BY usuario ASC LIMIT 0,9999");

            $i = 1;
            $seguimientos2V1 = 0;
            $seguimientos2V2 = 0;
            $seguimientos2V3 = 0;
            $seguimientos2V4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $seguimientos2V1 = $seguimientos2V1;
                        $seguimientos2V1++;
                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $seguimientos2V2 = $seguimientos2V2;
                        $seguimientos2V2++;
                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $seguimientos2V3 = $seguimientos2V3;
                        $seguimientos2V3++;
                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $seguimientos2V4 = $seguimientos2V4;
                        $seguimientos2V4++;
                    }

                    else {

                    }

                    $i++;

            }

            /**/

            $res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t2 = 'Envío de correo') AND $whereDateRecords2 ORDER BY id_seguimiento_tipo ASC LIMIT 0,9999");
            
            $i = 1;
            $correos2V1 = 0;
            $correos2V2 = 0;
            $correos2V3 = 0;
            $correos2V4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $correos2V1 = $correos2V1;
                        $correos2V1++;

                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $correos2V2 = $correos2V2;
                        $correos2V2++;

                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $correos2V3 = $correos2V3;
                        $correos2V3++;

                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $correos2V4 = $correos2V4;
                        $correos2V4++;

                    }

                    else {

                    }

                    $i++;

            }
            

            /**/

            $res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t4 = 'Demo Online' OR t5 = 'Demo Presencial') AND $whereDateRecords2 ORDER BY id_seguimiento_tipo ASC LIMIT 0,9999");
            
            $i = 1;
            $demos2V1 = 0;
            $demos2V2 = 0;
            $demos2V3 = 0;
            $demos2V4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $demos2V1 = $demos2V1;
                        $demos2V1++;

                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $demos2V2 = $demos2V2;
                        $demos2V2++;

                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $demos2V3 = $demos2V3;
                        $demos2V3++;

                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $demos2V4 = $demos2V4;
                        $demos2V4++;

                    }

                    else {

                    }

                    $i++;

            }

        /**/

        $res = mysql_query("SELECT * FROM ecrm_seguimiento_tipo WHERE (t6 = 'Visita') AND $whereDateRecords2 ORDER BY id_seguimiento_tipo ASC LIMIT 0,9999");
            
            $i = 1;
            $visitas2V1 = 0;
            $visitas2V2 = 0;
            $visitas2V3 = 0;
            $visitas2V4 = 0;
            
            while ($r = mysql_fetch_array($res)) {
            
                if ($i > 0) {}

                    if ($r['usuario'] == 'sdelacruz') {
                        
                        $visitas2V1 = $visitas2V1;
                        $visitas2V1++;

                    }
                    
                    else if ($r['usuario'] == 'ccastillo') {

                        $visitas2V2 = $visitas2V2;
                        $visitas2V2++;

                    }

                    else if ($r['usuario'] == 'dfernandez') {

                        $visitas2V3 = $visitas2V3;
                        $visitas2V3++;

                    }

                    else if ($r['usuario'] == 'aaranza') {

                        $visitas2V4 = $visitas2V4;
                        $visitas2V4++;

                    }

                    else {

                    }

                    $i++;

            }

        /**/

?>