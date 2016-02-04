<style>
            a.link {
                  text-decoration: none;
                  color: black;
            }
</style>

<a href="cliente.php?id=<?= $rows['id'] ?>" class="link">
<div style="font-size:13px;" id="<?= $rows['id'] ?>">

      <b>Folio:</b> <?= $rows['id'] ?>
      <br />

      <b>Nombre:</b> <?= $rows['nombre'] ?><?= $rows['apellidos'] ?>
      <br />
      
      <b>E-mail:</b> <?= $rows['email'] ?>
      <br />
      
      <b>Télefono:</b><?= $rows['lada'] ?> <?= $rows['telefono'] ?>
      <br />

      <b>Pais:</b> <?= $rows['pais'] ?>
      <br />

      <b>Estado:</b> <?= $rows['estado'] ?>
      <br />

      <b>Ciudad:</b> <?= $rows['ciudad'] ?>
      <br />

      <b>Interesado en:</b> <?= $rows['equipodeinteres'] ?>
      <br />
      
      <b>Registro de:</b> <?= $rows['formulario'] ?>
      <br />

<?php 
  $fechaE = explode("-", $rows['fecha']);
?>
      <b>Fecha:</b> <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>
      <br />


<?php
      if ($rows['formulario'] == 'RYG' OR $rows['formulario'] == 'RYG1') {
?>
                  <b>Registro de:</b> Recomienda y Gana
                  <br />                        
                  <b>Correo del recomendador:</b> <?= ''.$rows['usuario'].'@avanceytec.com.mx' ?>
                  <br />
                  <b>Nombre del recomendador:</b> <?= ''.$rows['nombre_recomendador'].''; ?>
<?php  

      }

      else {
?>
                  <b>Registro de:</b> <acronym title="<?= $rows['formulario'] ?>">Seguimiento</acronym>
<?php
      }
?>

      
  </div>
  </a>