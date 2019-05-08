<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function login(){
		$numero_cuenta = $this->input->post('cuenta');
		$NIP = $this->input->post('nip');
		$res = $this->Usuarios_model->login($numero_cuenta, $NIP);
		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}else{
			$data = $arrayName = array(
				'id' => $res->id_usuarios,
				'num_cuenta' => $numero_cuenta,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			if($res->id_usuarios){
				redirect(base_url()."dashboard");
			}
		}
		//echo "ok";
	}
}
