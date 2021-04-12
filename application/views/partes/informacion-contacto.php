<h1 class="text-center">Registro de usuario</h1>
 
 <div class="container">

           
     <div class ="w-50 mx-auto">    
                    
                        <?php echo validation_errors(); ?> 


           <?php echo form_open('registrar'); ?>
                      
                <div class="form-group">
                        <label for="categoria" class="text-primary font-weight-bold">Ingrese su apellido</label>

                        <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'Ingrese Apellido', 'autofocus'=>'autofocus', 'value'=>set_value('apellido')]); ?>

                </div> <span class="text-danger"><?php echo form_error('apellido'); ?> </span>

                 <div class="form-group">
                        <label for="nombre">Ingrese su nombre</label>   
                        <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese nombre', 'value'=>set_value('nombre')]); ?>
                </div>

                                                    
                <div class="form-group">
                    <label for="mail">Ingrese su correo electrónico</label>
                    <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control','placeholder' => 'Ingrese Email', 'value'=>set_value('mail')]); ?>                                
                </div>


                <div class="form-group">
                    <label for="telefono">Ingrese un teléfono de contacto</label>
                    <?php echo form_input(['name' => 'telefono', 'id' => 'telefono', 'type' => 'text', 'class' => 'form-control','placeholder' => 'Ingrese Telefono', 'value'=>set_value('telefono')]); ?>
                </div>

                 <div class="form-group">
                     <label for="password">Ingrese contraseña</label>                      
                    <?php echo form_input(['name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Ingrese Password', 'value'=>set_value('password')]); ?>
                </div>
                  

                 <div class="form-group">                                                                  
                    <label for="passconf">Repetir Contraseña</label>                           
                    <?php echo form_input(['name' => 'passconf', 'id' => 'passconf', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Repetir contraseña', 'value'=>set_value('passconf')]); ?>
                </div>

                <div class="form-group">

                    <?php echo form_submit('Registrarme', 'Registrarme',"class='btn  btn-success'"); ?>
                </div>

        <?php echo form_close();?> 

       
    </div>
</div>