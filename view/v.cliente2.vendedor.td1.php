<?php 

  #$id = $row['id'];
  $_SESSION["idedit"] = $_GET["id"];
  $idedit = $id;

?>
<!-- Button trigger modal -->

<!--
<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
  Actualizar
</button>
-->

<iframe src="seguimientos.actualizar-venta2.php?id=<?= $id ?>&fechaasignacion=<?= $fechaasignacion ?>&fechaproxima=<?= $fechaproxima ?>&estadodeventa=<?= $estadodeventa ?>&asignadoa=<?= $asignadoa ?>" width="100%;" height="550" frameborder="no" scrolling="no"></iframe>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Folio: #<?php echo $idedit;?></h4>
      </div>
      <div class="modal-body">
        <iframe src="seguimientos.actualizar-venta2.php?id=<?= $id ?>&fechaasignacion=<?= $fechaasignacion ?>" width="100%;" height="400" frameborder="1" scrolling="no"></iframe>
        <?php # include('seguimientos.php');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->