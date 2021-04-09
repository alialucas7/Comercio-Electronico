<style type="text/css">
	.letrita{
		font-family: 'Permanent Marker', cursive;
	}
</style>

<h1 class="text-center">Editar los Datos Actuales</h1>
<div class="container">
	<div class =" mx-auto container">
	 
<?php echo form_open_multipart("trajeControler/validar_edit/$traje_id"); ?>



	 <label for="categoria">Titulo	
	 	<div class="mx-2">
		  <?php echo form_input(['name' => 'titulo', 'id' => 'titulo', 'class' => 'form-control','placeholder' => 'Ingrese Titulo', 'autofocus'=>'autofocus', 'value'=>"$titulo"]); ?> 	
		</div>
		<span class=" letrita text-danger"><?php echo form_error('titulo'); ?></span>    
		
		</label>

		<!-- Esta es la tela -->
		<div class="form-group row mx-2 my-0">
		<label for="categoria">Ingrese la tela del Producto	
	 	<div>
		  <?php echo form_input(['name' => 'tela', 'id' => 'tela', 'class' => 'form-control','placeholder' => 'Ingrese tela', 'autofocus'=>'autofocus', 'value'=>"$tela"]); ?> 	
		</div> 
		<span class=" letrita text-danger"><?php echo form_error('tela'); ?></span>   
		</label>
		</div>

		<!-- Esta es la descripcion -->
		<div class="my-0 mx-1" style="width: 250px">                
					<?php echo form_textarea(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control','placeholder' => 'Ingrese la descripcion', 'autofocus'=>'autofocus', 'value'=>$descripcion ]); ?>
					<span class=" letrita text-danger"><?php echo form_error('descripcion'); ?></span>   
        </div>

        <!-- Stock -->
		<div class="form-group row mx-2 my-0">
		<label for="categoria">Stock	
	 	<div>
		  <?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'Ingrese stock', 'autofocus'=>'autofocus', 'value'=>$stock ]); ?> 	
		</div>
		<span class=" letrita text-danger"><?php echo form_error('stock'); ?></span>  
		</div>
		</label>

		  <!-- Precio -->
		<div class="form-group row mx-2">
		<label for="categoria">Precio $	
	 	<div>
		  <?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control','placeholder' => 'Ingrese precio', 'autofocus'=>'autofocus', 'value'=>$precio ]); ?> 	
		</div>
		<span class=" letrita text-danger"><?php echo form_error('precio'); ?></span>  
		</div>
		</label>

		<!-- Categoria -->
		<div  class="form-group mx-2" style="width: 200px">
		
		<?php 
			$lista['0'] = 'Seleccione Categoria';
			foreach ($categorias as $row){
				$lista[$row->categoria_id] = $row->categoria_desc;
			}
			echo form_dropdown('categoria',$lista,'0','class="form-control"');
		?>
		<span class="letrita text-danger"><?php echo form_error('categoria');?></span>
		</div>

		<!-- Aca va la imagen -->
		<div class="my-1 mx-2">
		<!--input type="file" name="userfile" size="20" /-->
		<!--span class=" letrita text-danger"><?php echo form_error('userfile'); ?></span-->
		
		</div>

	
		<div class="form-group">
			<?php echo form_submit('Modificar', 'Modificar',"class='btn btn-success'"); ?>
		</div>
			<?php echo form_close();?>
	</div>
</div>
</div>
</div>