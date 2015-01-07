<h3>Resultado Encuestas</h3>

<table>
	<tr>
		<th style="border: solid rgb(188, 188, 188) 2px;">RUT</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">CONVOCATORIA</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">ACTIVIDAD</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">TIPO</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">PREGUNTA 1</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">PREGUNTA 2</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">PREGUNTA 3</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">PREGUNTA 4</th>
		<th style="border: solid rgb(188, 188, 188) 2px;">COMENTARIO</th>
	</tr>
<?php foreach ($model as $data):?>	
	<tr>
			
		<?php
			
			$actividad=actividades::model()->find("act_id=".$data->act_id);

		  ?>
		<td style="text-align: left;border: solid;"> <?php echo $data->al_rut ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_convocatoria ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $actividad->act_nombre ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_tipo ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_pregunta1 ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_pregunta2 ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_pregunta3 ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_pregunta4 ?></td>
		<td style="text-align: left;border: solid;"> <?php echo $data->en_comentario ?></td>
	</tr>
<?php  endforeach;?>
	
</table>