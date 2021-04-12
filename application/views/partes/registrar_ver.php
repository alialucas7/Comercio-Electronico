<!-- estilos -->
<style type="text/css">
    .fondo{
    background-image: url(assets/img/prueba3.jpg);
    /*background-repeat: no-repeat;    */
    
    font-family: 'Righteous';
    opacity: .9;
    align-content: center;
}
.color{
    background-color:rgba(255,255,255,0.8);
}
.letra{
    font-family: 'Righteous';
}
</style>    
<!--fin de estilos -->
 
 <!--Comienza el registro -->
 <section class="container">
     <!-- Aplicamos el fonfo y centramos el formulario -->
     <div class ="fondo "> 
    <h3 class="display-4 text-center letra"> Registrate</h3>
     <div class="mx-auto my-0" style="width: 275px;">   
        <!-- codigo php-->            
        <?php echo validation_errors('<div class="collapse">','</div>'); ?> 
        <?php echo form_open('registrar'); ?>
          
       
        <!-- apellido -->            
                <div class="form-group row color my-0">  
                    <label for="categoria" class="col-sm-4 col-form-label"><strong>Apellido(*)</strong></label>
                    <div class="col-sm-10">
                        <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'Ingrese Apellido', 'autofocus'=>'autofocus', 'value'=>set_value('apellido')]); ?> 
                        <span class="text-danger"><?php echo form_error('apellido'); ?> </span>   
                    </div>
                </div>
        <!-- nombre -->                
                   <div class="form-group row color my-0">  
                    <label for="categoria" class="col-sm-4 col-form-label"><strong>Nombre(*)</strong></label>
                    <div class="col-sm-10">
                        <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese nombre', 'value'=>set_value('nombre')]); ?> 
                        <span class="text-danger"><?php echo form_error('nombre'); ?> </span>   

                    </div>
                </div>
        <!-- Correo Electronico-->
                <div class="form-group row color my-0">
                    <label for="mail" class="col-sm-4 col-form-label"><strong>Email (*)</strong></label>
                    <div class="col-sm-10">
                        <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'mail', 'class' => 'form-control','placeholder' => 'Ingrese Email', 'value'=>set_value('mail')]); ?>  
                        <span class="text-danger"><?php echo form_error('mail'); ?> </span>
                    </div>
                </div>
        <!-- telefono -->
                <div class="form-group row color my-0">
                    <label for="telefono" class="col-sm-4 col-form-label"><strong>Telefono</strong></label>
                    <div class="col-sm-10">
                        <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'type' => 'text', 'class' => 'form-control','placeholder' => 'Ingrese Telefono', 'value'=>set_value('telefono')]); ?>
                        <span class="text-danger"><?php echo form_error('telefono'); ?> </span>
                    </div>
                </div>
        <!-- COntraseña -->
                <div class="form-group row color my-0">
                    <label for="passwor" class="col-sm-4 col-form-label"><strong>Contraseña(*)</strong> </label>
                    <div class="col-sm-10">
                        <?php echo form_input(['name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Ingrese Password', 'value'=>set_value('password')]); ?> 
                        <span class="text-danger"><?php echo form_error('password'); ?> </span>
                    </div>
                </div>                                                    
                  
        <!-- repite contraseña-->
                <div class="form-group row color my-0">
                    <label for="passconf" class="col-sm-4 col-form-label"><strong>Repetir Contraseña(*)</strong></label>  
                    <div class="col-sm-10 my-3">                      
                        <?php echo form_input(['name' => 'passconf', 'id' => 'passconf', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Repetir contraseña', 'value'=>set_value('passconf')]); ?>
                        <span class="text-danger"><?php echo form_error('passconf'); ?> </span>
                  
                    </div>
                </div>
                   

                
                <!-- boton submit -->
                <div class="form-group row  m-auto">
                    <div class="col-sm-10 mx-md-5 my-2">
                        <?php echo form_submit('Registrarme', 'Registrarme',"class='btn btn-light' 'text-center'"); ?>

                    </div>    
                    <div class="my-1"></div> 
                </div>
               

        <?php echo form_close();?> 

    </div>   
  </div>
</section>