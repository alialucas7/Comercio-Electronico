<?php

/**
 * Alia Lucas Emanuel
 */
class Ventas_model extends CI_Model

{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

 	public function guardar_venta($data){
 		$this->db->insert('venta',$data);
 	}

 	public function guardar_detalle_venta($data){
 		$this->db->insert('detalle_venta', $data);
 	}

	public function ventas(){
		$this->db->select('*');
		$this->db->from('venta');
		$this->db->join('usuarios','usuarios.id_persona=venta.id_cliente');
		
		$query = $this->db->get();
		return $query->result();
	}

	public function ventas_det($id){
		$this->db->select('*');
		$this->db->from('venta');
		$this->db->join('detalle_venta','detalle_venta.id_venta=venta.venta_id');
		$this->db->join('traje','traje.traje_id=detalle_venta.id_producto');
		$this->db->where('venta_id',$id);
		$query = $this->db->get();
		return $query->result();
	}
/*
		public function ventas_det_2(){
		$this->db->select('*');
		$this->db->from('venta');
		$this->db->join('traje','traje.traje_id=detalle_venta.id_producto');
		$query = $this->db->get();
		return $query->result();
	}*/

}



