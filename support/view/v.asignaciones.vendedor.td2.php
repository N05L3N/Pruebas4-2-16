<style>
      table.asignaciones {
            color:#111;
            font-size:12px;
            width:100%;
      }
      table.asignaciones a {
            color:#111;
            text-decoration: none;
      }
      table.asignaciones a:hover {
            color:#111;
            text-decoration: none;
      }
</style>
<a class="iframe" href="cliente5?id=<?= $rows['id'] ?>">
<table class="table table-condensed table-bordered table-striped asignaciones">
      <tr>
            <th style="width:25%;">Folio</th>
            <td style="width:75%;">
                  <?= $id ?>
            </td>
      </tr>
      <tr>
            <th>Nombre:</th>
            <td>
                  <?= $nombre ?><?= $apellidos ?>
            </td>
      </tr>
      <tr>
            <th>E-mail:</th>
            <td>
                  <?= $email ?>
            </td>
      </tr>
      <tr>
            <th>Télefono(s):</th>
            <td>
                  <acronym title="Telefono"><?= $telefono ?></acronym> / <acronym title="Celular"><?= $nombre_recomendador ?></acronym>
            </td>
      </tr>
      <tr>
            <th>Profesión:</th>
            <td>
                  <?= $contacto2 ?>
            </td>
      </tr>
      <tr>
            <th>Empresa y Puesto:</th>
            <td>
                  <?= $empresa ?> (<acronym title="Puesto"><?= $eqclosqcuenta ?></acronym>)
            </td>
      </tr>
      <tr>
            <th>Pais:</th>
            <td>
                  <?= $pais ?>
            </td>
      </tr>
      <tr>
            <th>Estado:</th>
            <td>
                  <?= $estado ?>
            </td>
      </tr>
      <tr>
            <th>Ciudad:</th>
            <td>
                  <?= $ciudad ?>
            </td>
      </tr>
</table>
</a>

<?php

      $fecha_query = mysql_query("SELECT fecha_final, fecha_venta FROM ecrm_asignacion WHERE id_seguimiento = $id AND age = 1");

      $i = 0;
      while ($row = mysql_fetch_array($fecha_query)) {
            if ($i > 0) {}
            $fecha_id_ecrm_asignacion = $row['id_ecrm_asignacion'];
            
            $fecha_fecha_venta = $row['fecha_venta'];
            $fecha_fecha_inicial = $row['fecha_inicial'];
            $fecha_fecha_final = $row['fecha_final'];
       
            $fecha_fecha_ventaE = explode("-", $fecha_fecha_venta);
            $fecha_fecha_venta = ''.$fecha_fecha_ventaE[2].'-'.$fecha_fecha_ventaE[1].'-'.$fecha_fecha_ventaE[0].'';

            $fecha_fecha_finalE = explode("-", $fecha_fecha_final);
            $fecha_fecha_final = ''.$fecha_fecha_finalE[2].'-'.$fecha_fecha_finalE[1].'-'.$fecha_fecha_finalE[0].'';


            $i++; 
      }
?>




<script type="text/javascript">

    $(function(){
        $( "#datepicker1<?= $id ?>" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });

    $(function(){
        $( "#datepicker2<?= $id ?>" ).datepicker({ 
            maxDate: '+0d', 
            buttonImage: 'img/icons/calendar.png',
            showOn: 'both',
            buttonImageOnly: true
        });
    });
    
</script>

<form action="#" method="post">
<table class="table table-condensed table-bordered table-striped asignaciones">
      <tr>
            <th>Inicia Venta</th>
            <td>
                  <div class="input-group input-group-md" style="width:200px;">
                        <input type="hidden" name="fecha_id" value="<?= $id ?>">
                        <input type="text" id="datepicker1<?= $id ?>" name="fecha_venta" onlyread="onlyread" class="form-control" value="<?= $fecha_fecha_venta ?>">
                  </div>
            </td>
      </tr>
      <tr>
            <th>Finaliza Soporte</th>
            <td>
                  <div class="input-group input-group-md" style="width:200px;">
                        <input type="text" id="datepicker2<?= $id ?>" name="fecha_final" onlyread="onlyread" class="form-control" value="<?= $fecha_fecha_final ?>">
                  </div>
            </td>
      </tr>
      <tr>
            <td colspan="2" style="text-align:center;">
                  <input type="submit" value="Actualizar Fecha de Soporte" class="btn btn-default">
            </td>
      </tr>
</table>
</form>