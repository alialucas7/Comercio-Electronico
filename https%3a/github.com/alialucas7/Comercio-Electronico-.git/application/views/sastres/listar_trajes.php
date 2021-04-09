<div class="container">
	

	<table id="mytable" class="table table-bordred table-striped table-hover table-responsive">
		<thead>
			<th>Titulo</th>
			<th>Tela</th>
			<th>Descripcion</th>
			<th>Stock</th>
			<th>Precio</th>
			<th>Categoria</th>
			<th></th>
		</thead>
		
		<tbody>
			

			<?php foreach($traje as $row) { ?>
				<tr>
					<?php if (($row->traje_estado) == 1) { ?>
						
					 
					<td> <?php echo $row->traje_titulo; ?> </td>
					<td> <?php echo $row->traje_tela; ?> </td>
					<td> <?php echo $row->traje_descripcion; ?> </td>
					<td> <?php echo $row->traje_stock; ?> </td>
					<td> <?php echo $row->traje_precio; ?> </td>
					<td> <?php echo $row->categoria_desc; ?> </td>
					<td><img src="<?php echo base_url('/uploads/'). $row->traje_imagen?>" alt="" height="100" width="100" /></td>
					<td>
						<?php if ($this->session->userdata('login')){ 
							echo form_open('welcome/agregar_carrito');
							echo form_hidden('id',$row->traje_id);
							echo form_hidden('titulo',$row->traje_titulo);
							echo form_hidden('precio',$row->traje_precio);
						
							echo form_submit('','Agregar',"class='btn btn-success'");
							echo form_close();
						 } ?>
							
					</td>
				</tr>
				<?php } ?>
			<?php } ?>
		</tbody>	
	</table>	
</div>