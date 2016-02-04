<?php
/* /Asignaciones */
echo '
<b>Nombre:</b> '.$row2['nombre'].'
<br />
<b>E-mail:</b><acronym title="'.$row2['email'].'">'.$row2['email'].'</acronym>
<br />
<b>Telefono:</b>('.$row2['lada'].')'.$row2['telefono'].'
<br />
<b>Pais:</b> '.$row2['pais'].'
<br />
<b>Fecha:</b> '.$row2['fecha'].'
<br />

<b>Comentario:</b> '.$row2['comentarios'].'';
?>