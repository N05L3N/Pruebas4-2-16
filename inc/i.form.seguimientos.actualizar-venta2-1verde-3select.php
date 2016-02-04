<table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
	<tr>
		<td>
			<select name="fechadiaprox" class="form-control">
				<option value=""></option>
					<?php
						$i = '0';
						for ($n=0; $n<31; $n++) {
							$l = ++$i;

							$dia_de_proxima_llamada_SERV = date(d);

							if ($dia_de_proxima_llamada_SERV == $l) {
										
								echo '<option value="'.$l.'" selected>'.$l.'</option>';

							}

							else {

								echo '<option value="'.$l.'">'.$l.'</option>';

							}

						}
					?>
			</select>
		</td>
		<td>
			<select name="fechamesprox" class="form-control">
				<?php
					$mesNombre_de_proxima_llamada = array('1' => 'Enero','2' => 'Febrero','3' => 'Marzo','4' => 'Abril','5' => 'Mayo','6' => 'Junio','7' => 'Julio','8' => 'Agosto','9' => 'Septiembre','10' => 'Octubre','11' => 'Noviembre','12' => 'Diciembre',);
					$mesNumero_de_proxima_llamadaCERO = array('1' => '01','2' => '02','3' => '03','4' => '04','5' => '05','6' => '06','7' => '07','8' => '08','9' => '09','10' => '10','11' => '11','12' => '12',);
					$mesNumero_de_proxima_llamada = array('1' => '1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10','11' => '11','12' => '12',);
				?>
				<option value=""></option>
				<?php 
								
					for ($i=1; $i < 13; $i++) { 

						$mes_de_proxima_llamada_SERV = date(n);

						if ($mes_de_proxima_llamada_SERV == $i) {

				?>
								
				<option value="<?= $mesNumero_de_proxima_llamadaCERO[$i] ?>" selected><?= $mesNombre_de_proxima_llamada[$i] ?></option>

				<?php
									
						}

						else {

				?>
								
				<option value="<?= $mesNumero_de_proxima_llamadaCERO[$i] ?>"><?= $mesNombre_de_proxima_llamada[$i] ?></option>

				<?php
						
						}

					}

				?>
			</select>
		</td>
		<td>
			<select name="fechaanoprox" class="form-control">
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014" selected>2014</option>
			</select>
		</td>
	</tr>
</table>