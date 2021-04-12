<!--Buscador y el Logo-->
<section class="container">
  <nav class="navbar navbar-ligth bg-white">
    <!--Imagen con auenlace -->
    <a class="navbar-brand" href="<?php echo base_url('')?>">
        <img src="assets/img/logo.png" width="300" height="90" class="d-inline-block align-top mx-auto " alt="icon">
    </a>
    <!-- Titulo-->
    <a class="navbar-brand display-2 mx-auto ">Fabrica de Sastres</a>

    <!-- usuario y boton-->
    <?php if ( ($this->session->userdata('login')) && ($this->session->userdata('perfil')) == 1) { ?>
        <form class="form-inline mx-auto">
    <a class="nav-link">ADMINISTRADOR: <?php echo $this->session->userdata('nombre'); ?></a>
    <a class="nav-link btn btn-primary btn-sm my-2 my-sm-0" href="<?php echo base_url ('salir') ?>">Salir</a>
    </form>
     <?php } ?> 
  </nav>
</section>


<!--Barra de Navegacion del administrador-->
<?php if ( ($this->session->userdata('login')) && ($this->session->userdata('perfil')) == 1) { ?>
<!-- Barra de Navegacion para usuarios Administrador -->
<section class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="<?php echo base_url('')?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
           <a class="nav-item nav-link" href="<?php echo base_url('carrito')?>"><img src="assets/img/buy.svg" width="30" height="30" class="d-inline-block align-top"> Carrito</a>   
           <a class="nav-item nav-link" href="<?php echo base_url('anda')?>"><img src="assets/img/c.png" width="30" height="30" class="d-inline-block align-top"> Agregar</a>  
           <a class="nav-item nav-link" href="<?php echo base_url('gestionar_traje')?>"><img src="assets/img/gear.svg" width="30" height="30" class="d-inline-block align-top"> Gestion</a>  
          <a class="nav-item nav-link" href="<?php echo base_url('productos')?>" src="assets/img/suite.png" > <img src="assets/img/c1.png" width="30" height="30" class="d-inline-block align-top"> Catalogo<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?php echo base_url('consultas_ver')?>"><img src="assets/img/mail.png" width="30" height="30" class="d-inline-block align-top"> Ver Consultas</a>

          </div>
        </div>
    </nav>
</section>

<?php } ?>




