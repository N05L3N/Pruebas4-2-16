<?php
        # Inicia Envio
        $user = 'amariscal@avanceytec.com.mx';

        $header = 'From: ' . $user . " \r\n"; 
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
        $header .= "Mime-Version: 1.0 \r\n"; 
        $header .= "Content-Type: text/plain"; 

        $mensaje .= "Este mensaje fue enviado por: " . $nombre . "\r\n"; 
        $mensaje .= "\r\nCorreo electronico: " . $email . "\r\n"; 
        $mensaje .= "\r\nTelefono : " . $lada . "";
        $mensaje .= "" . $telefono . "\r\n";
        $mensaje .= "\r\nPais: " . $pais . "\r\n";
        $mensaje .= "\r\nEstado: " . $estado . "\r\n";
        $mensaje .= "\r\nOcupacion: " . $ocupacion . "\r\n";
        $mensaje .= "\r\nMedio por el cual se entero del sitio: " . $medio . "\r\n";
        $mensaje .= "\r\nEsta interesado en el producto: " . $producto . "\r\n";
        $mensaje .= "\r\nURL de la sección: " . $url . "\r\n";
        $mensaje .= "\r\nComentarios : " . $comentarios . "\r\n";

        
        $para = 'amariscal@avanceytec.com.mx';
        
        # $para = 'auxdiseno@avanceytec.com.mx';
        $asunto = 'Contacto Kumasoftware 2015';
            
        mail($para, $asunto, utf8_decode($mensaje), $header); 
        # Termina Envio

?>
<h3>Información capturada correctamente</h3>