<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	function login($cuenta, $nip){
		$this->db->where("numero_cuenta",$cuenta);
		$this->db->where("nip",$nip);
		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}else{
			return false;
		}
	}
}
