<div style="height:150px;overflow-y:scroll;overflow-x:hidden; font-size:13px;" data-toggle="modal" data-target="#myModal<?= $row2['id'] ?>">
	<?= $row2['comentarios'] ?>
</div>

<div class="modal fade" id="myModal<?= $row2['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="width:1200px; margin:auto; overflow: hidden;">
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
            <div class="col-md-4"><h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> <?= $row2['nombre'] ?></h4></div>
            <div class="col-md-4"><h4 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> <i><?= $row2['email'] ?></i></h4></div>
            <div class="col-md-3"><h4 class="modal-title"><span class="glyphicon glyphicon-phone-alt"></span> <i><?= $row2['telefono'] ?></i></h4></div>
            <!-- <div class="col-md-2"><h4 class="modal-title"><span class="glyphicon glyphicon-phone"></span> <i><?= $row2['nombre_recomendador'] ?></i></h4></div> -->
            <div class="col-md-1"><img src="img/icons/close.jpg" alt="" style="width:20px; float:left; margin-left:50px; cursor:pointer;" data-dismiss="modal"></div>
        </div>
      </div>
      <div class="modal-body">
        
        <a href="iframe-cliente.php?id=<?= $row2['id'] ?>" target="primero">
          <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Datos del Cliente
          </button>
        </a>

        <a href="iframe-calendario.php?id=<?= $rows['id'] ?>" target="primero">
          <button type="button" class="btn btn-default btn-md">
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Ver Calendario
          </button>
        </a>

        <table style="width:100%;" border="0">
          <tr>
            <td style="width:40%;">
              <iframe src="iframe-cliente.php?id=<?= $row2['id'] ?>" width="100%;" height="600" frameborder="no" overflow-y="scroll" overflow-x="hidden" name="primero"></iframe>
            </td>
            <td style="width:10%;"></td>
            <td style="width:40%;">
              <iframe src="seguimientos.actualizar-venta2.php?id=<?= $row2['id'] ?>" width="100%;" height="600" frameborder="no" scrolling="no"></iframe>
            </td>
            <td style="width:10%;"></td>
          </tr>
        </table>

      </div>
      
    </div>
  </div>
</div>