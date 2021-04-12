<h1 class="text-center">Carrito de compras</h1>
<div class="container">
<div class="text-center">
	
<a href="<?php echo base_url('productos'); ?>" class="text-center btn btn-success"
role="button">Continuar comprando</a>
</div>	

<h2 class="text-center"><?php echo $message ?></h2>
<div class=" table-sm table table-responsive-md">
	

<table id="mytable" class=" table-bordred table-striped ">
<?php if ($cart = $this->cart->contents()): ?>
<thead>

<th>No item</th>
<th>Nombre</th>
<th>Precio</th>
<th>Cantidad</th>
<th>Subtotal</th>
<th>Acción</th>

</thead>
<tbody>
<?php
$i = 1;
foreach ($cart as $item):?>

<tr>
<td>
<?php echo $i++; ?>
</td>
<td>
<?php echo $item['name']; ?>
</td>
<td>
$ <?php echo $this->cart->format_number($item['price'],2); ?>
</td>
<td>
<?php echo $item['qty']; ?>
</td>
<td>

$ <?php echo $this->cart->format_number($item['subtotal'],2); ?>

</td>
<td>
<?php echo anchor('welcome/borrar_carrito/'.$item['rowid'],'Eliminar'); ?>
</td>
</tr>
<?php endforeach; ?>

<tr>
<td>
Total Compra:$<?php echo number_format($this->cart->total(),2); ?>
</td>
<td>
<button type="button" class="btn btn-success" onclick="limpiar_carito()">Vaciar
carrito</button>

</td>
<td>

<a href="<?php echo base_url('ventasControler/guardar_venta'); ?>" class="btn btn-success" role="button">Ordenar compra</a>
</td>
</tr>
<?php endif; ?>

</tbody>
</table>
</div>
<script>
function limpiar_carito() {
var result = confirm('Desea vaciar el carrito?');
if(result) {
window.location = "<?php echo base_url(); ?>welcome/borrar_carrito/all";
}else{
return false; // cancela al acción
}
}
</script>
	
</div>