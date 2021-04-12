<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct(){
		parent::_construct();

		if (!$this->session->userdata('login')){
			redirect('iniciar_sesion');
		}
		
	}

	public function index()
	{
		
		$this->load->model('traje_model');
		$data['traje'] = $this->traje_model->select_trajes();
		$dato['titulo']='Proyecto';
		$this->load->view('front/header_ver',$dato,$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/miPlantilla',$data);
		$this->load->view('front/footer_ver');
	}

	public function admin()
	{
		$data['titulo']='Administrador';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/contenido_admin');
		$this->load->view('front/footer_ver');
	}

	public function quienesSomos()
	{
		$data['titulo']='Quienes Somos?';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/quienes-somo');
		$this->load->view('front/footer_ver');
	}

	public function comercializacion()
	{
		$data['titulo']='Comercializacion';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/comercializacion1');
		$this->load->view('front/footer_ver');
	}

		public function Registrarse()
	{
		$data['titulo']='Registrate';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/registrar_ver');
		$this->load->view('front/footer_ver');
	}

		public function TerminosUsos()
	{
		$data['titulo']='Terminos y Usos';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/terminos-usos');
		$this->load->view('front/footer_ver');
	}

		public function Productos()
	{
		$data['titulo']='Productos';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/productos');
		$this->load->view('front/footer_ver');
	}

	
		public function registrar_usuario()
	{
		$this->form_validation->set_rules('apellido', 'Apellido del usuario', 'required');
		$this->form_validation->set_rules('nombre', 'Nombre del usuario', 'required');
		$this->form_validation->set_rules('mail', 'Email',
		'required|valid_email|is_unique[usuarios.mail]');
		$this->form_validation->set_rules('telefono', 'Telefono del usuario',
		'required|integer');
		$this->form_validation->set_rules('password', 'Password',
		'trim|required|min_length[8]');
		$this->form_validation->set_rules('passconf', 'Confirmar password',
		'trim|required|matches[password]');




		$this->form_validation->set_message('is_unique', 'cliente se encuentra
		registrado');
		$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail
		válido');
		$this->form_validation->set_message('integer', 'El campo %s debe poseer solo
		numeros enteros');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('min_length', 'El campo %s debe contener
		como mínimo %d caracteres');
		$this->form_validation->set_message('matches', 'contraseñas no coinciden');
		if ($this->form_validation->run() == FALSE) {
			$this->registrarse();
		} else {
			$this->insertar_usuario();
		}
	}

		public function insertar_usuario()
	{
		$usuario = array(
		'apellido' => $this->input->post('apellido'),
		'nombre' => $this->input->post('nombre'),
		'mail' => $this->input->post('mail'),
		'telefono' => $this->input->post('telefono'),
		'password' => base64_encode($this->input->post('password')),
		'perfil_id' => 2,
		
		'estado' => 1
		);
		$this->load->model('clientela');
		$this->clientela->guardar_usuariex($usuario);
		// Agregar un mensaje de usuario registrado
		redirect('login');
	}

	public function Login()
	{
		$data['titulo']='Login';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/login');
		$this->load->view('front/footer_ver');
	}

public function iniciar_sesion() {

$this->form_validation->set_rules('mail', 'Usuario', 'required');
$this->form_validation->set_rules('password', 'Password',
'required|callback_verificar_password');
$this->form_validation->set_message('required', 'El campo %s es obligatorio');
if ($this->form_validation->run() == FALSE) {
$this->login();
} else {
$this->usuario_logueado();
}
}


public function usuario_logueado() {
if ($this->session->userdata('login')){
/*SE VERIFICA EL PERFIL DEL USUARIO PARA REDIRECCIONAR A LA PAGINA CORRESPONDIENTE*/

switch ($this->session->userdata('perfil')) {
case '1':
redirect('indexAdmin');
break;
case '2':
redirect('index');
break;
}

}
}


public function verificar_password($password)
{
// Verificar que el usuario exista
/*$nombre = $this->input->post('nombre');*/
$usuario = $this->input->post('mail');
$pass = $this->input->post('password');
$contrasenia = base64_encode($pass);
$this->load->model('clientela');
$usuario = $this->clientela->buscar_usuario(/*$nombre, */$usuario, $contrasenia);
if ($usuario) {
$datos_usuario = array(
'id_usuario' => $usuario->id_persona,
'nombre' => $usuario->nombre,
'apellido' => $usuario->apellido,
'perfil' => $usuario->perfil_id,
'login' => TRUE
);

$this->session->set_userdata($datos_usuario);
return true;
} else {
$this->form_validation->set_message('verificar_password', 'Correo y/o contraseña invalidos');
return false;
}
}

public function cerrar_sesion() {
$this->session->sess_destroy();
redirect('index');
}	

	public function Consulte()
	{
		$data['titulo']='Consulta';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('partes/consulta');
		$this->load->view('front/footer_ver');
	}

public function validar_consulta()
{
	$this->form_validation->set_rules('perfil_descripcion','Klli','required');
	$this->form_validation->set_rules('perfil_descripcion', 'campo de la consulta',
'trim|required|min_length[5]');
	$this->form_validation->set_rules('nombre', 'Nombre del usuario', 'required');
	$this->form_validation->set_rules('correo', 'Correo electronico', 'required');
	$this->form_validation->set_message('required', 'El  %s es obligatorio');
	//$this->form_validation->set_message('required', 'No se puede enviar una consulta vacia');
	$this->form_validation->set_message('min_length', 'La consulta debe contener
como mínimo 5 caracteres');

	if ($this->form_validation->run() == FALSE) {
		$this->Consulte();
		} else {
		$this-> insertar_consulta();
		}
}

	public function insertar_consulta()
	{
		$usuario = array(
		'id_perfil'=>$this->session->userdata('perfil'),
		'nombre' => $this->input->post('nombre'),
		'correo' => $this->input->post('correo'),
		'perfil_descripcion' => $this->input->post('perfil_descripcion')
		);

		$this->load->model('clientela');
		$this->clientela->guardar_consulta($usuario);


		 redirect('consulta');
 	}

 	public function consulta_usuarios(){
			$data ['titulo'] = 'consultas';
			$this->load->model('clientela');
			$data['perfil'] = $this->clientela->consultex();

			$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('partes/consultas_ver');
			$this->load->view('front/footer_ver');
		}	


	public function formulario_agregar()
	{
		$this->load->model('traje_model');
		$data['categorias']=$this->traje_model->select_categoria();
		$data['titulo']='Agregar Producto';
		$this->load->view('front/header_ver',$data);
		$this->load->view('front/navbar_ver');
		$this->load->view('sastres/anda');
		$this->load->view('front/footer_ver');
	}



	public function guardar_traje(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
		$config['remove_spaces'] = TRUE;
		$config['max_size'] = '1024';
		$this->load->library('upload',$config);

			if (!$this->upload->do_upload('imagen')) {
				echo "<script type=\"text/javascript\">alert('Ocurrio un error al intentar cargar el Archivo');</script>";
				$this->formulario_agregar();
			}else{
				$data = array(
					'traje_titulo' => $this->input->post('titulo'),
					'traje_tela' => $this->input->post('tela'),
					'traje_descripcion' => $this->input->post('descripcion'),
					'traje_stock' => $this->input->post('stock'),
					'traje_precio' => $this->input->post('precio'),
					
					'traje_imagen' => $_FILES['imagen']['name'],
					'traje_categoria' => $this->input->post('categoria'),
					'traje_estado' => 1
				);
				
				$this->load->model('traje_model');
				$this->traje_model->guardar_trajex($data);
				redirect('agregar');
			}
		}


		public function registrar_traje()
		{
			$this->form_validation->set_rules('categoria','Seleccione Categoria','callback_select_validate');
			$this->form_validation->set_rules('imagen','Seleccione Imagen','callback_validar_imagen');
			$this->form_validation->set_message('numeric','Debe ingresar valores numericos');
			$this->form_validation->set_message('integer','El campo %s debe poseer solo numeros enteros');
			$this->form_validation->set_message('required','El campo %s es obligatorio');
				if ($this->form_validation->run() == FALSE){ //error
					$this->formulario_agregar();
				}else{
					$this->guardar_traje();
				}
		}

		public function validar_imagen($imagen){
		
			$nombre_imagen = $_FILES['imagen']['name']; //error
			if (empty($nombre_imagen)) 
			{
				$this->form_validation->set_message('validar_imagen','Seleccione Imagen');
					return false;				
			}
			else{
					return true;
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

		public function gestionar_trajes(){
			$data['titulo'] = 'gestion';
			$this->load->model('traje_model');
			$data['traje'] = $this->traje_model->select_trajes();
			$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/gestionar_traje');
			$this->load->view('front/footer_ver');
			
		} 

		public function editar_traje($id=NULL) 
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
			$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/gestionar_traje_edicion');
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
			);
			$this->load->model('traje_model');
			$this->traje_model->actualizar_trajedia($data, $id);
			redirect('welcome/gestionar_trajes');
		}

		public function eliminar_traje($id=NULL) {
			$data = array(
			'traje_estado' => '0'
			);
			$this->load->model('traje_model');
			$this->traje_model->actualizar_trajedia($data, $id);
			redirect('welcome/gestionar_trajes');
		}

		public function activar_traje($id=NULL) 
		{
			$data = array(
			'traje_estado'=> '1'
			);
			$this->load->model('traje_model');
			$this->traje_model->actualizar_trajedia($data, $id);
			redirect('welcome/gestionar_trajes');
		}

		public function catalogo(){
			$data ['titulo'] = 'Catalogo';
			$this->load->model('traje_model');
			$data['traje'] = $this->traje_model->select_trajes();

			$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('sastres/listar_trajesBeta');
			$this->load->view('front/footer_ver');
		}

		public function ver_carrito()
		{
			if (!$this->cart->contents()){
			$data['message'] = 'El carrito está vacío!';
			} else{
			$data['message'] = '';
			}

			$data['titulo'] = 'Carrito de compras';
			$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			//$this->load->view('front/navbar_ver');
			$this->load->view('sastres/carrito');
			$this->load->view('front/footer_ver');
		}

		public function agregar_carrito()
		{
			$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('titulo'),
			'price'=> $this->input->post('precio'),
			'qty' => 1
			);
			$this->cart->insert($data);
			redirect('welcome/ver_carrito');

		}

		public function borrar_carrito($id)
		{

			if ($id=="all") {
			$this->cart->destroy();
			} else {
			$data = array(
			'rowid' => $id,
			'qty' => 0
			);
			$this->cart->update($data);
			}
			redirect('welcome/ver_carrito');
		}

		public function no_Registrado(){
			$data['titulo'] = 'noRegistradi'; 
			$this->load->view('front/header_ver',$data);
			$this->load->view('front/navbar_ver');
			$this->load->view('partes/noRegistrado');
			$this->load->view('front/footer_ver');
		}
		

}






