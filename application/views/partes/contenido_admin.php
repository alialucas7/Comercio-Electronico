<style type="text/css">
img.img-responsive {
    margin: 0;
   display: auto

}
.tamañex{
	width: 150px;
    height: 25%;  
}
</style>

<?php if ( ($this->session->userdata('login')) && ($this->session->userdata('perfil')) == 1) { ?>
<div class="container">
	<div class="container  mx-auto d-inline-block">
		<h1 class="text-center">Bienvenido Administrador</h1>
		<p class="text-center"> Desde este usuario podra gestionar su Negocio</p>
		<div class="text-center">
		<img class="img-responsive tamañex rounded"  src="assets/img/ad5.png" >
		</div>	
	</div>	
</div>

<?php } ?>