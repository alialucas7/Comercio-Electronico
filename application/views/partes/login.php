<!--Estilos d ela pag --> 
<style type="text/css">
    .fondo{
    background-image: url(assets/img/fondo.jpg);
    /*background-repeat: no-repeat;    */
    font-family: 'Righteous';
    opacity: .9;
    align-content: center;

    }

    .color{
    background-color:rgba(255,255,255,0.5);
    }
  
</style>	
<!-- fin de estilos -->

<!--Empieza el formulario -->
<div class="  container">
    
<section class="fondo container">
  <div class="mx-auto" style="width: 275px;">
    
    <h1 class="display-4 text-center my-0">...</h1>
    
    <h1 class="display-2 text-center my-0">Login</h1>
    
     <!-- codigo php -->
     <?php echo validation_errors('<div class="mx-4 alert alert-danger my-1 m-0 mx-lg-0">','</div>'); ?> 
     <?php echo form_open('ingresar'); ?>

    
     
     <!--div class="form-group row color my-0">
        
    <label for="nombre" class="col-sm-4 col-form-label"><strong>Nombre </strong></label>
    <div class="col-sm-10">
    <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'Ingrese nombre', 'value'=>set_value('nombre')]); ?>  
         
    </div>
    </div-->
   
    <div class="form-group row color my-0">
    <label for="mail" class="col-sm-4 col-form-label"><strong>Email</strong></label>
    <div class="col-sm-10">
      <!--input type="email" class="form-control" id="inputEmail3" placeholder="Email"-->
      <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'email', 'class' => 'form-control','placeholder' => 'Ingrese Email', 'value'=>set_value('mail')]); ?>

    </div>
    </div>
  
    <div class="form-group row color my-0">
    <label for="password" class="col-sm-4 col-form-label"><strong>Contraseña</strong> </label>
    <div class="col-sm-10">
       <?php echo form_input(['name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control','placeholder' => 'Ingrese Password', 'value'=>set_value('password')]); ?>
      <!--input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña"-->
    </div>
    </div>
 
    <!--Este es el check-->
    <div class="form-group row color">
    <div class="col-sm-10 my-0">
      <div class="form-check my-0">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Mantener Sesion Iniciada?
        </label>
      </div>
    </div>
    </div>

      <!-- Boton -->
        <div class="form-group row m-auto ">
          <div class="col-sm-10 mx-md-5 ">
            <?php echo form_submit('Iniciar', 'Ingresar',"class=' btn btn-secondary' 'text-center'"); ?>
          <!--div class="my-1"></div--> 
        </div>
      </div>
      <p class="my-0 text-center display-4">...</p>
        <?php echo form_close();?> 
  
       
          
        
      </div>



</section>
<!--p class="text-center my-0 m-0 color">Los campos con (*) son campos obligatorios</p-->

</div>

</body>