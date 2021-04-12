<?php

/**
 * Alia Lucas Emanuel
 */
class Clientela extends CI_Model

{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

 public function guardar_usuariex($data)
 {
 	/*la tabla de mi base de datos db_lucas,  tiene el nombre usuarios*/
 	$this->db->insert('usuarios',$data);
 }


 public function guardar_consulta($data)
 {
 	/*la tabla de mi base de datos db_lucas,  tiene el nombre perfil*/
 	$this->db->insert('perfil',$data);
 }


 /*funcion buscar usuario */	
 public function buscar_usuario(/*$nombre,*/ $usuario, $contrasenia)
 {

	$this->db->select('*');
	$this->db->from('usuarios');
	/*$this->db->where('nombre', $nombre);*/
	$this->db->where('mail', $usuario);
	$this->db->where('password', $contrasenia);
	$query = $this->db->get();
	$resultado = $query->row();
	return $resultado;
 }
 public function buscarName($id){
 	$this->db->select('*');
	$this->db->from('usuarios');
	$this->db->where('id_persona', $id);
	
	$query = $this->db->get();
	$resultado = $query->row();
	return $resultado;	
 }

 public function consultex(){
 	$this->db->select('*');
	$this->db->from('perfil');
 	$query = $this->db->get();
	
	return $query->result();
 }

}



