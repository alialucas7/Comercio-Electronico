<style type="text/css">
	.fondo{
		background-color: #A4B173;
	}
	.letrita{
		font-family: 'Permanent Marker', cursive;
		
	}
</style>


<?php if ( ($this->session->userdata('login')) && ($this->session->userdata('perfil')) == 1) { ?>

<?php echo $error;?>

<div class="container">
	<div class="fondo">
	<div class="mx-auto my-0 " style="width: 280px;"> 

		<?php echo form_open_multipart('insertar_traje');?>

		
		<h1 class="letrita text-center">Registra Producto</h1>
		<!-- Este es el titulo -->
		<div class="form-group row mx-2 my-0">
		<label for="categoria">Titulo	
	 	<div>
		  <?php echo form_input(['name' => 'titulo', 'id' => 'titulo', 'class' => 'form-control','placeholder' => 'Ingrese Titulo', 'autofocus'=>'autofocus', 'value'=>set_value('traje_titulo')]); ?> 	
		</div>
		<span class=" letrita"><?php echo form_error('titulo'); ?></span>    
		</div>
		</label>

		<!-- Esta es la tela -->
		<div class="form-group row mx-2 my-0">
		<label for="categoria">Ingrese la tela del Producto	
	 	<div>
		  <?php echo form_input(['name' => 'tela', 'id' => 'tela', 'class' => 'form-control','placeholder' => 'Ingrese tela', 'autofocus'=>'autofocus', 'value'=>set_value('traje_tela')]); ?> 	
		</div> 
		<span class=" letrita"><?php echo form_error('tela'); ?></span>   
		</div>
		</label>

		<!-- Esta es la descripcion -->
		<div class="my-0 mx-1" style="width: 250px">                
					<?php echo form_textarea(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control','placeholder' => 'Ingrese la descripcion', 'autofocus'=>'autofocus', 'value'=>set_value('descripcion')]); ?>
					<span class=" letrita"><?php echo form_error('descripcion'); ?></span>   
        </div>

        <!-- Stock -->
		<div class="form-group row mx-2 my-0">
		<label for="categoria">Stock	
	 	<div>
		  <?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'Ingrese stock', 'autofocus'=>'autofocus', 'value'=>set_value('stock')]); ?> 	
		</div>
		<span class=" letrita"><?php echo form_error('stock'); ?></span>  
		</div>
		</label>

		  <!-- Precio -->
		<div class="form-group row mx-2">
		<label for="categoria">Precio $	
	 	<div>
		  <?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control','placeholder' => 'Ingrese precio', 'autofocus'=>'autofocus', 'value'=>set_value('precio')]); ?> 	
		</div>
		<span class=" letrita"><?php echo form_error('precio'); ?></span>  
		</div>
		</label>

		<!-- Categoria -->
		<div  class="form-group mx-auto" style="width: 200px">
		
		<?php 
			$lista['0'] = 'Seleccione Categoria';
			foreach ($categorias as $row){
				$lista[$row->categoria_id] = $row->categoria_desc;
			}
			echo form_dropdown('categoria',$lista,'0','class="form-control"');
		?>
		<span class="letrita"><?php echo form_error('categoria');?></span>
		</div>

		<!-- Aca va la imagen -->
		<div class="my-1">
		<input type="file" name="userfile" size="20" />
		<span class=" letrita"><?php echo form_error('userfile'); ?></span>
		
		</div>

		<!-- boton submit -->
		<div class="form-group text-center my-0">
			<?php echo form_submit('Agregar','Agregar', 'class="btn btn-dark"');?>
		</div>
		<p class="my-0 text-center">...</p>

	<?php echo form_close();?>
	</div>
	</div>
</div>
<?php } ?>