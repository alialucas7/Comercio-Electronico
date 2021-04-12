<style type="text/css">
	.fondo2{
		background-image: url(assets/img/ultimo2.jpg);
		font-family: 'Righteous';
	}
	.formu{
		background-color:rgba(255,255,255,0.1);
	}

.transparente{
opacity: 0.8;
-moz-opacity: 0.8;
filter: alpha(opacity=80);
-khtml-opacity: 0.8;
}
</style>


 
<?php if ( ($this->session->userdata('login')))  { ?>


<div class="container">
 <div class="fondo2 my-0">
  <h1 class="display-2 text-center">Lo </br>Leemos</h1>
 	<div class="mx-auto m-4" style= "width: 250px;">
 		
 	 <?php echo validation_errors('<div class="mx-4 alert alert-danger my-3 m-0 mx-lg-0">','</div>'); ?> 
	 <?php echo form_open('consulta_Archive'); ?>
				<!-- nombre -->
				Nombre
				<div class="transparente">                
					<?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese su nombre', 'autofocus'=>'autofocus', 'value'=>set_value('nombre')]); ?>
                
				</div>

				<!-- correo -->
				Correo
				<div class="transparente my-1 ">                
					<?php echo form_input(['name' => 'correo', 'id' => 'correo', 'class' => 'form-control','placeholder' => 'Ingrese su correo', 'autofocus'=>'autofocus', 'value'=>set_value('correo')]); ?>
                
				</div>
	 			<!-- descripcion -->
				<div class="transparente">                
					<?php echo form_textarea(['name' => 'perfil_descripcion', 'id' => 'perfil_descripcion', 'class' => 'form-control','placeholder' => 'Ingrese su Consulta Maestro', 'autofocus'=>'autofocus', 'value'=>set_value('perfil_descripcion')]); ?>
                </div>
				<!-- boton-->
                <div class="form-group mx-auto">
                    <?php echo form_submit('Consulta', 'Consulta',"class='btn  btn-success my-3'"); ?>
                </div>
                
        <?php echo form_close();?> 
     </div>
    </div>
        <p class="text-center"> Puede agrandar el cuadro de la consulta en el borde inferior derecho para una mejor experiencia</p>
  </div>

<?php } ?>

