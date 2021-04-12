<style type="text/css">
    .fondo{
    background-image: url(assets/img/qt4.jpg);
    /*background-repeat: no-repeat; */   
    font-family: 'Righteous';
    opacity: .8;
    align-content: center;
    width: 100%;
    height: 350px;

    }
	.invisible {
  	visibility: hidden;
	}


    .color{
    background-color:rgba(255,255,255,0.5);
    }
  
</style>
<!-- esta es la parte de la imagen con slogan -->
<div class="container">
	<div class="fondo">
		
				<p class="text-center">.</p>
				<p class="text-center my-5">.</p>
				<p class="text-center my-5">.</p>
				<h1 class="text-center text-white">El mundo es Tuyo</h1>
				<div class="text-center">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>					
				<a class="mx-auto btn btn-light" href="#alGrano" >ver productos</a>
				</div>
				<p class="text-center my-5">.</p>
				<p class="text-center my-5">.</p>
				<p class="text-center my-5">.</p>
				
	<!--img src="assets/img/qt.jpg"  class="fondo"-->
	</div>
<!-- termina aca -->

<!-- aca comienza el catalogo -->	
	
<div class="container">
<div class="container">	
  <!-- Page Heading -->
  <h1 class="my-4 text-center">Talles Especiales
    <small>Solicitelo en la seccion consultas</small>
  </h1>

  <div class="row m-3" id="alGrano">
  	<?php foreach($traje as $row) { ?>
	<tr>
	<?php if (($row->traje_estado) == 1) { ?>
						
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
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
		<!-- acordeon -->
        <div id="accordion">
  		<div class="card">
    	<div class="card-header text-center" id="headingOne">
      	<h5 class="mb-0">
        <button class="btn btn-primary btn-sm " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Ver Descripcion
        </button>
      	</h5>
    	</div>
    	 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <td> <?php echo $row->traje_descripcion; ?> </td>
      </div>
      </div>
  	  </div>
  	  </div>
	 <!-- fin acordeon -->

        <div class="text-center my-2">
        <?php if ($this->session->userdata('login')){ 
							echo form_open('welcome/agregar_carrito');
							echo form_hidden('id',$row->traje_id);
							echo form_hidden('titulo',$row->traje_titulo);
							echo form_hidden('precio',$row->traje_precio);
		
        echo form_submit('','Agregar',"class='btn btn-success'");

		echo form_close();
		} ?>
	</div>
      </div>
    </div>
     <?php } ?>
	<?php } ?>
  </div>


</div>
</div>



</div>