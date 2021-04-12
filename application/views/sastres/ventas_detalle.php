
	<div class="container my-0">
	<div class="mx-auto my-0 text-center">
		
	<table class="table table-responsive table-striped text-center table-light my-0">
		
	<thead>
			<th>Titulo</th>
			<th>Descripcion</th>
			<th>Cantidad</th>
			<th>Precio</th>
			
			
	</thead>
	<tbody>
		<?php $stock=0;?>
		<?php $total=0;?>
	<?php foreach($ciclo as $row) { ?>
				<tr>	
						<td> <?php echo $row->traje_titulo;?></td>
						<td> <?php echo $row->traje_descripcion;?></td>
						<td> <?php echo $row->detalle_cantidad;?></td>
						<td> <?php echo $row->detalle_precio;?></td>

					<?php $stock += $row->detalle_cantidad;?>	

					<?php $total += $row->detalle_precio;?>
					
				
									
				</tr>
				
			<?php } ?>
			<td> <?php echo "";?></td> 
			<td> <?php echo  "";?></td> 
			<td> <?php echo "igual a: ",$stock; ?></td> 
			<td> <?php echo "Total: ->";?></td>
			<td> <?php echo  "$",$total;?></td> 
	</tbody>
	</table>
	</div>	
	</div>