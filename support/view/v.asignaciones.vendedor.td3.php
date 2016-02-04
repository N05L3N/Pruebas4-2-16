<table class="table table-condensed table-bordered table-striped asignaciones">
	<tr>
            <th style="width:25%;">Interesado en:</th>
            <td style="width:75%;">
                  <?= $equipodeinteres ?>
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
                  <?= $formulario ?>
            </td>
      </tr>
      <tr>
            <th>Fecha:</th>
            <td>
                  <?= ''.$fechaE[2].'-'.$fechaE[1].'-'.$fechaE[0].'' ?>
            </td>
      </tr>
</table>