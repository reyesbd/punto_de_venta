<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}


	public function index()
	{
		$this->load->view('admin/login');
	}

	public function validar(){
		$email = $this->input->post('email');
		$cve = sha1($this->input->post('cve'));
        
                $res = $this->login_model->get_usuario($email,$cve);
                if ($res) {
                	$this->session->set_userdata(array(
                	'nombre'  => $res->nombre.' '.$res->apellidos,
                	'rol'     => $res->rol,
                	'logged_in' => TRUE ));

                 }else{
                	redirect(base_url());
                }
	}
}