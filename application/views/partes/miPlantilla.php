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

<!-- index del administrador -->
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

<?php }else { ?>
<!--?php else { ?-->


<!--este es el carrusel de imagenes-->
<section class="container">
 <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="<?php echo base_url() ?>assets/img/aux.jpg" class="d-block w-100" alt="First slide">
      
      
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-light">Somos Victoria ©</h5>
        <p>La marca líder de sastres en el ámbito nacional e internacional.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/img/50.jpg" class="d-block w-100" alt="Second slide">
      
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-light">Nueva Temporada</h5>
        <p>Temporada Otoño 2020</p>
      
      </div>
    </div>
    
    <div class="carousel-item">
      
      <img src="<?php echo base_url() ?>assets/img/80.jpg" class="d-block w-100" alt="Third slide">
     <div class="carousel-caption d-none d-md-block">
        <h5 class="text-light">Queres conocernos?</h5>
         <p>Segui navegando y mira todas las opciones que tenemos para vos ;)</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
 </div>
</section>
 

<!--contenido de 3 taarjetas-->
<section class="container">
 <div class="card-group my-4">
  <!--tarjeta1-->
  <div class="card">
    <img class="mx-auto mt-4" src="<?php echo base_url() ?>assets/img/card.png" height="65" width="65">
    <div class="card-body">
      <h6 class="card-title text-center">Paga con Tarjeta o Efectivo</h6>
      <p class="card-text text-center">Con Mercado Pago, tenes cuotas sin interes con tarjeta o efectivo en puntos de pago. ¡Y siempre Seguro! </p>
   </div>
  </div>

   <!--tarjeta2-->
  <div class="card">
    <img class="mx-auto mt-4" src="<?php echo base_url() ?>assets/img/compra.png" height="65" width="70">
    <div class="card-body">
      <h6 class="card-title text-center">Recibi tu Producto</h6>
      <p class="card-text text-center">Elegi tu producto y nosotros te lo hacemos llegar a la puerta de tu casa </p>
   </div>
  </div>

 <!--tarjeta3-->
  <div class="card">
    <img class="mx-auto mt-4" src="<?php echo base_url() ?>assets/img/vpn.png" height="65" width="65">
    <div class="card-body">
      <h6 class="card-title text-center">Compra Protegida</h6>
      <p class="card-text text-center">Te acompañamos hasta que recibas lo que compraste. Y si no es lo que esperabas, te lo cambiamos gratis </p>

   </div>
  </div>  

 </div>
</section>
<style type="text/css">
  .covid{
    background-color: yellow;
  }
</style>
<div class="covid text-center container">
<!--img src="assets/img/man.png" width="5%" height="auto"-->
<img src="assets/img/bacteria.png" width="5%" height="auto">
#QuedateEnCasa
</div>
 <!-- contenido de la Historia -->
<div class="container ">
  <!-- Titulo -->
  <h1 class="my-4">Victoria
    <small>Somos una Empresa dedicada a la Fabricacion de Trajes unisex</small>
  </h1>
  <!--foto-->
 <div class="row">
      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo base_url() ?>assets/img/20.jpg" width="750" height="500" >
        <p>Nota: El nombre de la empresa es esta enfocado en su hija, ya que ella se llama asi.  </p>
      </div>
      <!--Parrafo-->
      <div class="col-md-4">
        <h3 class="my-3">Historia</h3>
        <p class="text-justify">La idea a todo esto surge de Don Fulano y su mujer Dolores Firmapaz, ambos se encontraban trabajando en ALPARGATAS una empresa de fabricacion textil y distribuidora a nivel nacional ubicada en Bella Vista, Provincia de Corrientes.
        Con el cambio de autoridades de su pais, por medio de malas decisiones economicas la empresa fue obligada a despedir varios de sus empleados, teniendo ambos esa mala suerte de recibir su despido. Desde ese momento deciden emprender y fundar su propia fabrica textil, centrada en Sastres para hombes dado que ambos tienen varios años de experiencia en el negocio y eso se logro ver ya que la fabrica fue creciendo de manera exponencial en muy poco tiempo </p>
      </div>
  </div>
 </div>
</section>





<!-- Principales Productos >
<div class="container">
  <h1 class="display-5">Principales Productos</h1>
  <!--comiensa el listado>
  <div class="row">
    <!--1>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
       <img class="card-img-top" src="<?php echo base_url() ?>assets/img/sastre1.webp">
        <div class="card-body">
          <h4 class="card-title">
            <a>Institutos Privados - Ellos</a>
          </h4>
          <p class="card-text text-center">Traje de gama media Masculino perteneciente al Instituto Garileo Galilei</p>
          <p class="text-center" style="color: red;">$1000</p>
          <p class="text-center">20% Descuento en la Segunda Unidad</p>
        </div>
      </div>
    </div>
    <!--2>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <img class="mx-auto" src="<?php echo base_url() ?>assets/img/otro.jpg" height="350">
         <div class="card-body">
          <h4 class="card-title">
            <p class="text-center">Individuales</p>
          </h4>
          <p class="card-text text-center">Traje Ingles Invierno tope de gama Estilo Tomas Shelvy</p>
          <p class="text-center" style="color: red;">€ 20.000</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="<?php echo base_url() ?>assets/img/sastre2.webp">
        <div class="card-body">
          <h4 class="card-title">
            <a>Institutos Privados - Ellas</a>
          </h4>
          <p class="card-text text-center">Traje de gama media Femenino perteneciente al Instituto Garileo Galilei</p>
          <p class="text-center" style="color: red;">$1000</p>
          <p class="text-center">20% Descuento en la Segunda Unidad</p>
        </div>
      </div>
    </div>
  <!--termina el listado>
  </div-->
  



<h3 class="text-center">~ Principales Mas Vendidos ~</h3>
<section class="container">
  

<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    
  </ol>
  <!--/.Indicators-->

		 	
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
	<?php foreach($traje as $row) { ?>
			<tr>
			<?php if (($row->traje_estado) == 1) { ?>	

    <!--First slide-->
    <div class="carousel-item active">
    		
	<div class="row justify-content-end">
		
      <div class="col-md-4" style="float:left">
       <div class="card mb-2">
         <td><img src="<?php echo base_url('/uploads/'). $row->traje_imagen?>" alt="" height="400" /></td>
        <div class="card-body">
          <h4 class="card-title text-center">
            <td> <?php echo $row->traje_titulo; ?> </td>
          </h4>
          <p class="card-text text-center">Stock: <td> <?php echo $row->traje_stock; ?> </td>
        </br>Precio: <td> $<?php echo $row->traje_precio; ?> </td>
		</br>Tela: <td> <?php echo $row->traje_tela; ?> </td> 
		</br> Categoria: <td> <?php echo $row->categoria_desc; ?> </td>
    	</p>
        </div>
        </div>
      </div>
		
	</div>








    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div>
    	
    <div class="carousel-item">
		
			
			
      <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <td><img src="<?php echo base_url('/uploads/'). $row->traje_imagen?>" alt="" height="400" /></td>
        <div class="card-body">
          <h4 class="card-title text-center">
            <td> <?php echo $row->traje_titulo; ?> </td>
          </h4>
          <p class="card-text text-center">Stock: <td> <?php echo $row->traje_stock; ?> </td>
        </br>Precio: <td> $<?php echo $row->traje_precio; ?> </td>
		</br>Tela: <td> <?php echo $row->traje_tela; ?> </td> 
		</br> Categoria: <td> <?php echo $row->categoria_desc; ?> </td>
    	</p>
        </div>
        </div>
      </div>

      <div class="col-md-4" style="float:left">
      	<div class="row justify-content-center">
      		
        <div class="card mb-2">
           <td><img src="<?php echo base_url('/uploads/'). $row->traje_imagen?>" alt="" height="400" /></td>
        <div class="card-body">
          <h4 class="card-title text-center">
            <td> <?php echo $row->traje_titulo; ?> </td>
          </h4>
          <p class="card-text text-center">Stock: <td> <?php echo $row->traje_stock; ?> </td>
        </br>Precio: <td> $<?php echo $row->traje_precio; ?> </td>
		</br>Tela: <td> <?php echo $row->traje_tela; ?> </td> 
		</br> Categoria: <td> <?php echo $row->categoria_desc; ?> </td>
    	</p>
        </div>
        </div>
      	</div>
      </div>
		
    </div>




    <div class="carousel-item">
		
			
			
      <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <td><img src="<?php echo base_url('/uploads/'). $row->traje_imagen?>" alt="" height="400" /></td>
        <div class="card-body">
          <h4 class="card-title text-center">
            <td> <?php echo $row->traje_titulo; ?> </td>
          </h4>
          <p class="card-text text-center">Stock: <td> <?php echo $row->traje_stock; ?> </td>
        </br>Precio: <td> $<?php echo $row->traje_precio; ?> </td>
		</br>Tela: <td> <?php echo $row->traje_tela; ?> </td> 
		</br> Categoria: <td> <?php echo $row->categoria_desc; ?> </td>
    	</p>
        </div>
        </div>
      </div>

      <div class="col-md-4" style="float:left">
      	<div class="row justify-content-center">
      		
        <div class="card mb-2">
           <td><img src="<?php echo base_url('/uploads/'). $row->traje_imagen?>" alt="" height="400" /></td>
        <div class="card-body">
          <h4 class="card-title text-center">
            <td> <?php echo $row->traje_titulo; ?> </td>
          </h4>
          <p class="card-text text-center">Stock: <td> <?php echo $row->traje_stock; ?> </td>
        </br>Precio: <td> $<?php echo $row->traje_precio; ?> </td>
		</br>Tela: <td> <?php echo $row->traje_tela; ?> </td> 
		</br> Categoria: <td> <?php echo $row->categoria_desc; ?> </td>
    	</p>
        </div>
        </div>
      	</div>
      </div>
		
    </div>








	<?php } ?>
	<?php } ?>
    </div>
    <!--/.Second slide-->
	


	
   
  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
</body>
</section>




		<div class="container">	
 		<section class="copyright py-0 text-center text-white my-1 container">
            <div class="container"><small>Retomamos los envios<img src="assets/img/negro.png" height="65" width="65">   | Cambios dentro de los 30 dias habiles</small></div>
        </section>
		</div>


		</div>


 <script src="<?php echo base_url () ?>assets/js/jquery-3.4.1.min.js"></script>
 <script src="<?php echo base_url () ?>assets/js/bootstrap.min.js"></script>

</body>

<?php } ?>
