<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo_model extends CI_Model {
	function consulta($id_usuario){
		$this->db->where("id_usuario",$id_usuario);
		$resultados = $this->db->get("saldos");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}else{
			return false;
		}
	}
}
