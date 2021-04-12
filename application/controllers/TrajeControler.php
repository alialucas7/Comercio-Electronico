<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrajeControler extends CI_Controller{



	public function _construct(){
		parent::_construct();
		 $this->load->helper(array('form', 'url'));

		if ($this->session->userdata('login')){
			redirect('iniciar_sesion');
		}
		
	}

	


	public function formulario_agregar()
	{
		$this->load->model('traje_model');
		$data['categorias']=$this->traje_model->select_categoria();
		$data['titulo']='Agregar Producto';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('sastres/anda',  array('error' => ' ' ));
		$this->load->view('front/footer_ver');
	}



	public function guardar_traje(){
		 		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|JPG|jpeg|JPEG|png|PNG';
                $config['remove_spaces']		= TRUE;
                $config['max_size']             = 1024;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       // $this->load->view('upload_form', $error);
                }
				//$this->formulario_agregar();
			else{
				$data = array(
					'traje_titulo' => $this->input->post('titulo'),
					'traje_tela' => $this->input->post('tela'),
					'traje_descripcion' => $this->input->post('descripcion'),
					'traje_stock' => $this->input->post('stock'),
					'traje_precio' => $this->input->post('precio'),
					
					'traje_imagen' => $_FILES['userfile']['name'],
					'traje_categoria' => $this->input->post('categoria'),
					'traje_estado' => 1
				);
				
				$this->load->model('traje_model');
				$this->traje_model->guardar_trajex($data);
				redirect('anda');
				echo "El traje se agrego Perfectamente";
			}
	}


		public function registrar_traje()
		{
			$this->form_validation->set_rules('userfile','Seleccione Imagen','callback_validar_imagen');
			$this->form_validation->set_rules('categoria','Seleccione Categoria','callback_select_validate');
			$this->form_validation->set_rules('stock','stock','integer|required');
			$this->form_validation->set_rules('precio','precio','numeric|required');
			$this->form_validation->set_rules('titulo','titulo','required');
			$this->form_validation->set_rules('tela','tela','required');
			$this->form_validation->set_rules('descripcion','descripcion','required');

			$this->form_validation->set_message('numeric','Debe ingresar valores numericos');
			$this->form_validation->set_message('integer','El campo %s debe poseer solo numeros enteros');
			$this->form_validation->set_message('required','El campo %s es obligatorio');
				if ($this->form_validation->run() == FALSE){ //error
					$this->formulario_agregar();
				}else{
					$this->guardar_traje();
				}
		}

		public function validar_imagen($userfile){

			//$nombre = $_POST['userfile'];
			$nombre = $_FILES['userfile']['name']; //error
			//if($nombre != NULL){
			//	echo "$nombre";
			//}
			if($nombre !=""){
				return true;
			}else{
					$this->form_validation->set_message('validar_imagen','Seleccione Imagen');
					return false;	
			}	
			
		}

		public function select_validate($categoria){
			if ($categoria == "0") {
				$this->form_validation->set_message('select_validate','Seleccione 1 Categoria');
					return false;
			}else{
					return true;
			}
		}

			public function gestionar_trajes()
		{
			$dato['titulo'] = 'gestion';
			$this->load->model('traje_model');
			$data['traje'] = $this->traje_model->select_trajes();
			$this->load->view('front/header_ver',$dato);
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/gestionar_traje', $data);
			$this->load->view('front/footer_ver');
			
		} 

			public function editar_traje($id = NULL) 
		{
			$this->load->model('traje_model');
			$data['categorias']=$this->traje_model->select_categoria();
			$traje = $this->traje_model->select_trajes_id($id);
			

			foreach ($traje as $row) {
				$data['traje_id'] = $row->traje_id;
				$data['titulo'] = $row->traje_titulo;
				$data['tela'] = $row->traje_tela;
				$data['descripcion'] = $row->traje_descripcion;
				$data['stock']= $row->traje_stock;
				$data['precio'] = $row->traje_precio;
				$data['estado']= $row->traje_estado;
			}
			//$data['titulo'] = 'edicion'; 

			$this->load->view('front/header_ver');
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/gestionar_traje _edicion' ,$data);
			$this->load->view('front/footer_ver');
		
		} 

		public function actualizar_traje($id=NULL)
		{
			// VALIDAR LOS DATOS INGRESADOS
		

			$data = array(
			'traje_titulo' => $this->input->post('titulo'),
			'traje_tela' => $this->input->post('tela'),
			'traje_descripcion'=> $this->input->post('descripcion'),
			'traje_stock' => $this->input->post('stock'),
			'traje_precio'=> $this->input->post('precio'),
			'traje_categoria' => $this->input->post('categoria')
			);
			$this->load->model('traje_model');
			$this->traje_model->actualizar_trajedia($data, $id);
			redirect('trajeControler/gestionar_trajes');
				
		}

		public function eliminar_traje($id=NULL) {
			$data = array(
			'traje_estado' => '0'
			);
			$this->load->model('traje_model');
			$this->traje_model->actualizar_trajedia($data, $id);
			redirect('trajeControler/gestionar_trajes');
		}

		public function activar_traje($id=NULL) 
		{
			$data = array(
			'traje_estado'=> '1'
			);
			$this->load->model('traje_model');
			$this->traje_model->actualizar_trajedia($data, $id);
			redirect('trajeControler/gestionar_trajes');
		}

		public function validar_edit($id = NULL)
		{
			//$this->form_validation->set_rules('userfile','Seleccione Imagen','callback_validar_imagen');
			$this->form_validation->set_rules('categoria','Seleccione Categoria','callback_select_validate');
			$this->form_validation->set_rules('stock','stock','integer|required');
			$this->form_validation->set_rules('precio','precio','numeric|required');
			$this->form_validation->set_rules('titulo','titulo','required');
			$this->form_validation->set_rules('tela','tela','required');
			$this->form_validation->set_rules('descripcion','descripcion','required');

			$this->form_validation->set_message('numeric','Debe ingresar valores numericos');
			$this->form_validation->set_message('integer','El campo %s debe poseer solo numeros enteros');
			$this->form_validation->set_message('required','El campo %s es obligatorio');
				if ($this->form_validation->run() == FALSE){ //error
					$this->editar_traje($id);
				}else{
					$this->actualizar_traje($id);
				}
		}

		

		
		
}