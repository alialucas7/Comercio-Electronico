<style type="text/css">
	.fondo{
		background-color: #A4B173;
	}
	.letrita{
		font-family: 'Permanent Marker', cursive;
	}
</style>


<?php if ( ($this->session->userdata('login')) && ($this->session->userdata('perfil')) == 1) { ?>
	<div class="container">
		<div class="fondo">
			
				<h1 class="text-center letrita">Listado </br>de trajes</h1>
				<div class="table-responsive-md">
					
				
				<table class="table table-borderless text-center">
				  <thead>
				  		<th class="letrita">Título</th>
						<th class="letrita">Tela</th>
						<!--th class="letrita">Descripción</th-->
						<th class="letrita">Stock</th>
						<th class="letrita"> Precio</th>
						<th class="letrita">Categoria</th>
						<th class="letrita">Editar</th>
						<th class="letrita">Alta/baja</th>
					 
				  </thead>
				  <tbody>
					<?php foreach($traje as $row) { ?>
				<tr>
				<td><?php echo $row->traje_titulo; ?></td>
				<td><?php echo $row->traje_tela; ?></td>
				<!--td><?php echo $row->traje_descripcion; ?></td-->
				<td><?php echo $row->traje_stock; ?></td>
				<td><?php echo "$",$row->traje_precio; ?></td>
				<td><?php echo $row->categoria_desc; ?></td>

				<!--boton-->
				<td><a class="btn btn-dark" href="<?php echo
				base_url("trajeControler/editar_traje/$row->traje_id");?>" >
				<?php echo "edit"; ?>
				<span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></a> 
				</td>




			





				<?php
				if ( ($row->traje_estado) == 1 ) { ?>
				<td><a class="btn btn-danger" href="<?php echo
				base_url("trajeControler/eliminar_traje/$row->traje_id");?>" >
				<?php echo "on"; ?>
				<span class="glyphicon glyphicon-trash"></span></a>
				</td>
				<?php } else { ?>
				<td><a class="btn btn-danger" href="<?php echo
				base_url("trajeControler/activar_traje/$row->traje_id");?>" >
				<?php echo "off"; ?>
				<span class="glyphicon  glyphicon-ok"></span></a>
				</td>
				<?php } ?>
				</tr>
				<?php }  ?>
				  </tbody>
				</table>
				</div>





				



			




			<p class="text-center my-0"> la tabla descripcion esta comentado en el codigo por cuestion de diseño, pero si quiere puede probarlo y quitarlo</p>
		</div>
	</div>
<?php } ?>