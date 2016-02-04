  <h4 class="sub-header">Eliminar</h4>
          <div class="table-responsive">
          <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th colspan="2">Nombre</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Correo</th>
                  <th>Tipo</th>
                </tr>
              </thead>
            
              <tbody>
<?php

  $result = mysql_query("SELECT * FROM usuarios WHERE  tipo = 'Soporte' ORDER BY id_usuario ASC limit 100");
  
  $i = 0;

  while ($row = mysql_fetch_array($result)) {
    if ($i > 0) {}
    
      echo "<tr>";  
      echo '<form class="form-signin" action="usuarios.php" name="editar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="u_id_usuario">';
      
      echo '<td>'.$row['nombre1'].'</td>';
      echo '<td>'.$row['apellido1'].'</td>';;
      echo '<td>'.$row['usuario'].'</td>';
      echo '<td>'.$row['clave'].'</td>';
      echo '<td>'.$row['correo'].'</td>';
      echo '<td>'.$row['tipo'].'</td>';
      
      echo '<td align="center">';
      echo '<form class="form-signin" action="usuarios.php" name="eliminar_usuario" method="post">';
      echo '<input type="hidden" value="'.$row['id_usuario'].'" name="d_id_usuario">';
      echo '<input type="hidden" class="form-control" name="d_confirmar" value="">';
      echo '<button class="btn btn-danger btn-xs" type="submit" onfocus="javascript:this.form.d_confirmar.value =\'confirm\';">Eliminar Usuario</button></form></td>';
      echo "</tr>";

    $i++;
    }
?>            
              </tbody>
            </table>
          </div>


</div>