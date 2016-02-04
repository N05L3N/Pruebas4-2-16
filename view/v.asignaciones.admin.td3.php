<a href="cliente.php?id=<?= $rows['id'] ?>">
      <table class="table table-condensed table-bordered table-striped asignaciones" style="background-color:#fff; width:400px;font-size:13px;">
            <tr>
                  <th style="width:25%;">Interesado en:</th>
                  <td style="width:75%;">
                        <?= $rows['equipodeinteres'] ?>
                  </td>
            </tr>
            <tr>
                  <td colspan="2">
                        <div style="height:150px;overflow-y:scroll;overflow-x:hidden; font-size:13px; cursor:pointer;">
                              <?= $rows['comentarios'] ?><?= $_GET['test']?>
                        </div>
                  </td>
            </tr>
            <tr>
                  <th>Registro de:</th>
                  <td>
                        <?= $rows['usuario'] ?>
                        <br>
                        <?php identificaProspectacion($rows['usuario']) ?></td>
            </tr>
            <tr>
                  <th>Fecha:</th>
                  <td>
                        <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>
                  </td>
            </tr>
      </table>
</a>