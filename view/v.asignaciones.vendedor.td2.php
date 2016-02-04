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