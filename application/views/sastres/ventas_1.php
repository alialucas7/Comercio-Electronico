	<style type="text/css">
	.col-center{
    float: none;
    margin: 0 auto;
	}
	</style>

	<div class="container my-0">
	<div class="mx-auto my-0 ">
		
	<table class="mx-auto table table-responsive table-striped text-center table-light my-0">
		
	<thead>
			<th>N°</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Fecha</th>
			
	</thead>
	<tbody>
		
	<?php foreach($traje as $row) { ?>
					
					<div class="row">
					<tr class="">
						
				
						
					
					<div class="col order-5 col-center"> <td> <?php echo $row->venta_id; ?></td> </div>
					<div class="col order-4 col-center"> <td> <?php echo $row->apellido; ?></td> </div>
					<div class="col order-3 col-center"> <td> <?php echo $row->nombre; ?> </td> </div>

					<div class="col order-2 col-center"> <td> <?php echo $row->venta_fecha; ?></td> </div>
					<td><?php echo form_open("ventasControler/ver_detallesVenta/$row->venta_id");?></td>
					<div class="col order-1 col-center"> <td><?php echo form_submit('detalle','detalle'); ?></td></div>
				
					</tr>
							
				
				</div>
			<?php echo form_close();?>
			<?php } ?>
	</tbody>
	</table>
	</div>	
	</div>