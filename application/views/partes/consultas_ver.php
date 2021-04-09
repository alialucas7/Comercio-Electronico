<style type="text/css">
	.fondo{
		background-color: #A4B173;
	}
	.letrita{
		font-family: 'Permanent Marker', cursive;
	}
</style>
<?php if ( ($this->session->userdata('login')) && ($this->session->userdata('perfil')) == 1) { ?>
<div class="container my-0">
	<h1 class="text-center my-0 letrita">Tabla de Consultas</h1>
	
<table class="table table-bordered table-responsive-md">
  <thead class="text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Descrpcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    

<?php foreach($perfil as $row) { ?>
				<tr class="text-center">
					
						
					 
					<td> <?php echo $row->id_perfil; ?> </td>
					<td> <?php echo $row->nombre; ?> </td>

					<td> <?php echo $row->correo; ?> </td>
					<td> <?php echo $row->perfil_descripcion; ?> </td>
				</br>
				
					<td>
						
					</td>
				</tr>
			
			<?php } ?>	
  </tbody>
</table>
</div>
<?php } ?>