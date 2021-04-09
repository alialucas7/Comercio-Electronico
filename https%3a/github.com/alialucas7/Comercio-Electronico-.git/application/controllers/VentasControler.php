<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VentasControler extends CI_Controller{



	public function _construct(){
		parent::_construct();
		 $this->load->helper(array('form', 'url'));

		$this->load->model('ventas_model');
		$this->load->model('traje_model');

	}

	public function guardar_venta(){
		$encabezado_venta = array(
			'id_cliente' => $this->session->userdata('id_usuario'),
			'venta_fecha' => date('Y-m-d'),
		);
		$this->load->model('ventas_model');
		$this->ventas_model->guardar_venta($encabezado_venta);
		//obtiene el ultimo id de la venta
		$venta_id = $this->db->insert_id();
		$cart = $this->cart->contents();
		foreach ($cart as $item) {
			$detalle_venta = array(
				'id_venta' => $venta_id,
				'id_producto' => $item['id'],
				'detalle_cantidad' => $item['qty'],
				'detalle_precio' => $item['price']

			); 	
		

		//controla el stock
		$this->load->model('traje_model');
		$product = $this->traje_model->get_trajes_id($item['id']);
		$stock = $product->traje_stock;
		if ($stock >= $item['qty']) {
			$stock = $stock - $item['qty'];
			$data = array(
			'traje_stock' => $stock	
			);
		 $this->traje_model->actualizar_trajedia($data, $item['id']);
		 $this->ventas_model->guardar_detalle_venta($detalle_venta);	
		 echo "<script>alert('Se registro la compra, Gracias por elegirnos ;)');</script>";
		}else{
		 	echo "<script>alert('Lo sentimos, ya no hay stock. En la seccion consulta puede consultar cuando volvamos a tener stock nuevamente');</script>";	
		}
	}

	$this->cart->destroy();


	redirect('welcome','refresh');
    }

    public function informe_ventas(){
    		//$data ['titulo'] = 'informe';
			$this->load->model('ventas_model');
			//$this->load->model('clientela'); 
			$data['traje'] = $this->ventas_model->ventas();
			
    		$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/ventas_1');
			$this->load->view('front/footer_ver');
    }		

    public function ver_detallesVenta($id = NULL){
    		$this->load->model('ventas_model');
    		$data['ciclo'] = $this->ventas_model->ventas_det($id);
    		

    		$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/ventas_detalle',$data);
			$this->load->view('front/footer_ver');
    }
}