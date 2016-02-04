<?php 
      $fechaE = explode("-", $rows['fecha']);
?>

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

<a href="cliente.php?id=<?= $rows['id'] ?>" class="link">
<div style="font-size:13px;" id="<?= $rows['id'] ?>">

<table class="table table-condensed table-bordered table-striped asignaciones">
      <tr>
            <th style="width:25%;">Folio</th><td style="width:75%;"> <?= $rows['id'] ?></td>
      </tr>
      <tr>
            <th>Nombre:</th><td> <?= $rows['nombre'] ?><?= $rows['apellidos'] ?></td>
      </tr>
      <tr>
            <th>E-mail:</th><td> <?= $rows['email'] ?></td>
      </tr>      
      <tr>
            <th>Télefono:</th><td><?= $rows['telefono'] ?>, <?= $rows['nombre_recomendador'] ?></td>
      </tr>      
      <tr>
            <th>Profesión:</th>
            <td>
                  <?= $rows['contacto2'] ?>
            </td>
      </tr>
      <tr>
            <th>Empresa y Puesto:</th>
            <td>
                  <?= $rows['empresa'] ?> (<acronym title="Puesto"><?= $rows['eqclosqcuenta'] ?></acronym>)
            </td>
      </tr>
      <tr>
            <th>Pais:</th><td> <?= $rows['pais'] ?></td>
      </tr>
      <tr>
            <th>Estado:</th><td> <?= $rows['estado'] ?></td>
      </tr>
      <tr>
            <th>Ciudad:</th><td> <?= $rows['ciudad'] ?></td>
      </tr>
</table>
      
</div>
</a>