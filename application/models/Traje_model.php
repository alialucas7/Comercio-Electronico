<?php

/**
 * Alia Lucas Emanuel
 */
class Traje_model extends CI_Model

{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

 	public function guardar_trajex($data){
 		$this->db->insert('traje',$data);
 	}

 	public function select_categoria(){
 		$query = $this->db->get('traje_categoria');
 		return $query->result(); 
 	}
	
	public function select_trajes(){
		$this->db->select('*');
		$this->db->from('traje');
		$this->db->join('traje_categoria','traje_categoria.categoria_id=traje.traje_categoria');
		$query = $this->db->get();
		return $query->result();
	}

	public function select_trajes_id($id){
		$this->db->select('*');
		$this->db->from('traje');
		$this->db->where('traje_id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_trajes_id($id){
		$this->db->select('*');
		$this->db->from('traje');
		$this->db->where('traje_id',$id);
		$query = $this->db->get();
		$resulado = $query->row();
		return $resulado;
	}


	public function actualizar_trajedia($data,$id){
		$this->db->where('traje_id',$id);
		$this->db->update('traje',$data);
	}

	

	

}



